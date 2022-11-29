<?php

namespace App\Services;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchService
{
    public function __construct()
    {
        //
    }

    public function search(Request $request)
    {
        if ($request->type == 'work') {
            return $this->searchWork($request);
        } else {
            return $this->searchTalent($request);
        }
    }


    public function searchWork(string $query)
    {
        Job::active();
    }


    public function searchTalent(string $query)
    {
    }
}
