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
        {!! Form::open(['action' => 'PostsController@store', 'class' => 'form-horizontal', 'novalidate' => 'novalidate', 'id' => 'add_post', 'name' => 'add_post', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        
            <div class="card-body">
                <h4 class="card-title">Add Post</h4>
                <hr>
                <br>
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title', 'autofocus']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('cover_image', 'Image') }} <br>
                    {{ Form::file('cover_image') }}
                </div>
                <div class="form-group">
                    {{ Form::label('category', 'Category') }}
                    {{ Form::text('category', '', ['class' => 'form-control', 'placeholder' => 'Category']) }}
                </div>
                <div class="form-group">
                    {{ Form::label('body', 'Body') }}
                    {!! Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text']) !!}
                </div>
                
                {{ Form::submit('Add Post', ['class'=>'btn btn-success']) }}
        
        {!! Form::close() !!}
        
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
