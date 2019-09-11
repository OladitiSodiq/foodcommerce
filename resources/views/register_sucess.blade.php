@extends('master')
@section('content')

<section>
  <div class="block">
      <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
      <div class="page-title-wrapper text-center">
          <div class="col-md-12 col-sm-12 col-lg-12">
              <div class="page-title-inner">
                  <h1 itemprop="headline">Login & Register</h1>
                  <span>A Greate Restaurant Website</span>

                  <div class="jumbotron">
                    <h3>Welcome, {{ Session::get('name') }}</h3>
                    <div>Thanks for being part of foodie.com.</div> 
                    <div><a href="/login">Login</a> to start adding items to your cart and also start placing orders.</div> 
                    
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

@stop

@section('title')
	Foodie &middot; Registration Successful.
@stop
