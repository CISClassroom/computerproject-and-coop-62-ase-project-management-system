<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class category extends Model
{
    protected $table = 'category';
    public  static function postcategory($data){
        
        return DB::table('category')
        ->insert($data);
        

    }
}
