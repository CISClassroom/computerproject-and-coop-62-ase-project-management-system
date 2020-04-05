<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class department extends Model
{
    protected $table = 'department';
    public  static function postdepart($data){
        
        
        return DB::table('department')
        ->insert($data);
        

    }
}
