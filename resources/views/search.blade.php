
@extends('layouts.default')
@section('content')

<style>
.heart_ico {
    position: absolute;
    left: 15px;
    top: 15px;
    font-size: 30px;
    color: #532979;
}
span.unitsold{
    text-align: center;
    display: block;
    margin-top: 0;
    margin-bottom: 6px;
    font-weight: 800;
    font-size: 14px;
    color: #A5238B;
}
</style>

<div class="container">
    <div class="row">
        <!-- ============================================== CONTENT ============================================== -->
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div id="product-tabs-slider" class="scroll-tabs wow fadeInUp">
                <div class="more-info-tab clearfix ">
                  
                </div>
                <div class="product-slider">
                  
                    <div class="row">
                        @php
                            $data=App\Models\Deal::get();
                            
                        @endphp
                      
                        @if(count($data) > 0)
                         @foreach($data as $row)
                        <div class="col-md-4">
                            <div class="searched-item">
                                <div class="product product_left_bordr">
                                    <div class="product-image">
                                        <div class="image">
                                           
                                            <a href="{{url('addfavourite/'.$row->id)}}"> <i class="fa-regular fa-heart heart_ico"></i></a>

                                            <a href="{{url('deals_detail/'.$row->id)}}"> <img src="{{url(explode(',',$row->image)[0])}} " style="height: 200px;
                                                width: 240px;" alt=""> </a>
                                             {{-- <?php $json = explode(',',$row->image);?> --}}


                                        </div>
                                        <div class="discount_card">
                                            
                                            <h1>AFTER - {{$row->discounted_price}}% </h1>
                                         
                                            <h1> OMR {{$row->actual_price}} </h1>
                                            
                                           <a href="{{url('checkout/'.$row->id)}}" ><img class="buynow_btns" src="{{url('public/images/buynow.svg')}}" /></a>
                                           
                                         
                                            {{-- <span class="unitsold">
                                                11 units sold
                                            </span> --}}
                                            {{-- <p style="font-size: 10px; text-align: center; background: transparent; margin-bottom: 0; font-weight: 700;" id="example1" data-countdown="01/01/2023 05:06:59"></p> --}}
                                        </div>
                                    </div>
                                    <div class="product-info text-left">
                                        <h2 class="name"><a href="{{url('deals_detail/'.$row->id)}}">{{$row->title}}</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <p class="text-danger text-center">No Data</p>
                        @endif
                    </div>
                </div>
            </div>
        
                 
                </div>
            </div>
           

        
@endsection

