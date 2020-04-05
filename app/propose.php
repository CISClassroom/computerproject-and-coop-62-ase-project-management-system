<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Session;

class propose extends Model
{
    protected $table = 'propose';
    
    public  static function postform($data){
        
        return DB::table('propose')
        ->insert($data);
        
    }

}