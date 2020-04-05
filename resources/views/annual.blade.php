@extends('layouts.app')

@section('content')

<head>
    <title>ASE_ข้อมูลการจัดการรายปี</title>
</head>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-9 col-lg-7">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-warning">
                @if(count($propose) > 0)
                    <h6 class="m-0 font-weight-bold text-white">ปี {{$propose[0]->year}}</h6>
                @endif
                </div>
                

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"><u>ข้อมูลล่าสุด</u></h6>
                </div>

                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-5">
                        <div class="card border-left-warning shadow h-100 py-2 bg-gradient-danger">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            เสนอโครงการ</div>
                                        <a href="/list.{{$statusproceed}}" class="h6 mb-0 font-weight-bold text-white">{{$status}} โครงการ</a>                    
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-5">
                        <div class="card border-left-warning shadow h-100 py-2 bg-gradient-success">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            กำลังดำเนินการ</div>
                                        <a href="list.{{$statuspropose}}" class="h6 mb-0 font-weight-bold text-white">{{$proceed}} โครงการ</a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-5">
                        <div class="card border-left-warning shadow h-100 py-2 bg-gradient-info">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            ปิดโครงการ</div>
                                        <a href="list.{{$statusclose}}" class="h6 mb-0 font-weight-bold text-white">{{$close}} โครงการ</a>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-stamp fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-5">
                        <div class="card border-left-warning shadow h-100 py-2 bg-gradient-secondary">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            โครงการทั้งหมด</div>
                                        <div class="h6 mb-0 font-weight-bold text-white">{{$all}} โครงการ</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-coins fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-5">
                        <div class="card border-left-warning shadow h-100 py-2 bg-gradient-primary">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            งบประมาณที่ใช้แล้ว</div>
                                        <div class="h6 mb-0 font-weight-bold text-white">รวม
                                        @if(count($bud_used) > 0)
                                            {{number_format($bud_used[0]->bud_used)}} บาท
                                        @endif    
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-donate fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-5">
                        <div class="card border-left-warning shadow h-100 py-2 bg-gradient-dark">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            งบประมาณที่เหลือ</div>
                                        <div class="h6 mb-0 font-weight-bold text-white">รวม
                                        @if(count($balarce) > 0)
                                            {{number_format($balarce[0]->balarce)}} บาท
                                         @endif   </div>

                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-piggy-bank fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3 bg-gradient-warning">
                    <h6 class="m-0 font-weight-bold text-white">โครงการรายปี</h6>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                @foreach($propose as $row)
                                <tr>
                                    <td><a href="projectadd.{{$row->propose_id}}">{{$row->project_name}}</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- Donut Chart -->
        <div class="col-xl-3 col-lg-5">
            <div class="card shadow mb-4 ">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 bg-gradient-warning">
                    <h6 class="m-0 font-weight-bold text-white">หมวดหมู่โครงการ</h6>
                </div>
                <div class="card-body ">
                    <div class="table-responsive">
                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                            <tbody>
                                @foreach($category as $row)
                                <tr>
                                    <td><a href="projectlist.{{$row['category_num']}}">{{$row['category_name']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


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
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
<script src="js/demo/chart-bar-demo.js"></script>



@endsection
