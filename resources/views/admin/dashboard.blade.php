@extends('admin.layout.admin_design')

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
        <div class="col-md-6 col-lg-2 col-xlg-3">
            <div class="card card-hover">
                <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                    <h6 class="text-white">Total Users
                        <?php
                            $users = \App\User::all();
                            echo count($users);
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
                    <h6 class="text-white">Total Images Uploaded
                         <?php
                            $images = \App\Image::all();
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
                    <h6 class="text-white">Total Videos Uploaded
                         <?php
                            $videos = \App\Video::all();
                            echo count($videos);
                        ?>
                    </h6>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Hello Admin, Welcome to Customers Way</h3>
                    <p>A platform where users can register and subscribe ,the registered users can upload their videos online and make money through downloads of Subscribers.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Images</h3>
                    <p>Have exciting images you would like to share with your users?</p>
                    <a href="{{ url('/admin/image') }}"> <button type="button" class="btn btn-outline-success">Add Image</button> </a>
                    <a href="{{ url('/admin/view-images') }}"> <button type="button" class="btn btn-outline-warning">View Images</button> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Videos</h3>
                    <p>Have awesome videos you would like to show your users?</p>
                    <a href="{{ url('/admin/video') }}"> <button type="button" class="btn btn-outline-success">Add Video</button> </a>
                    <a href="{{ url('/admin/view-videos') }}"> <button type="button" class="btn btn-outline-warning">View Videos</button> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Posts</h3>
                    <p>Engage with your users by sharing mouth watering content periodically.</p>
                    <a href="{{ url('/admin/add-post') }}"> <button type="button" class="btn btn-outline-success">Add Post</button> </a>
                    <a href="{{ url('/admin/view-post') }}"> <button type="button" class="btn btn-outline-warning">View Posts</button> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Categories</h3>
                    <p>Segment your content for easy access for your users.</p>
                    <a href="{{ url('/admin/add-category') }}"> <button type="button" class="btn btn-outline-success">Add Category</button> </a>
                    <a href="{{ url('/admin/view-category') }}"> <button type="button" class="btn btn-outline-warning">View Categories</button> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Ads</h3>
                    <p>Create engaging ads that your users and guests might like.</p>
                    <a href="{{ url('/admin/add-ad') }}"> <button type="button" class="btn btn-outline-success">Add an Add</button> </a>
                    <a href="{{ url('/admin/view-ads') }}"> <button type="button" class="btn btn-outline-warning">View Ads</button> </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Users</h3>
                    <p>Manage all your users from one spot on your account.</p>
                    <a href="{{ url('/admin/manage-users') }}"> <button type="button" class="btn btn-outline-success">Manage Users</button> </a>
                
                </div>
            </div>
        </div>

        
        
    </div>
    <style>
    .space{padding: 50px; height: 100px; }</style>
   <div class="space">

   </div>
   <div class="space">

   </div>
    <div class="space">

    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->

@endsection
