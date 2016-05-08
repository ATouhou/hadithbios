<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Hadithbio;
use \Input;

class HomeController extends Controller
{
    public function getIndex() {
        $hadithBios = Hadithbio::all();
        $data = array();
        $data['hadithBios'] = $hadithBios;
        return view('hadithbio.index', $data);
    }
    
    public function getInput($id = 0) {
        if ($id == 0) {
            $row = new Hadithbio();
        } else {
            $row = Hadithbio::find($id);
        }
        $data = array();
        $data['row'] = $row;
        return view("hadithbio.form", $data);
    }
    
    public function postSave() {
        
        $newBio = new Hadithbio();
        $newBio->name = Input::get('name');
        $newBio->date_of_birth = Input::get('date_of_birth');
        $newBio->date_of_death = Input::get('date_of_death');        
        
        if ($newBio->save()) {
            return "Saved successfully!";
        } else {
            return "Error while saving!";
        }
        
        // dd(\Input::all());
        
    }
    
    public function getTestconnection() {
        if(\DB::connection()->getDatabaseName()) {
            echo "connected sucessfully to database " . \DB::connection()->getDatabaseName();
            echo "<br />";
        }
        if(\DB::connection() instanceof \Illuminate\Database\MySqlConnection) {
            // connection is made
            echo "2nd connected sucessfully to database " . \DB::connection()->getDatabaseName();
            echo "<br />";
            echo "<pre>";
            $results = \DB::select('select * from test');
            print_r($results);
            echo "</pre>";
        } else {
            echo "<pre>";
            print_r (\DB::connection());
            echo "</pre>";
        }
    }
    
    public function getTestmodels() {
        $newBio = new Hadithbio();
    }
    
    public function getTestlocation() {
        return view("hadithbio.test2");        
    }
}
