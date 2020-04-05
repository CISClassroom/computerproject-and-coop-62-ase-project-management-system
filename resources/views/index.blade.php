@extends('layouts.app')

@section('content')
<head>
  <title> ระบบจัดการโครงการ</title>
</head>
        <!-- <div class="row col-md-9 col-lg-9 col-sm-3 pull-left"> 
        <div class="row col-md-9 col-lg-9 col-sm-3 pull-right"> -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
  
            <!-- DataTales Example -->
            <div class="card shadow mb-4 ">
              <div class="card-header py-3 ">
                <h6 class="m-0 font-weight-bold text-primary">รายการโครงการยื่นขอ</h6>
              </div>
              <div class="card-body">
              <div class="table-responsive" style="height:...px" >
                  <table class="table " id="dataTable" width="100%" cellspacing="0">
                    <thead >
                      <tr>
                          <th bgcolor="Green"><font color="white"><div align="center"> ชื่อโครงการ</div></font></th>
                          <th bgcolor="Green"><font color="white"><div align="center">ผู้รับผิดชอบโครงการ</div></font></th>
                          <th bgcolor="Green"><font color="white"><div align="center">สถานะโครงการ</div></font></th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($propose as $row)
                        <tr>
                          <td class="table-active">{{$row->project_name}}</td>
                          <td class="table-active">{{$row->username}}</td>
                          <td class="table-active">{{$row->status}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  </div>
                </div>
              </div>
  
          </div>
          <!-- /.container-fluid -->
          </div>
        </div>
        <!-- End of Main Content -->
  
        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span> &copy;คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสาตร์ </span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
        
  
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

    <script>
      window.onload = function() {
        document.getElementById('dataTable_length').style.display = "none";
      };
   </script>

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
           