@extends("master")
@section("content")
<div class="container">
    <div class="detail-page row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="detail col-sm-6">
            <a href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h5>Price : ${{$product['price']}}</h5>
            <h6>Details : {{$product['description']}}</h6>
            <h6>Category : {{$product['category']}}</h6>
            <br><br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value={{$product['id']}}> 
                <button class="btn btn-primary">Add to Cart</button>
            </form>
            <br>
            <button class="btn btn-success">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection
