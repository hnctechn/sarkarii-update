<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Model;

class ClientSyllabusController extends Controller
{
    public function index(){
        $syllabuses = Model\Syllabus::where('status', 'active')->orderBy('id', 'desc')->get();
        return view('Client.Syllabuses.syllabus', compact('syllabuses'));
    }

    public function show($slug){
        $syllabus = Model\Syllabus::where('status', 'active')->where('slug_url', $slug)->first();
        return view('Client.Syllabuses.view-syllabus', compact('syllabus'));
    }
}
