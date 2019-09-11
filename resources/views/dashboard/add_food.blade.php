@extends('dashboard.master')


@section('content')


    <div class="tab-pane fade in active" id="account-settings">
        <div class="tabs-wrp account-settings brd-rd5">
            <h4 itemprop="headline">ACCOUNT SETTINGS</h4>
            <div class="account-settings-inner">
                <div class="row">
                  <form method="post" action="/add-new-product"  class="form-horizontal" enctype="multipart/form-data">
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

                    <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="profile-info text-center">
                            <div class="profile-thumb brd-rd50">
                                <img id="profile-display" src="assets/images/resource/profile-img1.jpg" alt="profile-img1.jpg" itemprop="image">
                            </div>
                           
                            <div class="profile-img-upload-btn">
                                <label class="fileContainer brd-rd5 yellow-bg">
                                    UPLOAD PICTURE
                                    <input id="profile-upload" name="file" type="file"/>
                                </label>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8 col-lg-8">
                        <div class="profile-info-form-wrap">
                            <div class="profile-info-form">
                                <div class="row mrg20">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <label>Name Of Food<sup>*</sup></label>
                                        <input class="brd-rd3" name="title" type="text" placeholder="Name Of Food" value="{{ old('title') }}">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <label>Regular Price<sup>*</sup></label>
                                        <input class="brd-rd3" type="text" placeholder="Enter Regular price" name="full_price" value="{{ old('full_price') }}">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <label>Sales Price<sup>*</sup></label>
                                        <input class="brd-rd3" type="text" placeholder="Enter Your Phone No " name="discounted_price" value="{{ old('discounted_price') }}">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                      <label>Quantity<sup>*</sup></label>
                                      <input class="brd-rd3" type="text" name="quantity" placeholder="" value="{{ old('quantity') }}">
                                  </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <label>Category<sup>*</sup></label>
                                        <div class="select-wrp">
                                            <select name="category">
                                                <option value="Swallow">Swallow</option>
                                                <option value="Cereal">Cereal</option>
                                                <option value="Snacks">Snacks</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                      <label>Short Description<sup>*</sup></label>
                                      <input class="brd-rd3" type="text" placeholder="Enter short description" value="{{ old('short_desc') }}" name="short_desc"/>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                      <label>Full Description<sup>*</sup></label>
                                        <textarea name="full_desc" rows="2" cols="20" id="" class="form-control resizable_textarea" placeholder="Enter full description">{{ old('full_desc') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                         
                         <div class="">
                          <input type="submit" name="submit" value="Add Food" id="" class="btn brd-rd3 red-bg" />
                         </div> 
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@stop


@section('title')
    Ateeqa &middot Add 
@stop
