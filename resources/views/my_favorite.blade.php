
@extends('layouts.default')
@section('content')


<div class="container">
    
    <div class="row ">

         <div class="col-md-3">
            <div class="sidemenu">
                @include('layouts.sidemenu')
            </div>
        </div>
        <div class="col-md-9">
           
            <!-- /.breadcrumb -->
            <div class="shopping-cart">
                
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                               
                                <tr>
                                    {{-- <th class="cart-description item">Image</th> --}}
                                    <th >Product Name</th>
                                    <th >Action</th>
                                    {{-- <th class="cart-product-action item">Action</th> --}}
                                    
                                </tr>
                            </thead>
                            @foreach($addfv as $row)
                            <tbody>
                                <tr>
                                    
                                   
                                 
                                    <td class="favorite-product-name-info">
                                        <h4 class='cart-product-description'><a href="{{url('deals_detail/'.$row->deals_id)}}">{{$row->title}}</a></h4>
                                        <td class="favorite-product-action-info">
                                            <h6 class="favorite-product-action"><a href='{{url('delete_deal/'.$row->id)}}' class='btn btn-danger'>Remove</a>
                                                @endforeach
          
                                            
                                       
                                   
                            <!-- /tbody -->
                     
                        </table>
                        <!-- /table -->
                    </div>
                </div>
                <!-- /.estimate-ship-tax -->
                <div class="col-md-8 col-sm-12 estimate-ship-tax"></div>
                <!-- /.estimate-ship-tax -->
                <div class="col-md-4 col-sm-12 cart-shopping-total">
                    <table class="table">
                      
                    
                       
                    </table>
                    
                </div>
               
            </div>
           
        </div>
    </div>
</div>

@endsection