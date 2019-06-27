@extends('layouts.frontLayout.front_design')

@section('content')
    <style>
        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

<<<<<<< HEAD
    </style>
=======
<style>
    /* Outer */
    .popup {
        width:100%;
        height:100%;
        display:none;
        position:fixed;
        top:0px;
        left:0px;
        background:rgba(0,0,0,0.75);
        z-index: 1000;
    }
    .btn-primary{
        background: #002347 !important;
        border: none !important;
    }
    .btn-dark{
        background: #fdcf62 !important;
        border: none !important;
    }
>>>>>>> c79196f629cc6890dc845f1b7c107f67151776d6


    /* Inner */
    .popup-inner {
        max-width:600px;
        width:90%;
        padding:20px;
        position:absolute;
        top:50%;
        left:50%;
        -webkit-transform:translate(-50%, -50%);
        transform:translate(-50%, -50%);
        box-shadow:0px 2px 6px rgba(0,0,0,1);
        border-radius:3px;
        background:#fff;
    }

    /* Close Button */
    .popup-close {
        width:30px;
        height:30px;
        padding-top:4px;
        display:inline-block;
        position:absolute;
        top:0px;
        right:0px;
        transition:ease 0.25s all;
        -webkit-transform:translate(50%, -50%);
        transform:translate(50%, -50%);
        border-radius:1000px;
        background:rgba(0,0,0,0.8);
        font-family:Arial, Sans-Serif;
        font-size:20px;
        text-align:center;
        line-height:100%;
        color:#fff;
    }

    .popup-close:hover {
        -webkit-transform:translate(50%, -50%) rotate(180deg);
        transform:translate(50%, -50%) rotate(180deg);
        background:rgba(0,0,0,1);
        text-decoration:none;
    }

    .reduces{
        width: 400px;
        height: 500px;
    }

    #viewVideos{
        margin: 50px 0px
    }    

    #viewImages{
        margin: 50px 0px
    }
</style>
<!--================ Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>{{$category->name}}</h2>
                <div class="page_link">
                  <a href="/">Home</a>
                  <a href="/marketing">Marketing</a>
                  <a href="/marketing/{{$category->id}}">{{$category->name}}</a>
                  <!-- <a class="btn" data-popup-open="popup-1" href="#">Open Popup #1</a> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--================ End Home Banner Area =================-->

<!--================ Start Content Area =================-->
    <section class="blog_area section_gap">
        <div class="container"  style="margin: 0px !important; padding: 0px !important">
            <div class="row" style="margin: 0px !important; padding: 0px !important">
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">



                        <aside class="single_sidebar_widget post_category_widget">
                                <h4 class="widget_title">{{$category->name}}</h4>
                                <ul class="list cat-list">
                                    @foreach(\App\Category::all() as $key => $value)
                                    <li>
                                    <!--     @if($category->name === $value->name)

                                        @endif -->
                                        <a href="{{$value->id}}" class="d-flex justify-content-between active">
                                            <p>{{$value->name}}</p>                                            
                                        </a>
                                    </li>
                                    @endforeach


                                </ul>
                                <div class="br"></div>
                            </aside>

                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="/img-fluid" src="/img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>

<<<<<<< HEAD
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="/img-fluid" src="/img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>

                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="/img-fluid" src="/img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>

                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Join Our Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="ti-email" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                        </aside>
=======
                        
>>>>>>> c79196f629cc6890dc845f1b7c107f67151776d6
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="single-sidebar-widget blog_left_sidebar">
<<<<<<< HEAD
                        <h4 class="widget_title">{{$category->name}}</h4><br>
                            <div class="row">
                                <h2 class="widget_title">Images</h2>
                            </div>
                            <div class="row">
                                @foreach($images as $key => $img)
                                <div class="col-lg-3 col-md-3">
                                    <h5>{{$img->image_title}}</h5>
                                    <img  src="/storage/products/{{$img->image}}" width="200px" height="200px" class="hover-shadow" alt="">
                                </div>
                                
                                @endforeach
                            </div>
                            <br>
                        <div class="row">
                            <h2 class="widget_title">Video</h2>
                        </div>
                        <div class="row">
                            @foreach($videos as $key => $vid)
                            <div class="col-lg-4 col-md-4">
                                <h5>{{$vid->video_title}}</h5>
                                <video controls>
                                    <source src="/storage/products/{{ $vid->video }}" width="200px" height="200px" type="video/mp4">
