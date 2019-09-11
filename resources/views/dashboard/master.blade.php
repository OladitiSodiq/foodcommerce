<!DOCTYPE html>
<html lang="en">

	@include('inc.head')
<body itemscope>
    <main>
    
   
                <div class="preloader">
                    <div id="cooking">
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div class="bubble"></div>
                        <div id="area">
                            <div id="sides">
                                <div id="pan"></div>
                                <div id="handle"></div>
                            </div>
                            <div id="pancake">
                                <div id="pastry"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('inc.header')
                <section>
                  <div class="block">
                      <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                      <div class="page-title-wrapper text-center">
                          <div class="col-md-12 col-sm-12 col-lg-12">
                              <div class="page-title-inner">
                                  <h1 itemprop="headline">Dashboard</h1>
                                      <span>A Greate Restaurant Website</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>
              <div class="bread-crumbs-wrapper">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <section>
              <div class="block less-spacing gray-bg top-padd30">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-lg-12">
                              <div class="sec-box">
                                  <div class="dashboard-tabs-wrapper">
                                      <div class="row">
                                        @include('dashboard.inc.sidebar')
                                          <div class="col-md-8 col-sm-12 col-lg-8">
                                              <div class="tab-content">
                                                @yield('content')
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div><!-- Section Box -->
                          </div>
                      </div>
                  </div>
              </div>
            </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
