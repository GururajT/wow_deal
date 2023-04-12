
@extends('layouts.default')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8">
            <!-- /.breadcrumb -->
            <div>
                <div class="panel-group checkout-steps" id="accordion">
                    <!-- checkout-step-01  -->
                   
                    <div class="panel panel-default checkout-step-02">
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                        <a data-toggle="collapse" class="collapsed" id="billingInfoBtn" data-parent="#accordion" href="#collapseOne">
                          <span>1</span> Billing Information
                        </a>
                      </h4> </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <form class="register-form" role="form" action="{{url('billerinfo')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1"> First Name <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input"name="fname" id="exampleInputEmail1" placeholder="" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Last Name <span>*</span></label>
                                                <input type="text" class="form-control unicase-form-control text-input" name="lname" id="exampleInputPassword1" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputEmail1"> Email Address <span>*</span></label>
                                                <input type="email" class="form-control unicase-form-control text-input" name="email" id="exampleInputEmail1" placeholder="" required> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="info-title" for="exampleInputPassword1"> Telephone <span>*</span></label>
                                                <input type="number" class="form-control unicase-form-control text-input" name="telephone" id="exampleInputPassword1" placeholder="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit" value="submit" id="paymentNext" class="btn-upper btn btn-primary checkout-page-button checkout-continue ">Next</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- checkout-step-02  -->
                    <!-- checkout-step-03  -->
                    <div class="panel panel-default checkout-step-05">
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">
                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                            <span>2</span> Payment method
                        </a>
                      </h4> </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <div class="radio radio-checkout-unicase">
                                                <input id="Knet" type="radio" name="text" value="guest" checked="" required>
                                                <label class="radio-button guest-check" for="Knet"> Credit Card / Dabit Card </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- checkout-step-04 -->
                </div>
                {{-- <a href="javascript:;" data-toggle="modal" data-target="#myModal"></a> --}}
                    <button type="submit_order" name="submit_order" value="submit_order" class="btn btn-primary checkout-btn"><a href="{{url('placeorder')}}">Placeorder Now </a></button>
                
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-4 right-sidebar">
            <div class="checkout-progress-sidebar ">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="unicase-checkout-title">Review your order</h4> 
                        </div>
                        <div class="panel-body">
                            <table class="table">
                            
                                <thead>
                                    <tr>
                                        <th class="text-center">image </th>
                                        <th class="text-left"> Product </th>
                                        <th class="text-right"> Total </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="text-left"></td><td class="text-right"></td></tr>
                                    <tr>
                                        <td class="text-center>"> <img src="{{url(explode(',',$check->image)[0])}} " style="height: 50px;
                                            width: 50px;" alt=""></td>
                                        <td class="text-left">{{$check->title}} </td>
                                        <td class="text-right"> {{$check->actual_price}} OMR </td>
                                    </tr>
                                    {{-- <tr>
                                        <td class="text-left"> NICE DRESSx 1 </td>
                                        <td class="text-right"> $20.00 </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                            <div class="subtotal">
                                <ul>
                                    <li> Subtotal <span> {{$check->actual_price}} OMR</span> </li>
                                    <li> Grand total <span>  {{$check->actual_price}} OMR</span> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<style>
tbody{
    padding: 10px 0px;
}
tbody td{
    padding: 5px 10px !important;
}
</style>

<script>
$(document).ready(function(){
    $('#BillingNext').click(function(){
        $('#collapseOne').hide();
        $('#collapseTwo').show();
    });
    $('#paymentNext').click(function(){
        $('#collapseTwo').hide();
        $('#collapseFour').show();
    });
    $('#checkoutBtn').click(function(){
        $('#collapseOne').show();
        $('#collapseTwo').hide();
    });
    $('#billingInfoBtn').click(function(){
        $('#collapseTwo').show();
        $('#collapseFour').hide();
    });
});
</script>