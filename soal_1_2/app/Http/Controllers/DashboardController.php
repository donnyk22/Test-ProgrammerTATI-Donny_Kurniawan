<?php

namespace App\Http\Controllers;

use App\Models\DailyLog;

class DashboardController extends Controller
{

    public function view()
    {
        if (auth()->user()->role == 'STAFF') {
            $datas = DailyLog::where('user_id', auth()->user()->id)->orderBy('created_at', 'DESC')->get()->all();
            return view('home', ['datas' => $datas]);
        }
        else{
            $datas = DailyLog::orderBy('created_at', 'DESC')->get()->all();
            return view('home_k', ['datas' => $datas]);
        }
        return redirect('/login');
    }
}
