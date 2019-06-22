@extends('layouts.frontLayout.front_design')

@section('content')



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

                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="/img-fluid" src="/img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>

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
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="single-sidebar-widget blog_left_sidebar">
                        <h4 class="widget_title">{{$category->name}}</h4>
                        <div class="row">
                             <h2>Images</h2>
                             <table>
                                <tr>
                                        @foreach($images as $key => $img)
                                        <div class="col-lg-6 col-md-4">
                                            <td>
                                            <img src="/storage/products/{{$img->image}}" width="200px" height="200px" class="" alt=""></td>
                                        </div>
                                        @endforeach

                                </tr>
                            </table>

                        </div>

                        <div class="row">
                             <h2>Video</h2>
                            @foreach($videos as $key => $vid)
                            <div class="col-lg-6 col-md-6">
                                <video controls autoplay>
                                    <source src="/storage/products/{{ $vid->video }}" width="100px" height="100px" type="video/mp4">

                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Content Area =================-->

@endsection ('content')
