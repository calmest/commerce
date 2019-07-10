@extends('admin.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Post Categories</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item">Posts</li>
                        <li class="breadcrumb-item">Post Categories</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Post Category</li>
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
        <form class="form-horizontal" method="POST" action="{{ url('/admin/posts/add-category') }}" novalidate="novalidate" id="add_post_category" name="add_post_category" enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="card-body">
                <h4 class="card-title">Add Post Category</h4>
                <hr>
                <small>Fields marked with <span style="color: red;">*</span> are required.</small>
                <br><br>
                <div class="form-group row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Post Category Title <span style="color: red;">*</span></label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="post_category_title" name="post_category_title" placeholder="Title..." required>
                        <span id="chkPwd"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Post Category Slug</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="post_category_slug" name="post_category_slug" placeholder="Slug...">
                        <span id="chkPwd"></span>
                    </div>
                </div>
                
                <!-- <small>fields marked with <span style="color: red;">*</span> are required.</small> -->
            </div>
            
            <div class="border-top">
                <div class="card-body">
                        <input type="submit" value="Add Post Category" class="btn btn-success">
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
