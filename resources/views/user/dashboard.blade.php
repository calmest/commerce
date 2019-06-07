@extends('user.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
    <div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Dashboard</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Sales Cards  -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                    <h6 class="text-white">My Images
                        <?php
                            $images = \App\Image::where('user_id', '=', Auth::user()->id)->get();
                            echo count($images);
                        ?>
                    </h6>
                </div>
            </div>
        </div>
        <!-- Column -->
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                    <h6 class="text-white">My Videos
                     <?php
                            $videos = \App\Video::where('user_id', '=', Auth::user()->id)->get();
                            echo count($videos);
                        ?>

                        </h6>
                </div>
            </div>
        </div>

        <!-- Column -->
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection
