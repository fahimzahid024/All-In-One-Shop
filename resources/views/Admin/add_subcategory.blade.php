@extends('layouts.app')
@section('content')
<div class="col-12 col-lg-8 grid-margin" style="">
  <div class="card" style="box-shadow: 0 20px 26px 0">
      <div class="card-body">
          <h2 class="card-title" style="text-align: center; font-size: bold;">ADD SUBCATEGORY</h2>
          <form class="forms-sample" method="post" action="{{ route('save.subcategory') }}">
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
                  <label for="exampleInputEmail1">Subcategory Name</label>
                  <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input"  placeholder="Enter product name" name="subcategory_name" required="">
              </div>
              <div class="form-group">
                  <label for="exampleTextarea">Subcategory Description</label>
                  <textarea style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleTextarea" rows="3" name="subcategory_description" required=""></textarea>
              </div>
              <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="subcategory_status" value="1" required="">
                    Status
                  </label>
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
  </div>
</div>
@endsection