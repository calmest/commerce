@extends('layouts.frontLayout.front_design')

@section('content')
    <style>
        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

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


    /* Inner */
    .popup-inner {
        max-width:600px;
        height: 80%;
        width:90%;
        padding:10px;
        position:absolute;
        top:50%;
        left:50%;
        -webkit-transform:translate(-50%, -50%);
        transform:translate(-50%, -50%);
        box-shadow:0px 2px 6px rgba(0,0,0,1);
        border-radius:3px;
        background:#fff;
        overflow: scroll;
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
        <div class="container">
            <div class="row">
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
                            @foreach(\App\Ads::latest()->take(4)->get() as $ads => $ad)
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="{{ $ad->url }}"><img class="/img-fluid" src="/storage/products/{{ $ad->image }}" alt="" width="300" height="300"></a>
                                <div class="br"></div>
                            </aside>
                            @endforeach
                            

                        
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="single-sidebar-widget blog_left_sidebar">
                        <h4 class="widget_title">{{$category->name}}</h4>
                        <div class="btn-group">
                            <div class="btn btn-primary" id="toggleImages">Images</div>
                            <div class="btn btn-dark" id="toggleVideo">Videos</div>
                        </div>
                        <br>
                        <div class="row" id="viewImages">
                            
                            @foreach($images as $key => $img)
                            <div class="col-lg-3 col-md-3" data-popup-open="popup-{{$img->id}}">
                                <img src="/storage/products/{{$img->image}}" class="img-thumbnail hover-shadow" alt="customers way images" width="300px" height="250px">
                            </div>
                           
                            <div class="popup" data-popup="popup-{{$img->id}}">
                            <div class="popup-inner">
                                <h2>{{$img->image_title}}</h2>
                                <hr>
                                <img id="image_to_download" src="/storage/products/{{$img->image}}" class="img-thumbnail img-responsive reduces" alt="">
                                <hr>
                                <p>
                                    {{$img->description}}
                                </p>

                                <!-- <button id="image_handler" class="btn btn-info btn-block">Download</button> -->
                                <a class="btn btn-info btn-block" href="/storage/products/{{$img->image}}" download="{{$img->image_title}}.jpg">Download </a>
                                <button data-popup-close="popup-{{$img->id}}" class="btn btn-danger btn-block">Close</button>
                                
                                
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
                                    <div class="col-lg-4 col-md-4" >
                                        <video controls  class="img-fluid">
                                            <source src="/storage/products/{{ $vid->video }}" width="100px" height="100px" type="video/mp4">
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

@endsection('content')

@section('script')
<script type="text/javascript">
$(document).ready(function() {
     $('[data-popup-open]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
    
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

    // $('#image_handler').click(function(event) {
    //     const image = $('#image_to_download').attr('src');
    //     // var blob = new Blob(image, {type: "image"});
    //     // FileSaver.saveAs(blob, "iamge.png")
    //     // // image.download = 'image.png';
    //     console.log(image);
    // });

   
});
</script>
@endsection('script')
