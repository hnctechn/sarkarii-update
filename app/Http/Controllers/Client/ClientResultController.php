<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Model;

class ClientResultController extends Controller
{
    public function index(){
        $results = Model\Result::where('status', 'active')->orderBy('id', 'desc')->get();
        return view('Client.Results.result', compact('results'));
    }

    public function show($slug){
        $result = Model\Result::where('status', 'active')->where('slug_url', $slug)->first();
        return view('Client.Results.view-result', compact('result'));
    }
}
