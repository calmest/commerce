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
                        <li class="breadcrumb-item active" aria-current="page">View Ads</li>
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
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title">View Ads</h5>
                                <hr>
                                <br>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th><strong>Ad ID</strong></th>
                                                <th><strong>Ad Name</strong></th>
                                                <th><strong>Ad Image</strong></th>
                                                <th><strong>Ad URL</strong></th>
                                                <th><strong>Actions</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ads as $ad)
                                            <tr>
                                                <td>{{ $ad->id }}</td>
                                                <td>{{ $ad->name }}</td>
                                                <td><img src="/storage/products/{{ $ad->image }}" width="100px" height="100px" alt=""></td>
                                                <td>{{ $ad->url }}</td>
                                                <td>

                                                    <a href="{{ url('/admin/edit-ad/'.$ad->id) }}" class="btn btn-cyan btn-sm">Edit</a>
                                                    <a id="delCat" href="{{ url('/admin/delete-ad/'.$ad->id) }}" class="btn btn-danger btn-sm">Delete</a>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th><strong>Ad ID</strong></th>
                                                <th><strong>Ad Name</strong></th>
                                                <th><strong>Ad Image</strong></th>
                                                <th><strong>Ad URL</strong></th>
                                                <th><strong>Actions</strong></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                            </div>
                        </div>
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
