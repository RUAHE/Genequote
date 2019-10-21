<?php

namespace App\Http\Controllers;

use App\citation;
use Illuminate\Http\Request;

class CitationController extends Controller
{
    public function show_citation(){
        
        $liste_citation = citation::all();

        return view('welcome',compact('liste_citation'));
    }
}