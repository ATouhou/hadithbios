<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function getIndex() {
        return view('home.hello');
    }
    
    public function getInput() {
        return view("hadithbio.form");
    }
    
    public function postSave() {
        dd(\Input::all());
    }
}
