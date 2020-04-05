@extends('layouts.app')

@section('content')
<head>
  <title>รายละเอียดโครงการ</title>
</head>
        <!-- Begin Page Content -->
        <div class="container-fluid">

      
          <!-- DataTales Example -->
          <div class="col-sm-12">
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-info">
              <h5 class="m-0 font-weight-bold text-white">{{$propose[0]->project_name}}</h5>
            </div>

    <form action="updateadd" method="post" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="propose_id" value="{{$propose[0]->propose_id}}">
        <div class="col-lg-12">
        <div class="p-5">
        <h6 class="title text-primary">ข้อมูลบุคคล</h6>
            <hr align="left" width="100%" ><br>
        <div class="form-group row ">
        <div class="col-sm-6 mb-3 mb-sm-0">
                ชื่อโครงการ : <input type="text" class="form-control" name="project_name" value="{{$propose[0]->project_name}}">
            </div>
            <div class="col-sm-6">
                ผู้รับผิดชอบโครงการ : <input type="text" class="form-control" name="username" value="{{$propose[0]->username}}">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                เลขหมวดหมู่โครงการ : 
                <select input type="text" id="animal" class="form-control" name="department_id" value="{{$propose[0]->department_id}}">  
                @foreach($department as $row) 
                  @if ($row['depart_name'] == $propose[0]->department_id)
                    <option value="{{$row['depart_name']}}" selected>{{$row['depart_name']}}</option>
                    @else
                    <option value="{{$row['depart_name']}}">{{$row['depart_name']}}</option>
                  @endif
                @endforeach
                </select>
            </div>
            </div><br>
            <h6 class="title text-primary">ข้อมูลรายละเอียดโครงการ</h6>
          <hr align="left" width="100%"><br>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                วันที่จัดโครงการ: <input type="date" class="form-control" name="project_date" value="{{$propose[0]->project_date}}">   
            </div>
            <div class="col-sm-6">
                วันที่สิ้นสุดโครงการ : <input type="date" class="form-control" name="end_date" value="{{$propose[0]->end_date}}">
            </div>
            </div>
                <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                สถานที่จัดโครงการ : <input type="text" class="form-control" name="location" value="{{$propose[0]->location}}" >
            </div>
            <div class="col-sm-6">
                ประจำปีงบประมาณ : <input type="text" class="form-control" name="year" value="{{$propose[0]->year}}">  
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                เลขหมวดหมู่โครงการ : 
                <select input type="text" id="animal" class="form-control" name="category_id" value="{{$propose[0]->category_id}}">  
                @foreach($category as $row) 
                  @if ($row['category_num'] == $propose[0]->category_id)
                    <option value="{{$row['category_num']}}" selected>{{$row['category_num'] . " " . $row['category_name']}}</option>
                    @else
                    <option value="{{$row['category_num']}}">{{$row['category_num'] . " " . $row['category_name']}}</option>
                  @endif
                @endforeach
                </select>
            </div>
            <div class="col-sm-6 mb-sm-4">
                ค่าใช้จ่ายโครงการ : <input type="text" class="form-control" name="expenditure" value="{{$propose[0]->expenditure}}">
            </div>
            </div></br>

           <!-- เจ้าหน้าที่ -->
           <h5 class="title font-weight-bold text-success"> <div class="text-center">ส่วนสำหรับเจ้าหน้าที่</div></h5>
           <hr class="type_7 " width="50%"> 
           <div class="card shadow mb-4 bg-gradient-light">
            <div class="row justify-content-center">
            <div class="col-md-9 ">
            <div class="card-header py-3 bg-gradient-info">
     <h6 class="m-0 font-weight-bold text-white"><div class="text-center">อัพโหลดไฟล์เอกสาร</div></h6>
     </div>
     <div class="col-lg-12">
        <div class="p-5">
                <div class="form-group mb-4">
                   หลักฐานการเบิกจ่าย :
                   <input type="file"class="form-control" name="d_propose" /><br>
                   <center><a type="button" class="btn btn-primary btn-round" 
                                href="{{ route('load.download', ['file_name' => $propose[0]->d_payment])}}">
                                <i class="material-icons">cloud_download</i> ดาวโหลดไฟล์
                   </a>
                   </center>
            </div>
            <div class="form-group mb-5">
                   เอกสารสรุปโครงการ :
                   <input type="file" class="form-control" name="d_summary" /><br>
                   <center><a type="button" class="btn btn-primary btn-round" 
                                href="{{ route('load.download', ['file_name' => $propose[0]->d_summary])}}">
                                <i class="material-icons">cloud_download</i> ดาวโหลดไฟล์
                   </a>
                   </center>
            </div>
            <h6 class="title text-primary">งบประการโครงการ</h6>
            <hr align="left" width="100%"><br>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
          งบประมาณที่ได้ :<input type="text" class="form-control" name="budget" value="{{$propose[0]->budget}}">
            </div>
            <div class="col-sm-6 mb-sm-4">
          งบประมาณที่ใช้ไป :<input type="text" class="form-control" name="bud_used" value="{{$propose[0]->bud_used}}">
            </div>
            </div>
            </div>
            </div>
            </div>    
     </div>
     </div> 
           
            <div class="row">

                <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-6 col-md-6 mb-5 ">
              <div class="card border-left-warning shadow h-100 py-2 bg-gradient-light">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2 ">
                      <div class="h6 mb-0 font-weight-bold text-gray-800">
                      <h1 class="h5 font-weight-bold text-primary">สถานะดำเนินงาน</h1>
                      <hr align="left" width="100%"><br>
              @if( $propose[0]->status  == 'อยู่ระหว่างการตรวจสอบเอกสาร')
           <div class="form-group">
           <input type="radio" name="status" value="อยู่ระหว่างการตรวจสอบเอกสาร" Checked>  อยู่ระหว่างการตรวจสอบเอกสาร </input>
          </div>
           <div class="form-group">
           <input type="radio" name="status" value="ได้รับอนุมัติโครงการ" >  ได้รับอนุมัติโครงการ </input>
          </div>
           <div class="form-group">
           <input type="radio" name="status" value="ปิดโครงการ" >  ปิดโครงการ </input>
          </div>
              @elseif( $propose[0]->status  == 'ได้รับอนุมัติโครงการ')
           <div class="form-group">
            <input type="radio" name="status" value="อยู่ระหว่างการตรวจสอบเอกสาร" >  อยู่ระหว่างการตรวจสอบเอกสาร </input>
          </div>
            <div class="form-group">
            <input type="radio" name="status" value="ได้รับอนุมัติโครงการ" Checked>  ได้รับอนุมัติโครงการ </input>
          </div>
            <div class="form-group">
            <input type="radio" name="status" value="ปิดโครงการ" >  ปิดโครงการ </input>
           </div>
              @elseif( $propose[0]->status  == 'ปิดโครงการ')
           <div class="form-group">
            <input type="radio" name="status" value="อยู่ระหว่างการตรวจสอบเอกสาร" >  อยู่ระหว่างการตรวจสอบเอกสาร </input>
          </div>
            <div class="form-group">
            <input type="radio" name="status" value="ได้รับอนุมัติโครงการ" >  ได้รับอนุมัติโครงการ </input>
          </div>
            <div class="form-group">
            <input type="radio" name="status" value="ปิดโครงการ" Checked>  ปิดโครงการ </input>
           </div>
           @else
           <div class="form-group">
            <input type="radio" name="status" value="อยู่ระหว่างการตรวจสอบเอกสาร" >  อยู่ระหว่างการตรวจสอบเอกสาร </input>
          </div>
            <div class="form-group">
            <input type="radio" name="status" value="ได้รับอนุมัติโครงการ" >  ได้รับอนุมัติโครงการ </input>
          </div>
            <div class="form-group">
            <input type="radio" name="status" value="ปิดโครงการ" >  ปิดโครงการ </input>
           </div>
           @endif
             <spen class="circle">
              <spen class="chack"></spen>
              </spen>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

   <!-- Earnings (Monthly) Card Example -->
   <div class="col-xl-6 col-md-6 mb-5">
              <div class="card border-left-warning shadow h-100 py-2 bg-gradient-light">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="h6 mb-0 font-weight-bold text-gray-800">
                      <h1 class="h5 font-weight-bold text-primary">ส่งอีเมลล์</h1>
                      <hr align="left" width="100%"><br>
            
            <div class="form-group">
            <input type="radio" name="mail" value="mail">  
            กรุณาเข้าติดต่อเจ้าหน้าที่ 
            </div>
            <div class="form-group">
            <input type="radio" name="mail" value="mailapprove">  
            โครงการได้รับการอนุมัติแล้ว กรุณามาเซ็นเอกสารการโครงการ
            </div>
            <div class="form-group">
            <input type="radio" name="mail" value="mailpayment">  
            กรุณาอัพโหลดเอกสารเบิกจ่าย / ปิดโครงการ 
            </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            <center><button class="btn btn-success" type="submit" a href="inbox&u={id}" >บันทึก</a></button></center> 
        </form>
        </div>
            </div>
      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->
  

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
 

</body>

@endsection
