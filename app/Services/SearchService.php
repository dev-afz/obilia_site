<?php

namespace App\Services;

use App\Models\Job;
use App\Models\User;
use App\Models\Skill;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchService
{
    public function __construct()
    {
    }

    public function search(Request $request)
    {
        if ($request->type == 'work') {
            return $this->searchWork($request);
        } else {
            return $this->searchTalent($request);
        }
    }


    public function searchWork($request)
    {
        if ($request->ajax()) {
            return $this->searchWorkAjax($request);
        }
        $jobs =  Job::active()->isPublic()
            ->with([
                'sub_category'
            ])
            ->when($request->sub_category, function ($query) use ($request) {
                $query->whereHas('sub_category', function ($query) use ($request) {
                    $query->where('sub_categories.slug', $request->sub_category);
                });
            })
            ->when($request->q, function ($query) use ($request) {
                $query->where('metadata', 'like', '%' . $request->q . '%');
            })
            ->paginate(2);

        $skills = Skill::active()->get(['id', 'name', 'slug']);
        $categories  = Category::active()->get(['id', 'name', 'slug']);

        $categories->prepend(['id' => 'all', 'name' => 'All', 'slug' => 'all']);
        return view('browse.jobs', compact('jobs', 'skills', 'categories'));
    }



    public function searchWorkAjax($request)
    {
        $jobs = Job::active()->isPublic()
            ->when(!empty($request->q), function ($query) use ($request) {
                $query->where('metadata', 'like', '%' . $request->q . '%');
            })
            ->when($request->has('category') && $request->category !== 'all', function ($query) use ($request) {
                $query->whereHas('category', function ($query) use ($request) {
                    $query->where('categories.slug', $request->category);
                });
            })

            ->when($request->has('sub_category') &&  $request->sub_category !== 'all', function ($query) use ($request) {
                $query->whereHas('sub_category', function ($query) use ($request) {
                    $query->where('sub_categories.slug', $request->sub_category);
                });
            })

            ->when(!empty($request->tags), function ($query) use ($request) {
                $tags = explode(',', $request->tags);

                $query->whereHas('skills', function ($query) use ($tags) {
                    $query->whereIn('skill_id', $tags);
                });
            })

            ->when($request->has('sortBy'), function ($query) use ($request) {
                if ($request->sortBy == 'recent') {
                    $query->orderBy('created_at', 'desc');
                }
            })

            ->paginate($request->show ?? 2, ['*'], 'page', $request->page);

        if ($jobs->count() <= 0) {
            return response()->json([
                'status' => 'error',
                'html' => '<div class="alert alert-danger">No jobs found</div>',
                'links' => ''
            ]);
        }


        $html = '';
        $showBtn = false;
        $class = "col-md-6";
        foreach ($jobs as $key => $job) {
            $html .= view('components.elements.job-card', compact('job', 'showBtn', 'class'))->render();
        }
        $url_link_html  = view('components.helper.url-links', compact('jobs'))->render();
        return response()->json(['html' => $html, 'links' => $url_link_html]);
    }


    public function searchTalent($request)
    {
        if ($request->ajax()) {
            return $this->searchTalentAjax($request);
        }

        $users = User::active()->isUser()
            ->when($request->q, function ($query) use ($request) {
                $query->whereHas('direct_skills', function ($query) use ($request) {
                    $query->where('skills.name', 'like', '%' . $request->q . '%')
                        ->orWhere('skills.name', $request->q);
                });
            })
            ->paginate(2);

        $skills = Skill::active()->get(['id', 'name']);
        $categories  = Category::active()->get(['id', 'name']);
        $categories->prepend(['id' => 'all', 'name' => 'All']);
        return view('browse.talents', compact('users', 'skills', 'categories'));
    }


    public function searchTalentAjax($request)
    {
        $users = User::active()
            ->isUser()
            ->when(!empty($request->q), function ($query) use ($request) {
                $query->whereHas('direct_skills', function ($query) use ($request) {
                    $query->where('skills.name', 'like', '%' . $request->q . '%')
                        ->orWhere('skills.name', $request->q);
                });
            })
            ->when(!empty($request->tags), function ($query) use ($request) {
                $tags = explode(',', $request->tags);

                $query->whereHas('skills', function ($query) use ($tags) {
                    $query->whereIn('skill_id', $tags);
                });
            })
            ->paginate($request->show ?? 2, ['*'], 'page', $request->page);

        if ($users->count() <= 0) {
            return response()->json([
                'status' => 'error',
                'html' => '<div class="alert alert-danger">No Provider found</div>',
                'links' => ''
            ]);
        }


        $html = '';
        $showInvite = false;
        $class = "col-md-6";
        $html .= view('components.elements.service-provider-card', compact('users', 'class', 'showInvite'))->render();
        $url_link_html  = view('components.helper.url-links', ['jobs' => $users])->render();
        return response()->json(['html' => $html, 'links' => $url_link_html]);
    }
}
