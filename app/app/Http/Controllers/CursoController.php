<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller{

    public function index(){
        return view("index");

    }
    public function create(){
        return view("create");

    }

    public function show($curso){
        return view("show", compact('curso'));
        
    }        
}