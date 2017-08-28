<?php

namespace sisEscolar\Http\Controllers;

use Illuminate\Http\Request;

use sisEscolar\Http\Requests;

class createTarifa extends Controller
{
    public function create() {
    	return view('tarifas.createTarifa'); 
    }
}



