
@extends('layouts.default')
@section('content')

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
                            <h4 class="" style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px; padding-bottom: 25px;">
                                <span> Order #12351545 - Complete </span>
                                <!--<a href="javascript:;" class="btn btn-primary" style="font-size: 14px; padding: 3px 10px; font-weight: 900;"> Download Now </a>-->
                            </h4>

                            <h6 style="margin-top: 25px; margin-bottom: 25px; font-size: 17px; font-weight: 600;"> Order Date :  September 25, 2022 </h6>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th> Product name </th>
                                        <th> Price </th>
                                        <th class="text-center"> Qty </th>
                                        <th class="text-center"> Subtotal </th>
                                        <th class="text-center"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{url('deals-detail')}}">
                                            Enjoy Daily Breakfast Buffet at Millennium Center
                                        </a></td>
                                        <td>$200.00</td>
                                        <td class="text-center"> 2</td>
                                        <td class="text-center"><a href="https://png.pngtree.com/png-vector/20190330/ourlarge/pngtree-pdf-file-document-icon-png-image_892814.jpg" download target="_blank"> Download now </a></td>
                                        <td class="text-center"> $400.00 </td>
                                    </tr>
                                 </tbody>
                            </table>

                            <div class="totalSec">
                                <p> Total <span> $400.00 </span> </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
