<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Joueur;
use Illuminate\Http\Request;

class appController extends Controller
{
    public function  index(){
        //logique
        $clubs = Club::all();
        return view('app.index', compact('clubs'));
    }
    public function equipe($id){
        $equipe = Club::findOrFail($id);
        $joueurs = Joueur::where('club_id', '=', $id)->get();
        return view('app.equipe', compact('equipe', 'joueurs'));
    }
}