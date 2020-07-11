@extends('index')
@section('user.content')
<div class="col-12">
<div class="card px-4" style="background: #dae6ff;">
  <div class="card-body"  >
    <h1 class="page-title" style="text-align: center;  color: black;">Products</h1>
    <div class="row portfolio-grid-2">
      @foreach($publish_product as $row)
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 portfolio-tile">
        <a href="{{ URL::to('/view-details/'.$row -> product_id) }}"><img src="{{ URL::to($row -> product_image) }}" style="height:250px;" alt=""></a>
        <div class="tile-details">
          <p class="project-name" style="color: #ff7878;;">{{ $row -> product_name }}</p>
          <p class="project-name"  style="color: #ff7878;">&#2547;  : {{ $row -> product_price }}</p>
          {{-- <a style="border-color: black;color:black;" href="{{ URL::to('/view-details/'.$row -> product_id) }}" class="btn">view</a> --}}
          <a  href="{{ URL::to('/view-details/'.$row -> product_id) }}" class="btn" style="border-color: #ff7878;; color: #ff7878;;"> <i class="fa fa-shopping-cart"></i></a>
          
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
</div>
@endsection