<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlaProj extends Controller
{
    public function index(){
        // dd('Olá!');
        $nome = 'Gu';
        return view('welcome', ['nome'=>$nome]);
    }
}
