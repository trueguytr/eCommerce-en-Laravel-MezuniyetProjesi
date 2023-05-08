@extends("master")
@section("content")
<div class="custom-product">
    <div class="searched col-sm-10">
        <h4>My Orders</h4>
        @foreach ($orders as $item)
        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trend-image" alt="Image errors"> 
                </a>
            </div>
            <div class="col-sm-6">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
