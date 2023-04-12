
@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="sign-in">
                            <h4 class="">Forgot Password</h4>
                            <p class="">Fill the details</p>
                            <form class="register-form outer-top-xs" role="form">
                                <div class="form-group">
                                    <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                                    <input type="email"name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1"> 
                                </div>
                                <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>

@endsection
