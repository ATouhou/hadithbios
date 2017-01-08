<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hadithbio extends Model
{
    //
    
    public static function createSahaba() {
        $row = new Hadithbio();
        $row->date_of_birth="0600-01-01";
        $row->date_of_death = "0650-01-01";
        $row->lat = 24.5246542;
        $row->lon = 39.56918410000003;
        
        return $row;
    }
}
