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
                <h2>Contact Us</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="/contact">Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-home"></i>
                <h6>Lagos, Nigeria</h6>
                <p>Barbeach Bus-stop<br>Victoria Island</p>
                
              </div>
              <div class="info_item">
                <i class="ti-headphone"></i>
                <h6><a href="#">+234 901 528 3598</a></h6>
                <p>Mon to Fri 9am to 6 pm</p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href="mailto:customersway145@gmail.com">Customersway145@gmail.com</a></h6>
                <p>Send us your query anytime!</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8">

          
          {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
        {{ csrf_field() }}
        <div class="form-group row">
            {{ Form::label('title', 'Name*', ['class' => 'col-2', 'for' => "name"]) }}
            <div class="col-10">
            {{ Form::text('name', '', ['class' => 'form-control here', 'name' => 'name', 'placeholder' => 'Enter Your Name Here', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Email*', ['class' => 'col-2']) }}
            <div class="col-10">
            {{ Form::email('email', '', ['class' => 'form-control here', 'name' => 'email', 'placeholder' => 'Enter Your Email Here', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Subject*', ['class' => 'col-2']) }}
            <div class="col-10">
            {{ Form::text('subject', '', ['class' => 'form-control here', 'name' => 'subject', 'placeholder' => 'Subject of Enquiry', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            {{ Form::label('title', 'Message*', ['class' => 'col-2']) }}
            <div class="col-10">
            {{ Form::textarea('msg', '', ['class' => 'form-control here', 'name' => 'message', 'placeholder' => 'Enter Your Message Here', 'cols' => '50', 'required' => 'required']) }}
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-2 col-10">
                {{ Form::submit('Send Message', ['class'=>'btn btn-warning', 'name' => 'submit']) }}
            </div>
        </div>
        {!! Form::close() !!}
          </div>
        </div>
      </div>
    </section>
    <!--================Contact Area =================-->

@endsection ('content')
