
@extends('layouts.default')
@section('content')
@auth
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="sidemenu">
                @include('layouts.sidemenu')
            </div>
        </div>
        <div class="col-md-9">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sign-in">

                            <h4 class="">Account Info <a href="{{url('account_update/'.Auth::user()->id)}}" style="float: right; font-size: 15px; text-decoration: underline;"> Edit Profile </a></h4>
                            
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Name </label>
                                        <h6> {{Auth::user()->first_name}} </h6>
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Phone Number </label>
                                        <h6> {{auth::user()->phone}} </h6>
                                    </div>
                                </div> --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Email Adress </label>
                                        <h6> {{auth::user()->email}} </h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Date of Birth </label>
                                        <h6> {{auth::user()->dob}} </h6>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Gender </label>
                                        <h6> {{auth::user()->gender}} </h6>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endauth
@endsection
