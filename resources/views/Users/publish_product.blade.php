@extends('index')
@section('user.content')
<div class="col-12">
<div class="card px-4">
  <div class="card-body">
    <h1 class="page-title" style="text-align: center;">Products</h1>
    <div class="row portfolio-grid-2">
      @foreach($publish_product as $row)
      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 portfolio-tile">
        <img src="{{ URL::to($row -> product_image) }}" style="height:200px;" alt="">
        <div class="tile-details">
          <p class="project-name">{{ $row -> product_name }}</p>
          <a href="{{ URL::to('/view-details/'.$row -> product_id) }}" class="btn">view</a>
          <a href="#" class="btn"> <i class="fa fa-shopping-cart"></i></a>
          
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>
@endsection