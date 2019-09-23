
        <header class="stick">
          <div class="topbar">
              <div class="container">
                  <div class="select-wrp">
                      <select data-placeholder="Feel Like Eating">
                          <option>FEEL LIKE EATING</option>
                          <option>Burger</option>
                          <option>Pizza</option>
                          <option>Fried Rice</option>
                          <option>Chicken Shots</option>
                      </select>
                  </div>
                  <div class="select-wrp">
                      <select data-placeholder="Choose Location">
                          <option>CHOOSE LOCATION</option>
                          <option>New york</option>
                          <option>Washington</option>
                          <option>Chicago</option>
                          <option>Los Angeles</option>
                      </select>
                  </div>
                  @if(!Session::get('username'))
                  <div class="topbar-register">
                      <a class="" href="/login" title="Login" itemprop="url">LOGIN</a> / <a class="" href="/register" title="Register" >REGISTER</a>
                  </div>
                  @endif

                  @if(Session::get('username'))
                  <div class="topbar-register">
                  <a href="/account"><i class="fa fa-user-o"></i> {{ Session::get('username') }} </a> </div>
                  @endif
                  <div class="social1">
                      <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                      <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                      <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                  </div>
              </div>                
          </div><!-- Topbar -->
          <div class="logo-menu-sec">
              <div class="container">
                  <div class="logo"><h1 itemprop="headline"><a href="index-2.html" title="Home" itemprop="url"><img src="assets/images/logo2.png" alt="logo.png" itemprop="image"></a></h1></div>
                  <nav>
                      <div class="menu-sec">
                          <ul>
                              <li class="menu-item-has-children"><a href="#" title="HOMEPAGES" itemprop="url"><span class="red-clr">FOOD ORDERING</span>HOMEPAGES</a>
                                  <ul class="sub-dropdown">
                                      <li><a href="index-2.html" title="HOMEPAGE 1" itemprop="url">HOMEPAGE 1</a></li>
                                      <li><a href="index2.html" title="HOMEPAGE 2" itemprop="url">HOMEPAGE 2</a></li>
                                  </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#" title="RESTAURANTS" itemprop="url"><span class="red-clr">REAL FOOD</span>RESTAURANTS</a>
                                  <ul class="sub-dropdown">
                                      <li><a href="restaurant-found.html" title="RESTAURANT 1" itemprop="url">RESTAURANT 1</a></li>
                                      <li><a href="restaurant-found2.html" title="RESTAURANT 2" itemprop="url">RESTAURANT 2</a></li>
                                      <li><a href="restaurant-detail.html" title="RESTAURANT DETAILS" itemprop="url">RESTAURANT DETAILS</a></li>
                                      <li><a href="food-recipes.html" title="RESTAURANT DETAILS" itemprop="url">FOOD RECIPES</a></li>
                                      <li><a href="our-articles.html" title="RESTAURANT DETAILS" itemprop="url">OUR ARTICLES</a></li>
                                      <li><a href="our-menu.html" title="RESTAURANT DETAILS" itemprop="url">OUR MENU</a></li>
                                      <li><a href="our-services.html" title="RESTAURANT DETAILS" itemprop="url">OUR SERVICES</a></li>
                                  </ul>
                              </li>
                              <li class="menu-item-has-children"><a href="#" title="PAGES" itemprop="url"><span class="red-clr">REAL FOOD</span>PAGES</a>
                                  <ul class="sub-dropdown">
                                      <li class="menu-item-has-children"><a href="#" title="BLOG" itemprop="url">BLOG</a>
                                          <ul class="sub-dropdown">
                                              <li class="menu-item-has-children"><a href="#" title="BLOG LAYOUTS" itemprop="url">BLOG LAYOUTS</a>
                                                  <ul class="sub-dropdown">
                                                      <li><a href="blog-right-sidebar.html" title="BLOG WITH RIGHT SIDEBAR" itemprop="url">BLOG (W.R.S)</a></li>
                                                      <li><a href="blog-left-sidebar.html" title="BLOG WITH LEFT SIDEBAR" itemprop="url">BLOG (W.L.S)</a></li>
                                                      <li><a href="blog.html" title="BLOG WITH NO SIDEBAR" itemprop="url">BLOG</a></li>
                                                  </ul>
                                              </li>
                                              <li class="menu-item-has-children"><a href="#" title="BLOG DETAIL" itemprop="url">BLOG DETAIL</a>
                                                  <ul class="sub-dropdown">
                                                      <li><a href="blog-detail-right-sidebar.html" title="BLOG DETAIL WITH RIGHT SIDEBAR" itemprop="url">BLOG DETAIL (W.R.S)</a></li>
                                                      <li><a href="blog-detail-left-sidebar.html" title="BLOG DETAIL WITH LEFT SIDEBAR" itemprop="url">BLOG DETAIL (W.L.S)</a></li>
                                                      <li><a href="blog-detail.html" title="BLOG DETAIL WITH NO SIDEBAR" itemprop="url">BLOG DETAIL</a></li>
                                                  </ul>
                                              </li>
                                              <li class="menu-item-has-children"><a href="#" title="BLOG FORMATES" itemprop="url">BLOG FORMATES</a>
                                                  <ul class="sub-dropdown">
                                                      <li><a href="blog-detail-video.html" title="BLOG DETAIL WITH VIDEO" itemprop="url">BLOG DETAIL (VIDEO)</a></li>
                                                      <li><a href="blog-detail-audio.html" title="BLOG DETAIL WITH AUDIO" itemprop="url">BLOG DETAIL (AUDIO)</a></li>
                                                      <li><a href="blog-detail-carousel.html" title="BLOG DETAIL WITH CAROUSEL" itemprop="url">BLOG DETAIL (CAROUSEL)</a></li>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                      <li class="menu-item-has-children"><a href="#" title="SPECIAL PAGES" itemprop="url">SPECIAL PAGES</a>
                                          <ul class="sub-dropdown">
                                              <li><a href="404.html" title="404 ERROR" itemprop="url">404 ERROR</a></li>
                                              <li><a href="search-found.html" title="SEARCH FOUND" itemprop="url">SEARCH FOUND</a></li>
                                              <li><a href="search-not-found.html" title="SEARCH NOT FOUND" itemprop="url">SEARCH NOT FOUND</a></li>
                                              <li><a href="coming-soon.html" title="COMING SOON" itemprop="url">COMING SOON</a></li>
                                              <li><a href="login-register.html" title="LOGIN & REGISTER" itemprop="url">LOGIN & REGISTER</a></li>
                                              <li><a href="price-table.html" title="PRICE TABLE" itemprop="url">PRICE TABLE</a></li>
                                          </ul>
                                      </li>
                                      <li class="menu-item-has-children"><a href="#" title="GALLERY" itemprop="url">GALLERY</a>
                                          <ul class="sub-dropdown">
                                              <li><a href="gallery.html" title="FOOD GALLERY" itemprop="url">FOOD GALLERY</a></li>
                                              <li><a href="gallery-detail.html" title="GALLERY DETAIL" itemprop="url">GALLERY DETAIL</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="register-reservation.html" title="REGISTER RESERVATION" itemprop="url">REGISTER RESERVATION</a></li>
                                      <li><a href="how-it-works.html" title="HOW IT WORKS" itemprop="url">HOW IT WORKS</a></li>
                                      <li><a href="dashboard.html" title="USER PROFILE" itemprop="url">USER PROFILE</a></li>
                                      <li><a href="about-us.html" title="ABOUT US" itemprop="url">ABOUT US</a></li>
                                      <li><a href="food-detail.html" title="FOOD DETAIL" itemprop="url">FOOD DETAIL</a></li>
                                  </ul>
                              </li>
                              <li><a href="contact.html" title="CONTACT US" itemprop="url"><span class="red-clr">REAL FOOD</span>CONTACT US</a></li>
                          </ul>
                          @if(!Session::get('username'))
                          <a class="red-bg brd-rd4" href="/register" title="Register" itemprop="url">REGISTER RESTAURANT</a>
                          @endif

                          @if(Session::get('username'))
                          <a class="red-bg brd-rd4" >  <i class="fa fa-heart-o"></i>
                            <span>Your Wishlist</span></a>
                         
                          @endif
                      </div>
                  </nav><!-- Navigation -->
              </div>
          </div><!-- Logo Menu Section -->
      </header>
      