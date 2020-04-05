@extends('layouts.app')

@section('content')
<head>
  <title>ASE_คู่มือยื่นขออนุมัติโครงการ</title>
</head>

        <!-- Begin Page Content -->
        <div class="container-fluid">
      
           <!-- DataTales Example -->
           <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">คู่มือการยื่นขออนุมัติโครงการ</h6>
                </div>
              <div class="card-body">
                  <div class="w3-container">  
                  <pre><h5><center><B><u>แบบฟอร์มยื่นขออนุมัติโครงการ</u></B></center></h5>
                  เรื่อง ขออนุมัติโครงการ<br>
                  เรียน  คณบดีคณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์<br>
                  ชื่อ – นามสกุล..................................... ตำแหน่ง ................................ <br>
                  ขอจัดโครงการ ชื่อโครงการ....................................................................<br>
                  เบิกจ่ายโดยใช้เป็นรหัส ดังนี้<br>

                  ( ) 120240  โครงการพัฒนาวิชาการและกิจการนักศึกษา<br>
                  ( ) 120863  โครงการพัฒนาศักยภาพและประสิทธิภาพการปฎิบัตืงานขององค์กร<br>
                  ( ) 121116  โครงการบริหารจัดการแผนยุทธศาสตร์<br>
                  ( ) 120245  โครงการบริการวิชาการและทำนุบำรุงศิลปวัฒนธรรม<br>

                  <B>จำนวนเงิน </B>
                  <table class="table table-striped table-bordered table-hover"  >
                      <thead>
                      <tr>
                          <th bgcolor="Orange"><font color="white"><div align="center">ลำดับ</div></font></th>
                          <th bgcolor="Orange"><font color="white"><div align="center">รายการ</div></font></th>
                          <th bgcolor="Orange"><font color="white"><div align="center">จำนวนเงิน(บาท)</div></font></th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                          <th scope="row">1</th>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <th scope="row">2</th>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <th scope="row">3</th>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <th scope="row">4</th>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <th scope="row">5</th>
                          <td></td>
                          <td></td>
                      </tr>
                      </tbody>
                  </table>
                  <h6 align = 'right'>ลงชื่อ............................<br>
                      (...............................)
                  </h6>
                  <B>เงื่อนไข</B>

                  1.มีการอัพโหลดไฟล์เอกสารโครงงานตามแบบฟอร์มข้างต้นประกอบการยื่นขออนุมัติโครงการ<br>
                  2.ค่าใช้จ่ายในฝึกอบรม สัมมนา ศึกษาดูงาน ให้ผู้ยืมส่งใบสำคัญคู่จ่ายภายใน 30 วัน นับจากวันสิ้นสุดกิจกรรมนั้น<br>
                </pre>
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
            <span> &copy;คณบดีคณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์ </span>
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
