


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
        <form method="POST" class="sign-form" action= "/login" >

 
                    @if ($errors->any())
                        <div >
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    
                    <div style="margin: 30px;">
                        @if( Session::has('flash') )
                            <div class="alert alert-danger">
                                {{ Session::get('flash') }}
                            </div>
                        @endif
                    </div>
                       {{ csrf_field() }}
       
            <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd3" type="text" placeholder="Username or Email" name="username" required="">
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <input class="brd-rd3" type="password" placeholder="Password" name="password" required="">
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-12">
                <a class="sign-btn" href="#" title="" itemprop="url">Not a member? Sign up</a>
                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
            </div>
            
    </form>
    <div class="sign-popup-title text-center">
                <h4 itemprop="headline">SIGN UP</h4>
                <span>with your social network</span>
            </div>
            <div class="popup-social text-center">
                <a class="facebook brd-rd3" href="{{url('/login/facebook')}}" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                <a class="google brd-rd3" href="{{url('/login/google')}}" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                <a class="twitter brd-rd3" href="{{url('/login/twitter')}}" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
                <a class="github brd-rd3" href="{{url('/login/github')}}" title="Github" itemprop="url" target="_blank"><i class="fa fa-github"></i> Github</a>
            </div>
            <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                </div>
            </div>
        </section>
        
@stop
  @section('title')
          Registration Page
  @stop
        
    
