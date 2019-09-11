
@extends('master')
@section('content');

        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Login & Register</h1>
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
                    <li class="breadcrumb-item active">Login & Register</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="login-register-wrapper">
                                <div class="row">
                                  
                                    <div class="col-md-9 order-md-1">
                                        <div class="sign-popup-wrapper brd-rd5">
                                            <div class="sign-popup-inner brd-rd5">
                                                <div class="sign-popup-title text-center">
                                                    <h4 itemprop="headline">SIGN UP</h4>
                                                    <span>with your social network</span>
                                                </div>
                                                <div class="popup-social text-center">
                                                    <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                                                    <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                                                    <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                                                </div>
                                                <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                                                <form class="sign-form" action="/register" method="post">
                                                  @if ($errors->any())
					                <div >
					                    <ul class="alert alert-danger">
					                        @foreach ($errors->all() as $error)
					                            <li>{{ $error }}</li>
					                        @endforeach
					                    </ul>
					                </div>
					            @endif

					             <div style="margin-top: 10px;">
					                @if( Session::has('flash') )
					                    <div class="alert alert-info">
					                        {{ Session::get('flash') }}
					                    </div>
					                @endif
					            </div>
								{{ csrf_field() }}


                                                    <div class="row">
                                                        <div class="col-md-6 mb-3">
                                                            <input class="form-control" type="text" placeholder="firstname" name="firstname" value="{{ old('firstname') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="text" placeholder="lastname" name="lastname" value="{{ old('lastname') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="text" name="username" placeholder="Username"  value="{{ old('username') }}" required="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                          <input class="form-control" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="password" placeholder="Password" name="password" value="{{ old('password') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="text" name="password2" placeholder="confirm password"  value="{{ old('password2') }}" required="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                          <input class="form-control" type="text" placeholder="Street" name="street" value="{{ old('street') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="text" placeholder="Zip" name="zip" value="{{ old('zip') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="text" name="city" placeholder="City"  value="{{ old('city') }}" required="">
                                                        </div>
                                                        <div class="col-md-6 mb-3">
                                                          <input class="form-control" type="text" placeholder="State" name="state" value="{{ old('state') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="text" placeholder="Country" name="country" value="{{ old('country') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-3">
                                                            <input class="form-control" type="text" name="phone" placeholder="Phone"  value="{{ old('phone') }}" required="">
                                                        </div>
                                                        <div class="col-md-6  mb-4">
                                                            <button class="red-bg brd-rd3" type="submit">REGISTER NOW</button>
                                                        
                                                        </div>
                                                        <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                                                            <a class="sign-btn" href="#" title="" itemprop="url">Already Registered? Sign in</a>
                                                            <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
@stop
  @section('title')
          Registration Page
  @stop
        
    