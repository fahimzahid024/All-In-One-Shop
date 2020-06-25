@extends('layouts.app')
@section('content')
<div class="col-12 col-lg-8 grid-margin" style="">
  <div class="card" style="box-shadow: 0 20px 26px 0">
      <div class="card-body">
          <h2 class="card-title" style="text-align: center; font-size: bold;">ADD CATEGORY</h2>
          <form class="forms-sample" method="post" action="{{ route('save.category') }}">
            {{ csrf_field() }}
              <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input"  placeholder="Enter product name" name="category_name" required="">
              </div>
              <div class="form-group">
                  <label for="exampleTextarea">Category Description</label>
                  <textarea style="border: 1px solid #1b6bbb;" type="text" class="form-control p-input" id="exampleTextarea" rows="3" name="category_description" required=""></textarea>
              </div>
              <div class="form-check">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="status" value="1" required="">
                    Status
                  </label>
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
  </div>
</div>
@endsection