@extends('layouts.app')
@section('content')
@foreach($getData as $row)
@endforeach
<div class="col-12 col-lg-8 grid-margin" style="">
  <div class="card" style="box-shadow: 0 20px 26px 0">

      <div class="card-body">
        <h2 class="card-title" style="text-align: center; font-size: bold; color: #0c6ed4;">View Subcategory</h2>
              <div class="form-group">
                  <label for="exampleInputEmail1"><strong>Product Name :</strong> </label>
                  <p>{{ $row -> product_name }}</p>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"><strong>Product category Name :</strong> </label>
                  <p>{{ $row -> category_name }}</p>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> <strong>Product Subcategory Name :</strong> </label>
                  <p>{{ $row -> subcategory_name }}</p>
              </div>
              <div class="form-group">
                  <label for="exampleTextarea"> <strong>Product Short Description :</strong> </label>
                  <p>{{ $row -> product_short_description }}</p>
              </div>
              <div class="form-group">
                  <label for="exampleTextarea"> <strong>Product Long Description :</strong> </label>
                  <p>{{ $row -> product_long_description }}</p>
              </div>
              <div class="form-group">
                  <label for="exampleTextarea"> <strong>Product Price :</strong> </label>
                  <p>{{ $row -> product_price }}</p>
              </div>
              <div class="form-group">
                  <label for="exampleTextarea"> <strong>Product Quantity :</strong> </label>
                  <p>{{ $row -> product_quantity }}</p>
              </div>
              <div class="form-group">
                  <label for="exampleTextarea"> <strong>Product Image:</strong> </label>
                  <img src="{{ URL::to($row -> product_image) }}" style="height: 400px; width: 400px;">
              </div>

      </div>
  </div>
</div>
@endsection