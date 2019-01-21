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
            <!-- <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div> -->
        </div>
    </div>
    <div class="row">
        <form>
            <div class="col-md-5 col-md-offset-3">
            <div class="location-input"><input type="search" placeholder="Enter location"></div>  
                <div class="meetup-search"> <input type="search" placeholder="I want to go and drink tonight"> </div>
                <div> <button class="meetup-btn" type="button"> <img src="{{asset('/img/Search.png')}}" alt=""> </button></div>
            </div>
        <form>
    </div>
    <div class="row">
         <div class="col-md-12">
         <img class="meet-img" src="{{asset('/img/City_Boys_and_Girls.svg')}}" alt="city boys and girls" > 
         </div>
    </div>
</div>
@endsection
