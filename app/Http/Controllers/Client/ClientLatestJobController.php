<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Model;

class ClientLatestJobController extends Controller
{
    public function index(){
        $latest_jobs = Model\Latest_job::where('status', 'active')->orderBy('id', 'desc')->get();
        return view('Client.Latest-jobs.latest-job', compact('latest_jobs'));
    }

    public function show($slug){
        $latest_job = Model\Latest_job::where('status', 'active')->where('slug_url', $slug)->first();
        return view('Client.Latest-jobs.view-latest-job', compact('latest_job'));
    }
}
