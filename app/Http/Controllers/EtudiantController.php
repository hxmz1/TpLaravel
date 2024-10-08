<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(){
        $nom='hamza';
        $prenom='ataoui';
        return view('etudiant',compact('nom','prenom'));
    }
}
