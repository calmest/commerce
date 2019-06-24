@extends('admin.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Posts</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item">Posts</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Post</li>
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
        <!-- {!! Form::open(['action' => '/admin/add-post', 'class' => 'form-horizontal', 'novalidate' => 'novalidate', 'id' => 'add_post', 'name' => 'add_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} -->
        <form class="form-horizontal" method="POST" action="{{ url('/admin/add-post') }}" novalidate="novalidate" id="add_post" name="add_post" enctype='multipart/form-data'>
            {{ csrf_field() }}
        
            <div class="card-body">
                <h4 class="card-title">Add Post</h4>
                <hr>
                <br>
                <div class="form-group">
                    <label class="col-md-3 m-t-15">Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title" placeholder="Title..." autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3">Cover Image</label>
                    <div class="col-md-9">
                        <div class="custom-file">
                            <input type="file" name="cover_image" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose image...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label class="col-md-3 m-t-15">Category</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="category" placeholder="Category...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Body</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <textarea type="text" class="form-control" id="article-ckeditor" name="body" placeholder="Body Text..." rows="5"></textarea>
                    </div>
                </div>
                <div class="border-top">
                    <div class="card-body">
                            <input type="submit" value="Add Post" class="btn btn-success">
                    </div>
                </div>
                
                
        
        <!-- {!! Form::close() !!} -->
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
