@extends('layouts.app')

@section('content')
<head>
  <title>ASE_ยื่นเสนอโครงการ</title>
</head>

        <!-- Begin Page Content -->
        <div class="container-fluid">

      
          <!-- DataTales Example -->
      <div class="col-sm-12"> 
       <div class="card shadow mb-4">
            <div class="card-header py-3 bg-gradient-info">   
            <div class="text-center">
              <h5 class="title text-white" >{{ __('แบบการยื่นขออนุมัติโครงการ') }}<br>{{ __('คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์') }}</h5>
            </div>
            </div>
    <form action="postform" method="post" enctype="multipart/form-data">
    <div class="col-lg-12">
        <div class="p-5">
            <h6 class="title text-primary">ข้อมูลบุคคล</h6>
            <hr align="left" width="100%" ><br>
        <div class="form-group row ">
        <div class="col-sm-6 mb-3 mb-sm-0">
                ชื่อโครงการ : <input type="text" class="form-control " name="project_name" >
            </div>
            <div class="col-sm-6">
                ผู้รับผิดชอบโครงการ : <input type="text" class="form-control" name="username" >
            </div>
            </div>
          <div class="form-group row">
          <div class="col-sm-6 mb-3 mb-sm-0">
            ฝ่ายรับผิดชอบ/ดำเนินงาน: 
            <select input type="text" class="form-control" name="department_id">
            @foreach($department as $row)                                       
                      <option value="{{$row['depart_name']}}">{{$row['depart_name'] }}</option>
            @endforeach
            </select>
            </div>
          </div><br>
          <h6 class="title text-primary">ข้อมูลรายละเอียดโครงการ</h6>
          <hr align="left" width="100%"><br>
        <form>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                วันที่จัดโครงการ: <input type="date" class="form-control" name="project_date">   
            </div>
            <div class="col-sm-6">
                วันที่สิ้นสุดโครงการ : <input type="date" class="form-control" name="end_date">
            </div>
            </div>
        </form>
        <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                สถานที่จัดโครงการ : <input type="text" class="form-control" name="location" >
            </div>
            <div class="col-sm-6">
                ประจำปีงบประมาณ : <input type="text" class="form-control" name="year">  
            </div>
            </div>
            <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
            เลขหมวดหมู่โครงการ : 
                <select input type="text" id="animal" class="form-control" name="category_id" >   
                @foreach($category as $row)                                       
                      <option value="{{$row['category_num']}}">{{$row['category_num'] . " " . $row['category_name']}}</option>
                @endforeach
                </select>
          </div>
          <div class="col-sm-6">
                ค่าใช้จ่ายโครงการ : <input type="text" class="form-control" name="expenditure">
            </div>
            </div><br>
            <div class="text-center">
            <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-4">
                <input type="radio" name="status" value="ร่างโครงการ">  ร่างโครงการ    
                <input type="radio" name="status" value="ยื่นดำเนินการ" >  ยื่นดำเนินการ
            </div>
            </div>
            </div>
            <div class="card shadow mb-4">
            <div class="row justify-content-center">
            <div class="col-md-10  ">
            <div class="card-header py-3 bg-gradient-info">
            <h6 class=" m-0 font-weight-bold text-white"><div class="text-center">อัพโหลดไฟล์เอกสาร<div></h6><br>
            </div>
            <div class="form-group row " >
            <div class="col-sm-12 mb-3 mb-sm-0"><br>
            เอกสารเสนอโครงการ :
                   <input type="file" class="form-control "  name="d_propose" /> <br>
            </div>
            </div>
            </div>
            </div>
            </div>
            <center><button class="btn btn-primary" type="submit"  >ยืนยัน</button></center>
            </div>      
            </div> 
        </form>

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
