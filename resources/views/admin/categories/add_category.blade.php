@extends('admin.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Categories</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item">Categories</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Category</li>
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
        <form class="form-horizontal" method="POST" action="{{ url('/admin/add-category') }}" novalidate="novalidate" id="add_category" name="add_category" enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="card-body">
                <h4 class="card-title">Add Category</h4>
                <hr>
                <br>
                <div class="form-group row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Category Name</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Category Name">
                        <span id="chkPwd"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Category Image</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="custom-file">
                                <input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose image...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="description" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Description</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                        <input type="submit" value="Add Category" class="btn btn-success">
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
