@extends('layouts.frontLayout.front_design')

@section('content')

<!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="/about">About Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="/img/about.png" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Welcome to <b>Customers Way</b></h4>
                <p style="text-align: justify;">
                  Customers Way is a company that deals with logistics and marketing ,it was founded in june 2016 with a mission of solving  problems in the logistic and marketing world.with our expect in customers way we believe we can introduced new innovation to African in the aspect of logistic and marketing email address; <a href="mailto:customersway145@gmail.com"> Customersway145@gmail.com</a>.
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End About Area =================-->

@endsection ('content')
