@extends('layouts.app')

@section('content')
<head>
  <title>ASE_เพิ่มหมวดหมู่</title>
</head>

        <!-- Begin Page Content -->
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-gradient-light">
                <div class="card-header bg-gradient-secondary text-white">{{ __('เพิ่มหมวดหมู่') }}</div>
                <div class="card-body">
            <form action="postcategory" method="post" enctype="multipart/form-data">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-4">
                      เลขหมวดหมู่ :<input type="text" class="form-control " placeholder="000000" name="category_num">
                    </div>
                    <div class="col-sm-6">
                      ชื่อหมวดหมู่ :<input type="text" class="form-control " placeholder="--------"
                        name="category_name">
                    </div>
                  </div>
                  <center><button type="submit" class="btn btn-primary"> บันทึก </button></center>
                </div>
              </div>
            </form>
          </div>
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
            <span>&copy; คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสาตร์</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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