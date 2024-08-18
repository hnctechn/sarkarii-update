<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Model;

class ClientAdmitCardController extends Controller
{
    public function index(){
        $admit_cards = Model\Admit_card::where('status', 'active')->orderBy('id', 'desc')->get();
        return view('Client.Admit-cards.admit-card', compact('admit_cards'));
    }

    public function show($slug){
        $admit_card = Model\Admit_card::where('status', 'active')->where('slug_url', $slug)->first();
        return view('Client.Admit-cards.view-admit-card', compact('admit_card'));
    }
}
