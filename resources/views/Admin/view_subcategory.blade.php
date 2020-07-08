@extends('layouts.app')
@section('content')
@foreach($getData as $row)
@endforeach
<div class="col-12 col-lg-8 grid-margin" style="">
  <div class="card" style="box-shadow: 0 20px 26px 0">

      <div class="card-body">
      	<h2 class="card-title" style="text-align: center; font-size: bold; color: #0c6ed4;">View Subcategory</h2>
              <div class="form-group">
                  <label for="exampleInputEmail1"><strong>Category Name :</strong> </label>
                  <p>{{ $row -> category_name }}</p>
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1"> <strong>Subcategory Name :</strong> </label>
                  <p>{{ $row -> subcategory_name }}</p>
              </div>
              <div class="form-group">
                  <label for="exampleTextarea"> <strong>Subcategory Description :</strong> </label>
                  <p>{{ $row -> subcategroy_description }}</p>
              </div>
      </div>
  </div>
</div>
@endsection