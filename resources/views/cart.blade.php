
@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <!-- /.breadcrumb -->
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-description item">Image</th>
                                    <th class="cart-product-name item">Product Name</th>
                                    <th class="cart-qty item">Quantity</th>
                                    <th class="cart-sub-total item">Subtotal</th>
                                    <th class="cart-total last-item">Grandtotal</th>
                                    <th class="cart-romove item">Remove</th>
                                </tr>
                            </thead>
                            <!-- /thead -->
                            <tbody>
                                <tr>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="{{url('deals_detail')}}"> <img src="{{('public/assets/images/products/p1.jpg')}}" alt=""> </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class='cart-product-description'><a href="{{url('deals_detail')}}">Floral Print Buttoned</a></h4>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="quant-input">
                                            <div class="arrows">
                                                <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                            </div>
                                            <input type="text" value="1"> </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
                                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
                                    <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="cart-image">
                                        <a class="entry-thumbnail" href="{{url('deals_detail')}}"> <img src="{{url('public/assets/images/products/p2.jpg')}}" alt=""> </a>
                                    </td>
                                    <td class="cart-product-name-info">
                                        <h4 class='cart-product-description'><a href="{{url('deals_detail')}}">Floral Print Buttoned</a></h4>
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="cart-quantity">
                                            <div class="quant-input">
                                                <div class="arrows">
                                                    <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
                                                    <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
                                                </div>
                                                <input type="text" value="1"> </div>
                                        </div>
                                    </td>
                                    <td class="cart-product-sub-total"><span class="cart-sub-total-price">$300.00</span></td>
                                    <td class="cart-product-grand-total"><span class="cart-grand-total-price">$300.00</span></td>
                                    <td class="romove-item"><a href="#" title="cancel" class="icon"><i class="fa fa-trash-o"></i></a></td>
                                </tr>
                            </tbody>
                            <!-- /tbody -->
                            <tfoot>
                                <tr>
                                    <td colspan="7">
                                        <div class="shopping-cart-btn"> 
                                            <span class="">
                                                <a href="{{url('index')}}" class="btn btn-upper btn-primary outer-left-xs pull-right">Continue Shopping</a>
                                            </span> 
                                        </div>
                                        <!-- /.shopping-cart-btn -->
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <!-- /table -->
                    </div>
                </div>
                <!-- /.estimate-ship-tax -->
                <div class="col-md-8 col-sm-12 estimate-ship-tax"></div>
                <!-- /.estimate-ship-tax -->
                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <div class="cart-sub-total"> Subtotal<span class="inner-left-md">$600.00</span> </div>
                                    <div class="cart-grand-total"> Grand Total<span class="inner-left-md">$600.00</span> </div>
                                </th>
                            </tr>
                        </thead>
                        <!-- /thead -->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="cart-checkout-btn pull-right">
                                        <a href="{{url('checkout')}}">
                                            <button type="button" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
                                        </a> 
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        <!-- /tbody -->
                    </table>
                    <!-- /table -->
                </div>
                <!-- /.cart-shopping-total -->
            </div>
            <!-- /.shopping-cart -->
        </div>
    </div>
</div>

@endsection