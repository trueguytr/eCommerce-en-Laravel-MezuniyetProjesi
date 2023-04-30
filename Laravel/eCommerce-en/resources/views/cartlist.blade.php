@extends("master")
@section("content")
<div class="custom-product">
    <div class="searched col-sm-10">
        <h4>Result for Products</h4>
        <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br> 
        @foreach ($products as $item)
        <div class="row searched-item cart-list-divider">
            <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img src="{{$item->gallery}}" class="trend-image" alt="Image errors"> 
                </a>
            </div>
            <div class="col-sm-6">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>
            </div>
            <div class="col-sm-3">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
            </div>
        </div>
        @endforeach 
        <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br> 
    </div>
</div>
@endsection
