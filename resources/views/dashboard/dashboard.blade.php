@extends('dashboard.master')


@section('content')
<div class="tab-pane fade in active" id="dashboard">
  <div class="dashboard-wrapper brd-rd5">
      <div class="welcome-note yellow-bg brd-rd5">
          <h4 itemprop="headline">WELCOME TO YOUR ACCOUNT</h4>
          <p itemprop="description">Things that get tricky are things like burgers and fries, or things that are deep-fried. We do have a couple of burger restaurants that are capable of doing a good</p>
          <img src="assets/images/resource/welcome-note-img.png" alt="welcome-note-img.png" itemprop="image">
          <a class="remove-noti" href="#" title="" itemprop="url"><img src="assets/images/close-icon.png" alt="close-icon.png" itemprop="image"></a>
      </div>
      <div class="dashboard-title">
          <h4 itemprop="headline">SUGGESTED RESTAURANTS</h4>
          <span>Define <a class="red-clr" href="#" title="" itemprop="url">Search criteria</a> to search for specific</span>
      </div>
      <div class="restaurants-list">
          <div class="featured-restaurant-box style3 brd-rd5 wow fadeInUp" data-wow-delay="0.2s">
            
          </div>
         
      </div>
  </div>
  @stop


@section('title')
    Ateeqa &middot Dashboard
@stop

