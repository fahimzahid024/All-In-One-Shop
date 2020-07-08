@extends('layouts.app')
@section('content')

<?php
  $publish_subcategory = DB::table('tbl_subcategory')->get();
?>

<div class="col-12 col-lg-8 grid-margin" style="">
      <div class="card" style="box-shadow: 0 20px 26px 0">
          <div class="card-body">
              <h2 class="card-title" style="text-align: center; font-size: bold; color: #0c6ed4;">ADD PRODUCT</h2>
              <form class="forms-sample" method="post" action="{{ route('save.product') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                

                <div class="form-group">
                    <label for="exampleInputEmail1">Product Category</label>
                    <select id="example1" name="category_id">
                      @foreach($getData as $row)
                        <option value="{{ $row -> category_id }}">{{ $row -> category_name }}</option>
                      @endforeach
                      </select>
                </div>


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
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter product name" name="product_name" required="">
                  </div>
                  

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Price</label>
                      <input style="border: 1px solid #1b6bbb;" type="text"  class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter product price" name="product_price" required="">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Size</label>
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter product size" name="product_size" required="">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Quantity</label>
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter product quantity" name="product_quantity" required="">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Color</label>
                      <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter product color" name="product_color" required="">
                  </div>

                  <div class="form-group">
                      <label for="exampleTextarea">Product Short Description</label>
                      <textarea style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleTextarea" rows="3" name="product_short_description" required=""></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleTextarea">Product Long Description</label>
                      <textarea style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleTextarea" rows="3" name="product_long_description" required=""></textarea>
                  </div>

                  <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" type="text" name="product_status" value="1" required="">
                        Status
                      </label>
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