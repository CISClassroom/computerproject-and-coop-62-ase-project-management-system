<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\propose as propose;
use Carbon\Carbon;
use DB;
use App\category as category; 
use App\department as department; 
use Auth;
use Session;
use App\User;
use Mail;


class ProposeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function postform(Request $req)
    {
       
        $project_name = $req->input('project_name');
        $username = $req->input('username');
        $project_date = $req->input('project_date');
        $end_date = $req->input('end_date');
        $submit_date = Carbon::now();
        $close_date = $req->input('close_date');
        $location = $req->input('location');
        $year = $req->input('year');
        $expenditure = $req->input('expenditure');
        $status = $req->input('status');
        $budget = $req->input('budget');
        $bud_used = $req->input('bud_used');
        $balarce = $req->input('balarce');
        $email_status = $req->input('email_status');
        $d_propose = $req->input('d_propose');
        $d_summary = $req->input('d_summary');
        $d_payment = $req->input('d_payment');
        $user_id = Auth::id();
        $category_id = $req->input('category_id');
        $department_id = $req->input('department_id');

        
         //ตรวจสอบไฟล์
         if ($req->hasFile('d_propose')) {
            // dd('ok');
            $d_propose = $req->d_propose;
            $allowedfileExtension = ['doc', 'docx'];
            $file1 = $req->file('d_propose');

            //ดึงนามสกุลไฟล์
            $extension = $d_propose->getClientOriginalExtension();
            //ตรวจว่า นามสกุลไฟล์ ตรงกับที่อนุญาติ
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $newfilename = 'ASE_P' . Carbon::now()->format('YmdHis');
                //store to folder
                $fileresult = $file1->storeAs('fileuploads', $newfilename . '.' . $extension);
                $d_propose = $newfilename. '.' . $extension;
            }
        }
    
        $data = array('project_name' =>$project_name,
        'username' =>$username,
        'project_date' =>$project_date,
        'end_date' =>$end_date,
        'submit_date' =>$submit_date,
        'close_date' =>$close_date,
        'location' =>$location,
        'year' =>$year,
        'expenditure' =>$expenditure,
        'status' =>$status,
        'budget' =>$budget,
        'bud_used' =>$bud_used,
        'balarce' =>$balarce,
        'email_status' =>$email_status,
        'd_propose' =>$d_propose,
        'd_summary' =>$d_summary,
        'd_payment' =>$d_payment,
        'user_id' =>$user_id,
        'category_id' =>$category_id,
        'department_id' =>$department_id);
        //dd($data);

        $insert = propose::postform($data);
        return redirect()->route('user');

    }
 
    public function index()
    {
        $propose = propose::all()->toArray();

        $propose = DB::table('propose')
                ->orderBy('submit_date','asc')
                //->where ('user_id','=',Auth::id())
                ->get()->toArray();
        return view('index',['propose' => $propose]);
    }

    public function user()
    {
        if (auth::check() && auth::user()->role == 1) {
        $propose = propose::all()->toArray();

        $propose = DB::table('propose')
               ->where ('user_id','=',Auth::id())
                ->orderBy('submit_date', 'desc')
                ->get()->toArray();
        
        return view('user',['propose' => $propose]);
        }

        if(auth::user()) {
        $propose = propose::all()->toArray();

        $propose = DB::table('propose')
                ->orderBy('submit_date', 'desc')
                ->get()->toArray();
        
        return view('admin',['propose' => $propose]);
        }
        else {
            $propose = propose::all()->toArray();

            $propose = DB::table('propose')
                    ->orderBy('submit_date','asc')
                    //->where ('user_id','=',Auth::id())
                    ->get()->toArray();
            return view('index',['propose' => $propose]);
        }
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
        $user = user::find($id);
        return view('edit', compact('user','id'));
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
        //dd($id);
        $propose = propose::where('propose_id', $id)->delete();
        //dd($propose);
        //$propose->delete();
        return redirect()->route('user')->with('success','ลบข้อมูลเรียบร้อย');
    }

    public function getprojectbyid($id)
    {
        
        $propose = DB::table('propose')
        ->where('propose_id', '=', $id)
        ->get();
        $category = category::all()->toArray();
        $department = department::all()->toArray();
        //dd($propose);
        return view('projectedit',['propose' => $propose,'category'=> $category,'department'=> $department]);
    }

    public function updatedata(Request $req) //User
    {
       
        $propose_id = $req->input('propose_id');
        $project_name = $req->input('project_name');
        $username = $req->input('username');
        $project_date = $req->input('project_date');
        $end_date = $req->input('end_date');
        $submit_date = Carbon::now();
        $close_date = $req->input('close_date');
        $location = $req->input('location');
        $year = $req->input('year');
        $expenditure = $req->input('expenditure');
        $status = $req->input('status');
        $budget = $req->budget;
        $bud_used = $req->input('bud_used');
        $balarce = $req->input('balarce');
        $email_status = $req->input('email_status');
        $d_propose = $req->input('d_propose');
        $d_summary = $req->input('d_summary');
        $d_payment = $req->input('d_payment');
        $user_id = Auth::id();
        $category_id = $req->input('category_id');
        $department_id = $req->input('department_id');


        $data = array('project_name' =>$project_name,
        'username' =>$username,
        'project_date' =>$project_date,
        'end_date' =>$end_date,
        'submit_date' =>$submit_date,
        'close_date' =>$close_date,
        'location' =>$location,
        'year' =>$year,
        'expenditure' =>$expenditure,
        'status' =>$status,
        //'budget' =>$budget,
        'bud_used' =>$bud_used,
        'balarce' =>$balarce,
        'email_status' =>$email_status,        
        'user_id' =>$user_id,
        'category_id' =>$category_id,
        'department_id' =>$department_id);
        //dd($data);

        if ($req->hasFile('d_propose')) {

            $file1 = $req->file('d_propose');
            //upload new
            $newfilename = 'ASE_P' . Carbon::now()->format('YmdHis');
            //store to folder
            $guessExtension = $file1->guessExtension();
            $fileresult = $file1->storeAs('fileuploads', $newfilename . '.' . $guessExtension);
            $newfilename = $newfilename. '.' . $guessExtension;
            $data += array('d_propose'=> $newfilename);
        }

        if ($req->hasFile('d_summary')) {

            $file2 = $req->file('d_summary');
            //upload new
            $newfilename = 'ASE_S' . Carbon::now()->format('YmdHis');
            //store to folder
            $guessExtension = $file2->guessExtension();
            $fileresult = $file2->storeAs('fileuploads', $newfilename . '.' . $guessExtension);
            $newfilename = $newfilename. '.' . $guessExtension;
            $data += array('d_summary'=> $newfilename);
        }

        if ($req->hasFile('d_payment')) {

            $file3 = $req->file('d_payment');
            //upload new
            $newfilename = 'ASE_PAY' . Carbon::now()->format('YmdHis');
            //store to folder
            $guessExtension = $file3->guessExtension();
            $fileresult = $file3->storeAs('fileuploads', $newfilename . '.' . $guessExtension);
            $newfilename = $newfilename. '.' . $guessExtension;
            $data += array('d_payment'=> $newfilename);
        }


        propose::where('propose_id',$propose_id)
        ->update($data);
        return redirect()->route('user');

    }

    public function getprojectbyname($id)
    {
        
        $propose = DB::table('propose')
        ->where('propose_id', '=', $id)
        ->get();
        $category = category::all()->toArray();
        $department = department::all()->toArray();
        //dd($propose);
        return view('description',['propose' => $propose ,'category'=> $category,'department'=> $department]);
    }

    public function updateadd(Request $req)  //admin
    {
        $propose_id = $req->input('propose_id');
        $project_name = $req->input('project_name');
        $username = $req->input('username');
        $project_date = $req->input('project_date');
        $end_date = $req->input('end_date');
        $submit_date = Carbon::now();
        $close_date = $req->input('close_date');
        $location = $req->input('location');
        $year = $req->input('year');
        $expenditure = $req->input('expenditure');
        $budget = $req->input('budget');
        $bud_used = $req->input('bud_used');
        $balarce = $req->input('balarce');
        $email_status = $req->input('email_status');
        $d_propose = $req->input('d_propose');
        $d_summary = $req->input('d_summary');
        $d_payment = $req->input('d_payment');
        $user_id = Auth::id();
        $category_id = $req->input('category_id');
        $department_id = $req->input('department_id');
        $status = $req->input('status');
        $mail = $req->input('mail');
        // $mail2 = $req->input('mail2');
        // $mail3 = $req->input('mail3');
        $balarce = abs($budget-$bud_used);//คำนวณหาเงินคงเหลือ
        
        $updatedata = array('project_name' =>$project_name,
        'username' =>$username,
        'project_date' =>$project_date,
        'end_date' =>$end_date,
        'submit_date' =>$submit_date,
        'close_date' =>$close_date,
        'location' =>$location,
        'year' =>$year,
        'expenditure' =>$expenditure,
        'budget' =>$budget,
        'bud_used' =>$bud_used,
        'balarce' =>$balarce,
        'email_status' =>$email_status,
        // 'd_propose' =>$d_propose,
        // 'd_summary' =>$d_summary,
        // 'd_payment'=>$d_payment,
        'category_id' =>$category_id,
        'department_id' =>$department_id,
        'status'=>$status,);
        //dd($updatedata);  

        if ($req->hasFile('d_propose')) {

            $file1 = $req->file('d_propose');
            //upload new
            $newfilename = 'ASE_P' . Carbon::now()->format('YmdHis');
            //store to folder
            $guessExtension = $file1->guessExtension();
            $fileresult = $file1->storeAs('fileuploads', $newfilename . '.' . $guessExtension);
            $newfilename = $newfilename. '.' . $guessExtension;
            $updatedata += array('d_propose'=> $newfilename);
        }

        if ($req->hasFile('d_summary')) {

            $file2 = $req->file('d_summary');
            //upload new
            $newfilename = 'ASE_S' . Carbon::now()->format('YmdHis');
            //store to folder
            $guessExtension = $file2->guessExtension();
            $fileresult = $file2->storeAs('fileuploads', $newfilename . '.' . $guessExtension);
            $newfilename = $newfilename. '.' . $guessExtension;
            $updatedata += array('d_summary'=> $newfilename);
        }

        if ($req->hasFile('d_payment')) {

            $file3 = $req->file('d_payment');
            //upload new
            $newfilename = 'ASE_PAY' . Carbon::now()->format('YmdHis');
            //store to folder
            $guessExtension = $file3->guessExtension();
            $fileresult = $file3->storeAs('fileuploads', $newfilename . '.' . $guessExtension);
            $newfilename = $newfilename. '.' . $guessExtension;
            $updatedata += array('d_payment'=> $newfilename);
        }

        $propose = propose ::where('project_name', $project_name)
                ->select("project_name", "user_id")
                ->first();
                //dd($propose->user_id);
        $user = User::where('id',$propose->user_id)
                ->select("id", "email")
                ->first();
                //dd($user->email);
        $emailuser  = $user->email;
        //dd($emailuser);

        if ($mail=='mail') { 
            $data = array('name'=>$project_name);
            

        Mail::send('mail', $data, function($message) use($emailuser)  {
            //dd($emailuser);
            $message->to($emailuser)->subject
              ('ASE-Management !');
            // $users = DB::table('users')
            //   ->get();
           $message->from('fankittiya.w@gmail.com','สำนักงานคณะวิทยาศาสตร์ประยุกต์');
        });

    }
        if($mail=='mailapprove'){
            $data = array('name'=>$project_name);
        
            Mail::send('mailapprove', $data, function($message) use($emailuser)  {
                $message->to( $emailuser)->subject
                   ('ASE-Management !');
                // $users = DB::table('users')
                //        ->get();
                $message->from('fankittiya.w@gmail.com','สำนักงานคณะวิทยาศาสตร์ประยุกต์');
             });
        }
        if($mail=='mailpayment') {
            $data = array('name'=>$project_name); 
        
            Mail::send('mailpayment', $data, function($message) use($emailuser)  {
                $message->to($emailuser)->subject
                   ('ASE-Manaement !');
                // $users = DB::table('users')
                //        ->get();
                $message->from('fankittiya.w@gmail.com','สำนักงานคณะวิทยาศาสตร์ประยุกต์');
             });
        }
    //dd($updatedata);
     propose::where('propose_id',$propose_id)
        ->update($updatedata);

      return redirect()->route('admin');

    }

    public function setQuickTextAreaSize(Request $req)
    {
        $newplan = $req->input('newplan');
        $submit_date = Carbon::now();

        $pieces = explode("\r\n", $newplan);        
    if (is_iterable($pieces))
    {
        foreach ( $pieces as $row)
        {
            list($project_name, $budget, $category_id, $user_id, $year) = explode("\t", $row);

            $b_budget = str_replace( ',', '', $budget );            
            if(is_numeric($b_budget))
            $budget = $b_budget ;
            //dd($b);
            $string_as_intbudget = (int) $b_budget;
            //dd($string_as_intbudget);
           
        $user = User::where('name', '=', $user_id)->first();
            //dd($user->id);
        $data = array('project_name'=>$project_name,
        'budget'=>$string_as_intbudget ,
        'category_id'=>$category_id,
        'user_id'=>$user->id,
        'submit_date'=>$submit_date,
        'year'=>$year);

    
        
        DB::table('propose')
        ->insert($data);
        }
    }
    return redirect()->route('admin');
    }

    public function annual($id)
    {   
        $year='';
        if(strlen($id)){
            $year = "year";
        }else{
            $year = "propose_id";
        }
        $category = category::all()->toArray();
        $propose = DB::table('propose')->where($year,'=',$id)

                   ->get();

        $totallpropose = count($propose->toArray());

        $statuspropose = DB::table('propose')->where($year,'=',$id)
                        ->where('status','=','ยื่นดำเนินการ')
                        ->get();//สีแดง
            
        $totallstatus = count($statuspropose->toArray());

        $statusproceed = DB::table('propose')->where($year,'=',$id)
                        ->where('status','=','อยู่ระหว่างการตรวจสอบเอกสาร')->orwhere('year','=',$id)
                        ->where('status','=','ได้รับอนุมัติโครงการ')//สีเขียว
                        ->get();
        $totallproceed = count($statusproceed->toArray());

        $statusclose = DB::table('propose')->where($year,'=',$id)//สีฟ้า
                        ->where('status','=','ปิดโครงการ')
                        ->get();
        $totallclose = count($statusclose->toArray());

        $allpropose = DB::table('propose')->where($year,'=',$id)
                      ->where('status','!=','สถานะรวม')
                      ->get();
        $alltotall = count($allpropose->toArray());

        $bud_used = DB::table('propose')->where($year,'=',$id)
                        ->select( DB::raw('sum(bud_used) as bud_used '))->groupBy('year')
                        ->get();

        $balarce = DB::table('propose')->where($year,'=',$id)
                        ->select(DB::raw('sum(balarce) as balarce '))->groupBy('year')
                        ->get();
    
  
        return view('annual',['propose' => $propose,'status'=>$totallstatus,'proceed'=>$totallproceed,'close'=>$totallclose,'all'=>$alltotall,'bud_used' => $bud_used,'balarce' => $balarce,'category'=> $category
        ,"statusproceed"=>"ยื่นดำเนินการ_".$id,"statuspropose"=>"อยู่ระหว่างการตรวจสอบเอกสาร_ได้รับอนุมัติโครงการ_".$id,"statusclose"=>"ปิดโครงการ_".$id]);

    }

    public function listannual_show($id){
        $splite = explode("_",$id);
        if($splite[0] == "อยู่ระหว่างการตรวจสอบเอกสาร"){
            $year='';
            if(strlen($splite[2])){
                $year = "year";
            }else{
                $year = "propose_id";
            }

            $statusproceed = DB::table('propose')->where($year,'=',$splite[2])
            ->where('status','=','อยู่ระหว่างการตรวจสอบเอกสาร')->orwhere('year','=',$splite[2])
            ->where('status','=','ได้รับอนุมัติโครงการ')//สีเขียว
            ->get();

            return view('list_view_show',['statusproceed' => $statusproceed]);
    
        }
        else if($splite[0] == "ยื่นดำเนินการ"){
            $year='';
          
            if(strlen($splite[1])){
                $year = "year";
            }else{
                $year = "propose_id";
            }
            $statusproceed = DB::table('propose')->where($year,'=',$splite[1])
            ->where('status','=','ยื่นดำเนินการ')
            ->get();//สีแดง


            return view('list_view_show',['statusproceed' => $statusproceed]);

        }
        else if($splite[0] == "ปิดโครงการ"){
            $year='';
            if(strlen($splite[1])){
                $year = "year";
            }else{
                $year = "propose_id";
            }
            $statusproceed = DB::table('propose')->where($year,'=',$splite[1])//สีฟ้า
                        ->where('status','=','ปิดโครงการ')
                        ->get();

            return view('list_view_show',['statusproceed' => $statusproceed]);

        }
     
     
    }

     public function charts(Request $req)
    {

        $propose = DB::table('propose')->select('year', DB::raw('count(*) as total'),DB::raw('sum(budget) as budget'),DB::raw('sum(bud_used) as bud_used'),DB::raw('sum(balarce) as balarce'))->groupBy('year')
                   ->get();
                   //dd($propose);
        $totallpropose = count($propose->toArray());
       //dd($propose);

        return view('charts',['propose' => $propose]);

    }

    public function getprojectcharts($id)
    {
       
        $propose = DB::table('propose')
       ->where('propose_id', '=', $id)
        ->get();
        //dd($propose);
        return view('projectedit',['propose' => $propose]);
    }

    public function barchart()
{   
    $barchart=array();
    
    $bud_used = DB::table('propose')
        ->select('year',DB::raw('sum(bud_used) as bud_used'))
        ->groupBy('year')
        ->get()
        ->toArray();
    //dd($bud_used);
    
    foreach($bud_used as $value) 
    {
        
        $barchart[] = $value->year;
        $bar[] = $value->bud_used;
        //dd($barchart);

    }
    //dd($barchart); 
    //dd($bud_used);
    return response()->json([
        
        'labels'=>$barchart,
        'data'=> $bar,
        
    ]);
}

 public function getlist($id)
     {
        $propose = DB::table('propose')
        ->where('category_id', '=', $id)
        ->get();
        $category = category::all()->toArray();
        //dd($id);
        return view('list',['propose' => $propose,'category'=> $category,]);
     }
    
}
