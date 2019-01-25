@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <h3 class="meetup-nav-brand"> MEETUP </h3>
        </div>
        <div class="col-md-6 col-md-offset-2">
            <nav>
              <ul class="nav  meet-up-nav-bar navbar-right">
                  <li><a class="meet-nav-bar-text">Add an event</a></li>
                  <li><a class="meet-nav-bar-text">Blog</a></li>
              </ul>
            </nav>
        </div>
          
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-3">
            <p class="meetup-tag-line">Where to go every Friday Night should not be a Problem</p>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-3" style="margin-top:20px;">
                <form>
                    <div class="inner-form">
                        <div class="input-field first-wrap">
                            <input id="location" type="location" placeholder="Enter your location"> 
                        </div>
                        <div class="input-field second-wrap">
                            <input type="search" placeholder="I want to go out for drinks tonight"> 
                        </div>
                        <div class="input-field third-wrap">
                            <button class="meetup-btn" type="button"> <img src="{{asset('/img/Search.png')}}" alt=""> </button>
                        </div>
                    </div>
                    <!-- <div class="col-md-5 col-md-offset-3">
                    <div class="location-input"><input type="search" placeholder="Enter location"></div>  
                        <div class="meetup-search"> <input type="search" placeholder="I want to go and drink tonight"> </div>
                        <div> <button class="meetup-btn" type="button"> <img src="{{asset('/img/Search.png')}}" alt=""> </button></div>
                    </div> -->
                <form>
        </div>        
    </div>
    <div class="row">
         <div class="col-md-12">
         <img class="meet-img" src="{{asset('/img/City_Boys_and_Girls.svg')}}" alt="city boys and girls" > 
         </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyD9z7CuLsJhxzDVd7Kw494oQlb4TBeYq_Y&libraries=places"></script>
<script src="/js/jquery.geocomplete.js"></script>

<script type="text/javascript">
   $(document).ready(function(){
       // https://github.com/ubilabs/geocomplete
       $("#location").geocomplete();
   });
</script>

@endsection
