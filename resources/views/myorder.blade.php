
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
                            <h4 class="">My Order</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Date</th>
                                        <th class="text-center">Order total</th>
                                        <th class="text-center">View Order</th>
                                        <th class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="{{url('deals_detail')}}">#12354</a></td>
                                        <td>22 Jun 2022</td>
                                        <td class="text-center"> $200.00 </td>
                                        <td class="text-center"><a href="{{url('order_detail')}}" class="btn btn-primary" style="font-size: 10px; padding: 3px 10px; font-weight: 900;"> View </a></td>
                                        <td class="text-center"><a href="https://png.pngtree.com/png-vector/20190330/ourlarge/pngtree-pdf-file-document-icon-png-image_892814.jpg" download target="_blank"> Download now </a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('deals_detail')}}">#12354</a></td>
                                        <td>22 Jun 2022</td>
                                        <td class="text-center"> $200.00 </td>
                                        <td class="text-center"><a href="{{url('order_detail')}}" class="btn btn-primary" style="font-size: 10px; padding: 3px 10px; font-weight: 900;"> View </a></td>
                                        <td class="text-center"><a href="https://png.pngtree.com/png-vector/20190330/ourlarge/pngtree-pdf-file-document-icon-png-image_892814.jpg" download target="_blank"> Download now </a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('deals_detail')}}">#12354</a></td>
                                        <td>22 Jun 2022</td>
                                        <td class="text-center"> $200.00 </td>
                                        <td class="text-center"><a href="{{url('order_detail')}}" class="btn btn-primary" style="font-size: 10px; padding: 3px 10px; font-weight: 900;"> View </a></td>
                                        <td class="text-center"><a href="https://png.pngtree.com/png-vector/20190330/ourlarge/pngtree-pdf-file-document-icon-png-image_892814.jpg" download target="_blank"> Download now </a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('deals_detail')}}">#12354</a></td>
                                        <td>22 Jun 2022</td>
                                        <td class="text-center"> $200.00 </td>
                                        <td class="text-center"><a href="{{url('order_detail')}}" class="btn btn-primary" style="font-size: 10px; padding: 3px 10px; font-weight: 900;"> View </a></td>
                                        <td class="text-center"><a href="https://png.pngtree.com/png-vector/20190330/ourlarge/pngtree-pdf-file-document-icon-png-image_892814.jpg" download target="_blank"> Download now </a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="{{url('deals_detail')}}">#12354</a></td>
                                        <td>22 Jun 2022</td>
                                        <td class="text-center"> $200.00 </td>
                                        <td class="text-center"><a href="{{url('order_detail')}}" class="btn btn-primary" style="font-size: 10px; padding: 3px 10px; font-weight: 900;"> View </a></td>
                                        <td class="text-center"><a href="https://png.pngtree.com/png-vector/20190330/ourlarge/pngtree-pdf-file-document-icon-png-image_892814.jpg" download target="_blank"> Download now </a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
