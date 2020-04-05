<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()

    {
        return view('upload_form');
    }
    public function uploadSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'file'=>'required',
        ]);

        //dd($request->file);
        if($request->hasFile('file'))
        {
            $allowedfileExtension=['doc','docx'];
            $file = $request->file('file');
            
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                
                // if($check)
                // {
                //     $items= Item::create([
                //         'name' => $request->name,
                //         'type' => 1
                //     ]);
                //     $file = $request->file;
                //     $filename = $file->store('fileuploads');
                //     // insert file data to db
                //     ItemDetails::create([
                //         'item_id' => $items->id,
                //         'filename' => $filename
                //     ]);
                //     echo "Upload Successfully";
                // }
                // else
                // {
                //     echo '<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , doc</div>';
                // }
            
        }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
