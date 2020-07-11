@extends('layouts.app')
@section('content')
<?php
	foreach ($getData as $row) {}
?>
<?php
  $publish_subcategory = DB::table('tbl_subcategory')->get();
?>
<div class="col-12 col-lg-8 grid-margin" style="">
      <div class="card" style="box-shadow: 0 20px 26px 0">
          <div class="card-body">
              <h2 class="card-title" style="text-align: center; font-size: bold; color: #0c6ed4;">UPDATE PRODUCT</h2>
              <form class="forms-sample" method="post" action="{{ URL::to('/update-product/'.$row -> product_id) }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                

                <div class="form-group">
                    <label for="exampleInputEmail1">Sub Category</label>
                    <select id="example1" name="subcategory_id">
                      @foreach($publish_subcategory as $v_row)
                        <option value="{{ $v_row -> subcategory_id }}">{{ $v_row -> subcategory_name }}</option>
                      @endforeach
                      </select>
                </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Name</label>
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp"  value="{{ $row -> product_name }}" name="product_name" required="">
                  </div>
                  

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Price</label>
                      <input style="border: 1px solid #1b6bbb;" type="text"  class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp"  name="product_price"value="{{ $row -> product_price }}" required="" >
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Size</label>
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp"  name="product_size" value="{{ $row -> product_size }}" required="" >
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Quantity</label>
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp"  name="product_quantity" value="{{ $row -> product_quantity }}" required="">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Color</label>
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp"  name="product_color" value="{{ $row -> product_color }}" required="">
                  </div>

                  <div class="form-group">
                      <label for="exampleTextarea">Product Short Description</label>
                      <textarea style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleTextarea" rows="3" name="product_short_description" required="">{{ $row -> product_short_description }}</textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleTextarea">Product Long Description</label>
                      <textarea style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleTextarea" rows="3" name="product_long_description" required="">{{ $row -> product_long_description }}</textarea>
                  </div>

                  <div>
                  		<p>Old Image : <img src="{{ URL::to($row -> product_image) }}" style="height: 60px; width: 60px;"></p>
                  </div>
                  
                  <div class="form-group row mb-4">
                        <div class="col-sm-8">
                           <label class="control-label" for="fileInput">Image : </label>
                           <img id="image" src="#" />
                           <div class="controls">
                              <input class="input-file uniform_on" name="product_image" accept="image/*"  required onchange="readURL(this);" type="file">
                          </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
          </div>
      </div>
  </div>
  <script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@endsection