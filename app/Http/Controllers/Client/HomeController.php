<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Model;

class HomeController extends Controller
{
    public function index(){
        $latest_jobs = Model\Latest_job::where('status', 'active')->orderBy('id', 'desc')->limit(10)->get();
        $admit_cards = Model\Admit_card::where('status', 'active')->orderBy('id', 'desc')->limit(10)->get();
        $results = Model\Result::where('status', 'active')->orderBy('id', 'desc')->limit(10)->get();
        $syllabuses = Model\Syllabus::where('status', 'active')->orderBy('id', 'desc')->limit(10)->get();
        $answer_keys = Model\Answer_key::where('status', 'active')->orderBy('id', 'desc')->limit(10)->get();
        return view('Client.index', compact('latest_jobs', 'admit_cards', 'results', 'syllabuses', 'answer_keys'));
    }
}
