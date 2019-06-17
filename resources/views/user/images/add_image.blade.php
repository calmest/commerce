
@extends('user.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Add Image</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                        <li class="breadcrumb-item">Images</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Images</li>
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
        <form class="form-horizontal" method="POST" action="{{ url('/user/add-image') }}" novalidate="novalidate" id="add_Product" name="add_Product" enctype='multipart/form-data'>
            {{ csrf_field() }}
            <div class="card-body">
                <h4 class="card-title">Add Image</h4>
                <hr>
                <br>


                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Select Category</label>
                    <div class="col-md-9">
                        <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category_id">
                            <option>Select</option>

                            @foreach ($category as $item)
                             <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 m-t-15">Image Title</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="title" placeholder="Natural Hair...">
                    </div>
                </div>

                <div class="form-group row">
                        <label class="col-md-3">Image Upload</label>
                        <div class="col-md-9">
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
                        <input type="submit" value="Add Image" class="btn btn-success">
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
