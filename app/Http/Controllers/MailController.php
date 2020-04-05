<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\propose as propose;
use DB;


class MailController extends Controller
{
    public function html_email() {
        $data = array('name'=>"");
     
        Mail::send('mail', $data, function($message) {
           $message->to('patnapa.1997@gmail.com', 'Tutorials Point')->subject
              ('ASE_Management');
           $users = DB::table('users')
                  ->get();
           $message->from('fankittiya.w@gmail.com','สำนักงานคณะวิทยาศาสตร์ประยุกต์');
        });
        echo "Basic Email Sent. Check your inbox.";
        return redirect()->route('admin');
        
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         //
         
     }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
     public function store(Request $request)
     {
         //
    
     }
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
