@extends('layouts.frontLayout.front_design')

@section('content')

<!--================ Start Events Area =================-->
<div class="events_area">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="main_title">
          <h2 class="mb-3 text-white">B-Styles Marketing</h2>
          <p style="color: #ffffff;">
            Checkout our marketing styles
          </p>
        </div>
      </div>
    </div>
    <div class="row">

      @foreach(\App\Category::all() as $key => $value )
      <div class="col-lg-6 col-md-6">
        <div class="single_event position-relative">
          <div class="event_thumb">
            <img src="img/marketing/category.jpg" alt="" />
          </div>
          <div class="event_details">
            <div class="d-flex mb-4">
              <div class="date"><span>15</span> Jun</div>

              <div class="time-location">
                <p>
                  <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                </p>
                <p>
                  <span class="ti-location-pin mr-2"></span> Hilton Quebec
                </p>
              </div>
            </div>
       <!--      <p>
              {{$value->description}}
            </p> -->
            <a href="/marketing/{{$value->id}}" class="primary-btn rounded-0 mt-3" style="font-size: 20px;">{{$value->name}}</a>
          </div>
        </div>
      </div>


      @endforeach

      <div class="col-lg-12">
        <div class="text-center pt-lg-5 pt-3">
          <a href="/" class="event-link">
            <img src="img/prev.png" alt="" /> Back to Homepage
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--================ End Events Area =================-->





@endsection ('content')
