@extends("master")
@section("content")
<div class="custom-product">
    <div class="col-sm-2">
        <a href="#">Filter</a>
    </div>
    <div class="searched">
        <h4>Result for Products</h4>
        <hr>
        @foreach ($products as $item)
        <div class="searched-item"> 
            <a href="detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" class="trend-image" alt="Image errors"> 
            <div class="">
              <h4>{{$item['name']}}</h4>
              <h6>{{$item['description']}}</h6>
            </div>
            </a>
            <hr>
        </div>
        @endforeach 
    </div>
</div>
@endsection
