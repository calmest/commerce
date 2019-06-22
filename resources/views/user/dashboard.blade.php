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
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
        <div class="col-md-6 col-lg-4 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-success text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
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
                <div class="box bg-warning text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                    <h6 class="text-white">My Videos
                    <?php
                        $videos = \App\Video::where('user_id', '=', Auth::user()->id)->get();
                        echo count($videos);
                    ?>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Hello Username, Welcome to Customers Way</h2>
                    <p>A platform where users can register and subscribe ,the registered users can upload their videos online and make money through downloads of Subscribers.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Images</h3>
                    <p>Have exciting images you would like to share with friends?</p>
                    <a href="{{ url('/user/image') }}"> <button type="button" class="btn btn-outline-success">Add Image</button> </a>
                    <a href="{{ url('/user/view-images') }}"> <button type="button" class="btn btn-outline-warning">View Images</button> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Videos</h3>
                    <p>Have awesome videos you would like to share with friends?</p>
                    <a href="{{ url('/user/video') }}"> <button type="button" class="btn btn-outline-success">Add Video</button> </a>
                    <a href="{{ url('/user/view-videos') }}"> <button type="button" class="btn btn-outline-warning">View Videos</button> </a>
                </div>
            </div>
        </div>
        
    </div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection
