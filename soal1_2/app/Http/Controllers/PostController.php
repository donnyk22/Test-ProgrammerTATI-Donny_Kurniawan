<?php

namespace App\Http\Controllers;

use App\Models\DailyLog;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function new()
    {
        return view('create_activity');
    }

    public function edit(Request $request)
    {
        $post = DailyLog::where([['id', $request->id], ['user_id', auth()->user()->id], ['status', 0]])->first();
        return view('edit_activity', ['post' => $post]);
    }

    public function delete(Request $request)
    {
        DailyLog::where([['id', $request->id], ['user_id', auth()->user()->id], ['status', 0]])->delete();
        return redirect('/');
    }

    public function save(Request $request)
    {
        if ($request->id == null) {
            DailyLog::create([
                'title' => $request->title,
                'body' => $request->body,
                'user_id' => auth()->user()->id,
                'status' => 0
            ]);
            return redirect('/');
        };
        DailyLog::where([['id', $request->id], ['user_id', auth()->user()->id], ['status', 0]])->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return redirect('/');
    }

    public function approve(Request $request)
    {
        if (auth()->user()->role != 'STAFF') {
            DailyLog::where('id', $request->id)->update([
                'status' => 1
            ]);
        }
        return redirect('/');
    }

    public function reject(Request $request)
    {
        if (auth()->user()->role != 'STAFF') {
            DailyLog::where('id', $request->id)->update([
                'status' => -1
            ]);
        }
        return redirect('/');
    }
}