@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>My Orders</h4>
           <br> <br>
            @foreach( $orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="oList">
                      <h2>{{$item->name}}</h2>
                      <h4 style="color: green">{{$item->price}} LKR</h4>
                      <h6>Delivery Status : {{ $item->status }}</h6>
                      <h6>Address : {{ $item->address }}</h6>
                      <h6>Payment Status : {{ $item->payment_status }}</h6>
                      <h6>Payment Method : {{ $item->payment_method }}</h6>
                    </div>
             </div>
               
            </div>
            @endforeach
          </div>
          <br> <br>

     </div>
</div>
<style>
.oList h6{
    color: navy;
}
</style>
@endsection    