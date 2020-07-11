@extends('layouts.app')
@section('content')
<!-- partial -->

          <h1 class="page-title">Product table</h1>
          <div class="card">
            <div class="card-body">
              <h2 class="card-title">Product table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Id #</th>
                          <th>Name</th>     
                          <th>Price</th>                      
                          <th>Quantity</th> 
                          <th>Image</th>                      
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_product as $row)
	                      <tr>
	                          <td>{{ $row -> product_id }}</td>
	                          <td>{{ $row -> product_name }}</td>
	                          
	                          <td>{{ $row -> product_price }}</td>
	                          <td>{{ $row -> product_quantity }}</td>
	                          <td><img src="{{ $row->product_image }}" style="height: 60px; width: 60px;"></td>
	                          <td>
	                          @if($row->product_status==1)
		                        <label class="badge badge-info">In Stock</label>
		                      @else
		                      	<label class="badge badge-secondary">Not in Stock</label>
		                      </td>
	                          @endif
	                          <td>  

		                            <a href="{{ URL::to('/edit-product/'.$row -> product_id) }}"><button class="btn btn-outline-info">Edit</button></a>
		                            <a href="{{ URL::to('/delete-product/'.$row -> product_id) }}"><button id="" class="btn btn-outline-danger">Delete</button></a>
		                            @if($row->product_status == 1)
		                              <a href="{{ URL::to('/unactive-product/'.$row -> product_id) }}"><button class="btn btn-outline-primary">Unactive</button></a>
		                            @else
		                              <a href="{{ URL::to('/active-product/'.$row-> product_id) }}"><button class="btn btn-outline-secondary">Active</button></a>
		                            @endif
                                <a href="{{ URL::to('/view-product/'.$row-> product_id) }}"><button class="btn btn-outline-success">View</button></a>


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