@extends("master")
@section("content")
<div class="custom-product">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> 
        </ol>
        <div class="carousel-inner">
            @foreach ($products as $item)
            <div class="carousel-item {{$item['id']==1?'active':''}}"> 
              <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="slider-img" alt="Image errors"> 
                <div>
                  <h3>{{$item['name']}}</h3>
                  <p>{{$item['description']}}</p>
                </div>
              </a>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <div class="trend">
        <hr>
        <h3 style="padding-bottom: 30px;">Trending Products</h3>
        @foreach ($products as $item)
        <div class="trend-item"> 
            <a href="detail/{{$item['id']}}">
            <img src="{{$item['gallery']}}" class="trend-image" alt="Image errors"> 
            <div class="">
              <h3>{{$item['name']}}</h3>
            </div>
            </a>
        </div>
        @endforeach 
      </div>
</div>
@endsection
