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
              <h5 class="m-0 font-weight-bold text-white">แบบฟอร์มโครงการ</h5>
            </div>
    <form action="updatedata" method="post" enctype="multipart/form-data">
    <input type="hidden" class="form-control" name="propose_id" value="{{$propose[0]->propose_id}}">
    <div class="col-lg-12">
        <div class="p-5">
        <h6 class="title text-primary">ข้อมูลบุคคล</h6>
            <hr align="left" width="100%" ><br>
        <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
                ชื่อโครงการ : <input type="text" class="form-control" name="project_name" value="{{$propose[0]->project_name}}">
            </div>
            <div class="col-sm-6">
                ผู้รับผิดชอบโครงการ : <input type="text" class="form-control" name="username" value="{{$propose[0]->username}}">
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            ฝ่ายรับผิดชอบ/ดำเนินงาน: 
                <select input type="text"  class="form-control" name="department_id" value="{{$propose[0]->department_id}}">  
                @foreach($department as $row) 

                @if ($row['depart_name'] == $propose[0]->department_id)
                    <option value="{{$row['depart_name']}}" selected>{{$row['depart_name'] }}</option>
                    @else
                    <option value="{{$row['depart_name']}}">{{$row['depart_name'] }}</option>
                @endif
                @endforeach
                </select>
                </div>
            </div><br>
            <h6 class="title text-primary">ข้อมูลรายละเอียดโครงการ</h6>
          <hr align="left" width="100%"><br>
        <form>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                วันที่จัดโครงการ: <input type="date" class="form-control" name="project_date" value="{{$propose[0]->project_date}}">   
            </div>
            <div class="col-sm-6">
                วันที่สิ้นสุดโครงการ : <input type="date" class="form-control" name="end_date" value="{{$propose[0]->end_date}}">
            </div>
            </div>
        </form>
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
            <div class="col-sm-6">
                ค่าใช้จ่ายโครงการ : <input type="text" class="form-control" name="expenditure" value="{{$propose[0]->expenditure}}">
            </div>
            </div>
            <div class="text-center">
            <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-4">
                @if( $propose[0]->status  == 'ร่างโครงการ')
                <input type="radio" name="status" value="ร่างโครงการ" Checked> ร่างโครงการ </input>
                <input type="radio" name="status" value="ยื่นดำเนินการ" > ยื่นดำเนินการ  </input>
                <input type="radio" name="status" value="ยื่นดำเนินการ" > เจ้าหน้าที่ดำเนินการ </input>
                @elseif( $propose[0]->status  == 'ยื่นดำเนินการ')
                <input type="radio" name="status" value="ร่างโครงการ" > ร่างโครงการ </input>
                <input type="radio" name="status" value="ยื่นดำเนินการ" Checked> ยื่นดำเนินการ </input>
                <input type="radio" name="status" value="ยื่นดำเนินการ" > เจ้าหน้าที่ดำเนินการ </input>
                @else
                <input type="radio" name="status" value="ร่างโครงการ" > ร่างโครงการ </input>
                <input type="radio" name="status" value="ยื่นดำเนินการ" > ยื่นดำเนินการ </input>
                <input type="radio" name="status" value="ยื่นดำเนินการ" Checked> เจ้าหน้าที่ดำเนินการ </input>
                @endif
            <spen class="circle">
            <spen class="chack"></spen>
            </spen>
            </div>
            </div>
            </div>
            <div class="card shadow mb-4">
            <div class="row justify-content-center">
            <div class="col-md-9  ">
            <div class="card-header py-3 bg-gradient-info">
            <h6 class=" m-0 font-weight-bold text-white"><div class="text-center">อัพโหลดไฟล์เอกสาร<div></h6><br>
            </div>
            <div class="form-group mb-sm-4"><br>
                   เอกสารเสนอโครงการ :
                   <input type="file" class="form-control" name="d_propose"  /><br>
                   <center><a type="button" class="btn btn-primary btn-round" 
                                href="{{ route('load.download', ['file_name' => $propose[0]->d_propose])}}">
                                <i class="material-icons">cloud_download</i> ดาวโหลดไฟล์
                            </a>
                   </center>
            </div>
            <div class="form-group mb-sm-4">
                   หลักฐานการเบิกจ่าย :
                   <input type="file" class="form-control" name="d_payment" /> <br>
                   <center><a type="button" class="btn btn-primary btn-round" 
                                href="{{ route('load.download', ['file_name' => $propose[0]->d_payment])}}">
                                <i class="material-icons">cloud_download</i> ดาวโหลดไฟล์
                            </a>
                   </center>
            </div>
            <div class="form-group mb-sm-4">
                   เอกสารสรุปโครงการ :
                   <input type="file" class="form-control" name="d_summary" /> <br>
                   <center><a type="button" class="btn btn-primary btn-round" 
                                href="{{ route('load.download', ['file_name' => $propose[0]->d_summary])}}">
                                <i class="material-icons">cloud_download</i>ดาวโหลดไฟล์
                            </a>
                   </center>
            </div>
            </div>
            </div>
            </div>
            <center><button class="btn btn-success" type="submit">บันทึก</button></center>
            </div>      
            </div> 
        </form>
        

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