<?php

namespace sisEscolar\Http\Controllers;

use Illuminate\Http\Request;

use sisEscolar\Http\Requests;

class Tarifas extends Controller
{
    public function index() {
    	return view('tarifas.index'); 
    }
}


