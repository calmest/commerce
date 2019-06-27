@extends('layouts.frontLayout.front_design')

@section('content')

<style>
  .list-group-item{
    margin: 5px 0px;
  }

  #search_result{
    background: #002347;
    padding: 10px;
    text-align: center;
  }
  .image_def{
    color: #fff;
    font-size: 18px;
    text-align: center;
    margin: 50px 0px !important;
  }
</style>

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
          <br>
          <form class="d-flex justify-content-between" id="form">
            <input
            type="text"
            class="form-control"
            id="search_input"
            placeholder="Search Here"
            />

            <button type="submit" class="btn">Search </button>

          </form>

          <br>
          <br>

          <p style="color: #ffffff;">
            <span class="badge" id="results_lenght"></span>
           <div class="btn btn-group" id="filter" style="display: none;">
             <button class="btn btn-primary" id="getAll">All</button>
             <button class="btn btn-dark" id="getOnlyImage">Images</button>
             <button class="btn btn-dark" id="getOnlyVideo">Videos</button>
           </div>
         </p>
       </div>
     </div>
   </div>
   <div class="row" id="display_category">

    @foreach(\App\Category::all() as $key => $value )
    <div class="col-lg-6 col-md-6">
      <div class="single_event position-relative">
        <div class="event_thumb">
          <img src="storage/products/{{$value->image}}" alt="" />
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

<div id="search_result" >

 <div class="row"  id="show-result">

 </div>
 
</div>
<!--================ End Events Area =================-->




<script>
  let form = document.getElementById('form');
  let searchRequest = document.getElementById('search_input');
  let result = [];

  form.addEventListener('submit', function(e) {
   e.preventDefault();
   $("#results_lenght").html('');
   $("#show-result").html('');


   $('#display_category').fadeOut('400');
   $('#search_result').fadeIn('400');

   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('[name="_token"]').val()
    }
  }); 

   $.ajax({
    url: '/search/'+searchRequest.value,
    type: 'GET',
  })
   .done(function(res) {
    console.log(res)

    $('#filter').fadeIn('400');
  
    const image = res['image'].length;
    const video = res['video'].length;

    const total = image + video;
   

    if(total == 0){
      $('#display_category').fadeIn('400');
      $('#filter').fadeOut('400');
    }
    if(total === 1){
     $("#results_lenght").append('Search Result '+total+' result found');
     }else{
     $("#results_lenght").append('Search Result '+total+' results found');
    }

   reduce(res)

 })
   .fail(function() {
    console.log("error");
  })
   .always(function() {
    console.log("complete");
  });       


 })

  reduce = data => {
    $.each(data['image'], function(index, element) {

      $("#show-result").append('  <div class="col-md-4 image"><img class="img-thumbnail" src="/storage/products/'+element['image']+'" alt="'+element['image_title']+'"><span class="image_def">'+element['image_title']+'</span>></div>')

      
    });
    

     $.each(data['video'], function(index, element) {

      $("#show-result").append('  <div class="col-md-4 video"><video controls class="img-thumbnail"><source src="/storage/products/'+element['video']+'" type="video/mp4"></video><span class="image_def">'+element['video_title']+'</span>></div>')

    
    });

      $("#getAll").click(function(event) {
        $('.image').fadeIn('400'); 
        $('.video').fadeIn('400');

        $(this).removeClass('btn-dark'); 
        $('#getOnlyImage').removeClass('btn-primary'); 
        $('#getOnlyImage').addClass('btn-dark');
        $('#getOnlyVideo').removeClass('btn-primary'); 
        $('#getOnlyVideo').addClass('btn-dark');
        $(this).addClass('btn-primary');

       
      });      

      $("#getOnlyImage").click(function(event) {
         $('.image').fadeIn('400'); 
        $(this).removeClass('btn-dark'); 
        $('#getAll').removeClass('btn-primary'); 
        $('#getAll').addClass('btn-dark');
        $('#getOnlyVideo').removeClass('btn-primary'); 
        $('#getOnlyVideo').addClass('btn-dark');
        $(this).addClass('btn-primary');

        $('.video').fadeOut('500');
      });

      $("#getOnlyVideo").click(function(event) {

        $('.image').fadeOut('500');
        $('.video').fadeIn('400');
        $(this).removeClass('btn-dark'); 
        $('#getAll').removeClass('btn-primary'); 
        $('#getAll').addClass('btn-dark');
        $('#getOnlyImage').removeClass('btn-primary'); 
        $('#getOnlyImage').addClass('btn-dark');
        $(this).addClass('btn-primary');

      });
  }

 




</script>

@endsection ('content')