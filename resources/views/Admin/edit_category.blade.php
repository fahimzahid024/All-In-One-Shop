@extends('layouts.app')
@section('content')
<?php
	foreach ($getData as $row) {}
?>
<div class="col-12 col-lg-8 grid-margin" >
  <div class="card" style="box-shadow: 0 20px 26px 0">
      <div class="card-body">
          <h2 class="card-title" style="text-align: center; font-size: bold;">ADD CATEGORY</h2>
          <form class="forms-sample" method="post" action="{{ URL::to('/update-category/'.$row->category_id) }}">
            {{ csrf_field() }}
              <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input"  placeholder="Enter product name" name="category_name" value="{{ $row -> category_name }}" required="">
              </div>
              <div class="form-group">
                  <label for="exampleTextarea">Category Description</label>
                  <textarea style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleTextarea" rows="3" name="category_description" required="">{{ $row->category_description }}</textarea>
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
  </div>
</div>
@endsection