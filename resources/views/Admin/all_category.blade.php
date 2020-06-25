@extends('layouts.app')
@section('content')
<!-- partial -->

          <h1 class="page-title">Data table</h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Id #</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_category as $row)
	                      <tr>
	                          <td>{{ $row -> category_id }}</td>
	                          <td>{{ $row -> category_name }}</td>
	                          <td>
	                          @if($row->status==1)
		                        <label class="badge badge-info">In Stock</label>
		                      @else
		                      	<label class="badge badge-secondary">Not in Stock</label>
		                      </td>
	                          @endif
	                          <td>
		                            <a href="{{ URL::to('/edit-category/'.$row -> category_id) }}"><button class="btn btn-outline-info">Edit</button></a>
		                            <a href="{{ URL::to('/delete-category/'.$row -> category_id) }}"><button class="btn btn-outline-danger">Delete</button></a>
		                            @if($row->status == 1)
		                              <a href="{{ URL::to('/unactive-category/'.$row -> category_id) }}"><button class="btn btn-outline-primary">Unactive</button></a>
		                            @else
		                              <a href="{{ URL::to('/active-category/'.$row-> category_id) }}"><button class="btn btn-outline-secondary">Active</button></a>
		                            @endif
                                <a href="{{ URL::to('/view-category/'.$row-> category_id) }}"><button class="btn btn-outline-success">View</button></a>


							   </td>
	                      </tr>
	                @endforeach
                     </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        <!-- content-wrapper ends -->
@endsection