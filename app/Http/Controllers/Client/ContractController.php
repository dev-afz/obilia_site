<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function create($chat_uuid)
    {
        $chats = auth()->user()->chats()->where('chats.uuid', $chat_uuid)
            ->firstOrFail();

        return view('dashboard.client.create-contract', compact('chats'));
    }

    public function store(Request $request)
    {
        return $request->all();
    }
}
