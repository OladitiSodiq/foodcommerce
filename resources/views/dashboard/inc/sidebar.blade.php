<div class="col-md-4 col-sm-12 col-lg-4">
  <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
      <div class="profile-sidebar-inner brd-rd5">
          <div class="user-info red-bg">
              <img class="brd-rd50" src="assets/images/resource/user-avatar.jpg" alt="user-avatar.jpg" itemprop="image">
              <div class="user-info-inner">
                  <h5 itemprop="headline"><a href="#" title="" itemprop="url">BUYER DEMO</a></h5>
                  <span><a href="#" title="" itemprop="url"> {{ Session::get('username') }} </a></span>
                  <a class="brd-rd3 sign-out-btn yellow-bg" href="/logout" title="" itemprop="url"><i class="fa fa-sign-out"></i> SIGN OUT</a>
              </div>
          </div>
          @if(Session::get('role')==1001)
          <ul class="nav nav-tabs">
              <li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
              <li><a href="#my-bookings" data-toggle="tab"><i class="fa fa-file-text"></i> MY BOOKINGS</a></li>
              <li><a href="#my-reviews" data-toggle="tab"><i class="fa fa-comments"></i> MY REVIEWS</a></li>
              <li><a href="#my-orders" data-toggle="tab"><i class="fa fa-shopping-basket"></i> MY ORDERS</a></li>
              <li><a href="#shortlists" data-toggle="tab"><i class="fa fa-heart"></i> SHORTLISTS</a></li>
              <li><a href="#statement" data-toggle="tab"><i class="fa fa-wpforms"></i> STATEMENT</a></li>
              <li><a href="/dashboard/add-new-product" ><i class="fa fa-cog"></i> Add Food</a></li>
          </ul>
          @endif

          @if(Session::get('role')==100)
          <ul class="nav nav-tabs">
              <li class="active"><a href="#dashboard" data-toggle="tab"><i class="fa fa-dashboard"></i> DASHBOARD</a></li>
              <li><a href="#my-bookings" data-toggle="tab"><i class="fa fa-file-text"></i> Account Details</a></li>
              <li><a href="#my-reviews" data-toggle="tab"><i class="fa fa-comments"></i> MY Order</a></li>
              <li><a href="#statement" data-toggle="tab"><i class="fa fa-wpforms"></i> STATEMENT</a></li>
              <li><a href="#account-settings" data-toggle="tab"><i class="fa fa-cog"></i> ACCOUNT SETTINGS</a></li>
          </ul>
          @endif
      </div>
  </div>
</div>
