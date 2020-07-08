@extends('layouts.app')
@section('content')
@foreach($getData as $row)
@endforeach
  <div class="card-columns">
    <div class="card">
      <img class="card-img-top" src="{{ URL::to($row -> product_image) }}" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title"> Product Name : {{ $row -> product_name }}</h2>
        <p class="card-text">Product Price : {{ $row -> product_price }}</p>
        <p class="card-text">Product Short Description : {{ $row -> product_short_description }}</p>
        <p class="card-text">Product Short Description : {{ $row -> product_long_description }}</p>
        <p class="card-text">Product Quantity: {{ $row -> product_quantity }}</p>
        <p class="card-text">Product Category: {{ $row -> category_name }}</p>
      </div>
    </div>
</div>
@endsection