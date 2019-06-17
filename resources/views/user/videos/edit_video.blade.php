@extends('user.layout.admin_design')

@section('content')

<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-12 d-flex no-block align-items-center">
            <h4 class="page-title">Edit Video</h4>
            <div class="ml-auto text-right">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/user/dashboard">Home</a></li>
                        <li class="breadcrumb-item">Video</li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Video</li>
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
        <form class="form-horizontal" method="POST" action="{{ url('/user/edit-video/'.$videoDetails->id) }}" novalidate="novalidate" id="add_category" name="add_category" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <h4 class="card-title">Edit {{ $videoDetails->video_title }}</h4>
                <hr>
                <br>
                <div class="form-group row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Video Name</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <input type="text" class="form-control" id="video_title" name="video_title" value="{{ $videoDetails->video_title }}" placeholder="Category Name">
                        <span id="chkPwd"></span>
                    </div>
                </div>
               
              <div class="form-group row">
                  <label class="col-md-3 m-t-15">Current Category is: <b>{{$videoDetails->category_id}}</b></label>
                  <div class="col-md-9">
                      <select class="select2 form-control custom-select" style="width: 100%; height:36px;" name="category_id">
                          <option>Change Category</option>

                          @foreach ($category as $item)
                           <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                          
                      </select>
                  </div>
              </div>


             <div class="form-group row">
                      <label class="col-md-3">Current Video</label>
                      <img src="{{$videoDetails->video}}" class="img-thumbnail" alt="{{$videoDetails->video_title}}">
                  </div>
                 


              <div class="form-group row">
                      <label class="col-md-3">Change Video</label>
                      <div class="col-md-9">
                          <div class="custom-file">
                              <input type="file" name="avatar" class="custom-file-input" id="validatedCustomFile" required>
                              <label class="custom-file-label" for="validatedCustomFile">Choose Video...</label>
                              <div class="invalid-feedback">Example invalid custom file feedback</div>
                          </div>
                      </div>
                  </div>
                 

                <div class="form-group row">
                    <label for="description" class="col-lg-3 col-md-3 col-sm-3 control-label col-form-label">Description</label>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" rows="5">{{ $videoDetails->description }}</textarea>
                    </div>
                </div>
            </div>
            <div class="border-top">
                <div class="card-body">
                        <input type="submit" value="Edit Video" class="btn btn-success">
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
