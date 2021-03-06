@extends('admin.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Ads</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item">Ads</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Ad</li>
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
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="card">
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
        <form class="form-horizontal" method="POST" action="{{ url('/admin/add-ad') }}" novalidate="novalidate" id="add_ad" name="add_ad" enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="card-body">
                <h4 class="card-title">Add Ad</h4>
                <hr>
                <small>Fields marked with <span style="color: red;">*</span> are required.</small>
                <br><br>
                <div class="form-group row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Ad Name <span style="color: red;">*</span></label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="ad_name" name="ad_name" placeholder="Ad Name" required>
                        <span id="chkPwd"></span>
                    </div>
                </div>
                <div class="form-group row">
                    
                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Ad Image <span style="color: red;">*</span></label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="custom-file">
                                <input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose image...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                                <small> use the dimension of 350px by 300px </small>
                            </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Ad Url <span style="color: red;">*</span></label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="ad_url" name="ad_url" placeholder="Ad Url" required>
                        <span id="chkPwd"></span>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Ad Description</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <textarea type="text" class="form-control" id="ad_description" name="ad_description" placeholder="Ad Description" rows="5"></textarea>
                    </div>
                </div>
                <!-- <small>fields marked with <span style="color: red;">*</span> are required.</small> -->
            </div>
            
            <div class="border-top">
                <div class="card-body">
                        <input type="submit" value="Add Ad" class="btn btn-success">
                </div>
            </div>
        </form>
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
