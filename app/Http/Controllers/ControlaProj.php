<?php

namespace App\Http\Controllers;
use App\Models\projlaravel;
use Illuminate\Http\Request;

class ControlaProj extends Controller
{
    public function index(){
        // dd('Olá!');
        $sistem = projlaravel::all();
        // dd($sistem);
        return view('sistema.index', ['sistem'=>$sistem]);
    }
}
