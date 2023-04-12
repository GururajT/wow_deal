
@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="sign-in-page">
                <div class="row">

                    @if(session()->has('failed'))
                    <p class="text-danger">{{session()->get('failed')}}</p>
                    @endif
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6">
                        <div class="sign-in">
                            <h4 class="">Sign in</h4>
                           
                            <form class="register-form outer-top-xs"  role="form" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                    <input type="email"name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                                    {{-- <p class="text-danger">{{$errors->first('email')}}</p>  --}}
                                </div>
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                                    <input type="password"name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1"> 
                                    {{-- <p class="text-danger">{{$errors->first('password')}}</p> --}}
                                </div>
                                <div class="radio">
                                    <a href="{{url('forgot')}}" class="forgot-password pull-right">Forgot your Password?</a> 
                                </div>
                                {{-- <a href="{{url('myaccount')}}"> --}}
                                    <button type="submit" value="submit_login" name="submit_login" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                            </form>
                        </div>
                    </div>
                    <!-- Sign-in -->
                    <!-- create a new account -->
                    <div class="col-md-6 col-sm-6">
                        <div class="create-new-account">
                            <h4 class="checkout-subtitle">Create an Account</h4>
                            <p class="text title-tag-line">Personal Information</p>
                            <form class="register-form outer-top-xs" role="form" method="POST" >
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="info-title"  for="exampleInputEmail1">First Name <span>*</span></label>
                                            <input type="text" name="first_name" class="form-control unicase-form-control text-input" id="exampleInputEmail1"required> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail2">Last Name <span>*</span></label>
                                            <input type="text" name="last_name" class="form-control unicase-form-control text-input" id="exampleInputEmail2"required> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="info-title"name="email" for="exampleInputEmail1">Email Address <span>*</span></label>
                                            <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1"required> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                                            <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1"required> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                                            <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1"required> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1">Date of Birth <span>*</span></label>
                                            <input type="date" name="dob" class="form-control unicase-form-control text-input" id="exampleInputEmail1"required> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="info-title" for="exampleInputEmail1"> Gender  <span>*</span></label>
                                            <input type="radio" name="gender" value="male"checked> Male
                                            <input type="radio" name="gender" value="female"> Female
                                            
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" value="submit_register" name="submit_register" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- create a new account -->
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>

@endsection