=======
                        <h4 class="widget_title">{{$category->name}}</h4>
                        <div class="btn-group">
                            <div class="btn btn-primary" id="toggleImages">Images</div>
                            <div class="btn btn-dark" id="toggleVideo">Videos</div>
                        </div>
                        <br>
                        <div class="row" id="viewImages">
                            
                            @foreach($images as $key => $img)
                            <div class="col-lg-6 col-md-6" data-popup-open="popup-{{$img->id}}">
                                <img src="/storage/products/{{$img->image}}" class="img-thumbnail" alt="">
                            </div>
                           


                            <div class="popup" data-popup="popup-{{$img->id}}">
                            <div class="popup-inner">
                                <h2>{{$img->image_title}}</h2>
                                <img src="/storage/products/{{$img->image}}" class="img-thumbnail img-responsive reduces" alt="">
                                <p>
                                    {{$img->description}}
                                </p>
                                
                                
                                <a class="popup-close" data-popup-close="popup-{{$img->id}}" href="#">x</a>
                            </div>
                        </div>

                            @endforeach
                        </div>
            
                      
                        <div class="row" id="viewVideos" style="display: none;">
                            @guest('user')
                            <p class="alert alert-primary" >Please Login to view videos</p>

                            @endguest
                              @auth('user')
                            @foreach($videos as $key => $vid)
                            <div class="col-lg-6 col-md-6" >
                                <video controls  class="img-fluid">
                                    <source src="/storage/products/{{ $vid->video }}" width="100px" height="100px" type="video/mp4">
                                 
>>>>>>> c79196f629cc6890dc845f1b7c107f67151776d6
                                    Your browser does not support the video tag.
                                </video>
                            </div>

                            <!-- <div class="popup" data-popup="popup-{{$img->id}}">
                                <div class="popup-inner">
                                    <h2>{{$vid->video_title}}</h2>
                                 
                                    <p>
                                        {{$vid->description}}
                                    </p>
                                    
                                    
                                    <a class="popup-close" data-popup-close="popup-{{$vid->id}}" href="#">x</a>
                                </div>
                            </div> -->
                            @endforeach
                            </div>
                          @endauth
                          

                    </div>
                </div>
            </div>
        </div>
    </section>

<!--<script>
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
        }
    </script> -->
    <!--================ End Content Area =================-->

<<<<<<< HEAD
    

<!--<script>
        // Open the Modal
        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        // Close the Modal
        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex += n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script> -->

@endsection ('content')
=======





@endsection 

@section('script')
<script type="text/javascript">
$(document).ready(function() {
     $('[data-popup-open]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
        console.log('test passed')
        e.preventDefault();
    });

    //----- CLOSE
    $('[data-popup-close]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

        e.preventDefault();
    });     


    $("#toggleImages").click(function(event) {
       $("#toggleVideo").removeClass('btn-primary');
       $("#toggleVideo").addClass('btn-dark');
       $(this).removeClass('btn-dark');
       $(this).addClass('btn-primary');

       $("#viewVideos").fadeOut('400');
       $("#viewImages").fadeIn('400');

    });

    $("#toggleVideo").click(function(event) {
       $("#toggleImages").removeClass('btn-primary');
       $("#toggleImages").addClass('btn-dark');
       $(this).removeClass('btn-dark');
       $(this).addClass('btn-primary');
       $("#viewImages").fadeOut('400');
       $("#showAlert").fadeOut('400');
       $("#viewVideos").fadeIn('400');
       
    });

   
});
</script>
@endsection
>>>>>>> c79196f629cc6890dc845f1b7c107f67151776d6
