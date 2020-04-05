<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category as category;
use App\department as department; 
use App\propose as propose; 
use DB;

class categoryController extends Controller
{
    public function postcategory(Request $req)
    {
       
        $category_num = $req->input('category_num');
        $category_name = $req->input('category_name');

        $data = array(
        'category_num' =>$category_num,
        'category_name' =>$category_name);

        

        $insert = category::postcategory($data);
        return redirect()->route('category');
    }

public function category()
{
    //
    $category = category::all()->toArray();
    
    return view('category',['category' => $category]);
}


public function getcategorybyid($id)
{
    
    $category = DB::table('category')
    ->where('category_id', '=', $id)
    ->get();
    //dd($category);
    return view('editcategory',['category' => $category]);
}

public function updatecategory(Request $req)
    {
        
        $category_id = $req->input('category_id');
        $category_num = $req->input('category_num');
        $category_name = $req->input('category_name');

        $data = array('category_num' =>$category_num,
        'category_name' =>$category_name);



        category::where('category_id',$category_id)
        ->update($data);
        return redirect()->route('category');

    }

    public function approve()
    {
        //
        $category = category::all()->toArray();
        $department = department::all()->toArray();
        return view('approve',['category' => $category,'department' => $department]);
    }

}
