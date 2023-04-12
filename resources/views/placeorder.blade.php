
@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="shopping-cart">
                <div class="order_place">
                    <img style="max-width: 200px; display: block; margin: auto;" src="https://cms-assets.tutsplus.com/cdn-cgi/image/width=850/uploads/users/523/posts/32694/final_image/tutorial-preview-large.png" />
                    <h2 style="margin: 0; text-align: center; font-size: 25px; margin-bottom: 35px; font-weight: 900;"> Order Place Success </h2>
                    <p style="text-align: center; margin-bottom: 26px; font-size: 18px; font-weight: 500;"> Your order place successfull. Please check your mail </p>
                    <center>
                        <a href="{{url('/')}}">
                            <button type="button" class="btn btn-primary checkout-btn"> Back to Home </button>
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection