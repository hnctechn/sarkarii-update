<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Model;

class ClientAnswerKeyController extends Controller
{
    public function index(){
        $answer_keys = Model\Answer_key::where('status', 'active')->orderBy('id', 'desc')->get();
        return view('Client.Answer-keys.answer-key', compact('answer_keys'));
    }

    public function show($slug){
        $answer_key = Model\Answer_key::where('status', 'active')->where('slug_url', $slug)->first();
        return view('Client.Answer-keys.view-answer-key', compact('answer_key'));
    }
}
