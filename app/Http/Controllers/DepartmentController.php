<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\department as department;
use DB;

class DepartmentController extends Controller
{
    public function postdepart(Request $req)
    {
        $department_id = $req->input('department_id');
        $depart_name = $req->input('depart_name');

        $data = array('department_id' =>$department_id,
        'depart_name' =>$depart_name);


        $insert = department::postdepart($data);
        return redirect()->route('department');
    }

    public function department()
{
    //
    $department = department::all()->toArray();
    
    return view('department',['department' => $department]);
}

public function getdepartmentbyid($id)
{
    
    $department = DB::table('department')
    ->where('department_id', '=', $id)
    ->get();
    //dd($department);
    return view('editdepartment',['department' => $department]);
}


public function updatedepart(Request $req)
    {
        $department_id = $req->input('department_id');
        $depart_name = $req->input('depart_name');

        $data = array('department_id' =>$department_id,
        'depart_name' =>$depart_name);


        department::where('department_id',$department_id)
        ->update($data);
        return redirect()->route('department');

    }

}
