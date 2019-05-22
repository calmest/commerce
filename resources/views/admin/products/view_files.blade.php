@extends('admin.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Product</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item">Product</li>
                        <li class="breadcrumb-item active" aria-current="page">View Product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
    .card{
        padding: 20px !important;
        border-radius: 5px; 
    }
</style>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->


<!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">

                    <div class="col-12">
                        @if (Session::has('flash_message_error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{!! session('flash_message_error') !!}</strong>
                            </div>
                        @endif
                        @if (Session::has('flash_message_success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{!! session('flash_message_success') !!}</strong>
                            </div>
                        @endif
                        
                            <h2>Images</h2>

                            
                                @foreach ($images as $image)
                                <div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="el-card-item">
                                                <div class="el-card-avatar el-overlay-1"> <img class="img-thumbnail img-responsive" src="/storage/products/{{ $image->image }}"" alt="user">
                                                    <div class="el-overlay">
                                                        <ul class="list-style-none el-info">
                                                            <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/big/img2.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                            <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="el-card-content">
                                                    <h4 class="m-b-0">{{$image->Products[0]['product_name']}}</h4> <span class="text-muted">subtitle of project</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            
                        

                        



                    </div>
                </div>

                <div class="row">

                        <div class="col-12">
                            @if (Session::has('flash_message_error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{!! session('flash_message_error') !!}</strong>
                                </div>
                            @endif
                            @if (Session::has('flash_message_success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{!! session('flash_message_success') !!}</strong>
                                </div>
                            @endif
                            
                                <h2>Video</h2>
    
                                
                                    @foreach ($videos as $video)
                                    <div class="col-lg-3 col-md-6">
                                            <div class="card">
                                                <div class="el-card-item">
                                                    <div class="el-card-avatar el-overlay-1"> 
                                                            <video controls autoplay width="200px" height="200px" >
                                                                    <source src="/storage/products/{{ $video->video }}" type="video/mp4">
                                                                    <source src="/storage/products/{{ $video->video }}" type="video/ogg">
                                                                    Your browser does not support the video tag.
                                                                  </video>
                                                        <div class="el-overlay">
                                                            <ul class="list-style-none el-info">
                                                                <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../../assets/images/big/img2.jpg"><i class="mdi mdi-magnify-plus"></i></a></li>
                                                                <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-link"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="el-card-content">
                                                        <h4 class="m-b-0">Project title</h4> <span class="text-muted">subtitle of project</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                
                            
    
                            
    
    
    
                        </div>
                    </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->


@endsection ('content')
