@extends("master")
@section("content")
<div class="custom-product">
    <div class="col-sm-2">
        <a href="#">Filter</a>
    </div>
    <div class="searched">
        <h4>Result for Products</h4>
        @foreach ($products as $item)
        <div class="searched-item"> 
            <a href="detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" class="trend-image" alt="Image errors"> 
            <div class="">
              <h2>{{$item['name']}}</h2>
              <h5>{{$item['description']}}</h5>
            </div>
            </a>
        </div>
        @endforeach 
    </div>
</div>
@endsection
