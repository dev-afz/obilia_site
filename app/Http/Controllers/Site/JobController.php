<?php

namespace App\Http\Controllers\Site;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\UserService;
use Illuminate\Validation\ValidationException;
use Str;

class JobController extends Controller
{
    public function show($slug)
    {

        $job = Job::where('slug', $slug)
            ->isPublic()
            ->with([
                'sub_category', 'experience', 'work_length', 'skills' => ['skill'], 'responsibilities',
                'application' => fn ($q) => $q->where('user_id', auth()->id())
            ])
            ->withCount(['applications'])
            ->firstOrFail();

        return view('job-details', compact('job'));
    }

    public function toggleLike(Request $request)
    {
        $request->validate([
            'job' => 'required|string',
            'liked' => 'required|in:true,false',
        ]);
        $job = Job::where('slug', $request->job)->firstOrFail();
        $user = auth()->user();

        $liked = $user->liked_jobs()->where('likeable_id', $job->id)->exists();

        ($liked) ? $user->unlikeJob($job->id) : $user->likeJob($job->id);

        return response()->json([
            'status' => 'success',
            'message' => $liked ? 'Job unliked' : 'Job liked',
        ]);
    }



    public function startChat(Request $request)
    {
        $request->validate([
            'service' => 'required|integer',
        ]);
        $user = auth()->user();
        //if user table is users
        if ($user->getTable() !== 'users') {
            throw ValidationException::withMessages([
                'service' => 'You are not allowed to start chat',
            ]);
        }

        $service = UserService::where('id', $request->service)
            ->where('user_id', '!=', $user->id)
            ->with('user')
            ->firstOrFail();

        $anotherUser = $service->user;

        $chat = $user->chats()
            ->whereHas('participants', fn ($q) => $q->where('user_id', $anotherUser->id))
            ->first();


        if ($chat) {
            return response()->json([
                'status' => 'success',
                'message' => 'Chat already exists',
                'redirect' => ($user->isProvider()) ? route('service-provider.chat.index') . "?chat=$chat->uuid" : route('client.chat.index') . "?chat=$chat->uuid",
            ]);
        }

        $chat =  Chat::create([
            'name' => $user->name . ' & ' . $anotherUser->name,
            'uuid' => Str::uuid(),
            'status' => 'active',
        ]);


        $chat->messages()->create([
            'sender_id' => $user->id,
            'message' => 'Hi, I am interested in your service.',
        ]);

        $chat->participants()->createMany([
            ['user_id' => $user->id, 'role' => 'owner'],
            ['user_id' => $anotherUser->id, 'role' => 'member'],
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Chat created',
            'redirect' => ($user->isProvider()) ? route('service-provider.chat.index') . "?chat=$chat->uuid" : route('client.chat.index') . "?chat=$chat->uuid",
        ]);
    }
}
