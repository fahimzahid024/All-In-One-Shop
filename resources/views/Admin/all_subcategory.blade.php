@extends('layouts.app')
@section('content')
<!-- partial -->

          <h1 class="page-title">Sub Category table</h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Sub Category table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Id #</th>
                          <th>Name</th>
                          <th>Category Name</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_subcategory as $row)
	                      <tr>
	                          <td>{{ $row -> subcategory_id }}</td>
	                          <td>{{ $row -> subcategory_name }}</td>
	                          <td>{{ $row -> category_name }}</td>
                            <td>
	                          @if($row->sub_status==1)
		                        <label class="badge badge-info">In Stock</label>
		                      @else
		                      	<label class="badge badge-secondary">Not in Stock</label>
		                      </td>
	                          @endif
	                          <td>
		                            <a href="{{ URL::to('/edit-subcategory/'.$row -> subcategory_id) }}"><button class="btn btn-outline-info">Edit</button></a>
		                            <a href="{{ URL::to('/delete-subcategory/'.$row -> subcategory_id) }}"><button id="" class="btn btn-outline-danger">Delete</button></a>
		                            @if($row->sub_status == 1)
		                              <a href="{{ URL::to('/unactive-subcategory/'.$row -> subcategory_id) }}"><button class="btn btn-outline-primary">Unactive</button></a>
		                            @else
		                              <a href="{{ URL::to('/active-subcategory/'.$row-> subcategory_id) }}"><button class="btn btn-outline-secondary">Active</button></a>
		                            @endif
                                <a href="{{ URL::to('/view-subcategory/'.$row-> subcategory_id) }}"><button class="btn btn-outline-success">View</button></a>


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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection