<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">

<title>Family Bazar</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/blue.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/rateit.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>




<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">

<!-- Fonts --> 
<link href='{{ asset('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700') }}' rel='stylesheet' type='text/css'>
<link href='{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800') }}' rel='stylesheet' type='text/css'>
<link href='{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700' ) }}' rel='stylesheet' type='text/css'>



	</head>
<body class="cnt-home" style="background: #D70F64;">


<!--HEADER : END  -->
<div class="breadcrumb" >
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="{{ url('/') }}" class="btn btn-upper btn-primary pull-right outer-right-xs" >Home</a></li>

			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<?php
 $content = Cart::content();

?>

<div class="body-content outer-top-xs" style="background: #4583aa">
	<div class="container"style="width: 900px;">
		<h1 class="page-title" style="color: white; text-align: center;">Here Your Shopping Cart</h1>
		<div class="row ">
			<div class="shopping-cart" >
				<div class="shopping-cart-table ">
	                <div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="cart-romove item">Remove</th>
									<th class="cart-description item">Image</th>
									<th class="cart-product-name item">Product Name</th>
									<th class="cart-edit item">Edit</th>
									<th class="cart-qty item">Quantity</th>
									<th class="cart-sub-total item">Subtotal</th>
								</tr>
							</thead><!-- /thead -->
							
							<tbody>
								@foreach($content as $row)
									<tr style="height: 80px;">
										<td class="romove-item"><a href="{{ url('/delete-cart/'.$row->rowId) }}" title="cancel" classfg="icon"><i class="fa fa-trash-o"></i></a></td>
										<td class="cart-image">
											<a class="entry-thumbnail" href="detail.html">
											    <img src="{{ URL::to($row -> options -> image) }}" alt="">
											</a>
										</td>
										<td class="cart-product-name-info">
											<h4 class='cart-product-description'><a href="detail.html">{{ $row -> name }}</a></h4>
											
										</td>
										<td class="cart-product-edit"><a href="#" class="product-edit">Edit</a></td>
										<td class="cart-product-quantity">
											<div class="quant-input">
									                <div class="arrows">
									                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
									                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
									                </div>
									                <input type="text" value="{{ $row->qty }}">
								              </div>
							            </td>
										<td class="cart-product-sub-total"><span class="cart-sub-total-price">&#2547; : {{ $row->price*$row->qty }}</span></td>
									</tr>
								@endforeach
							</tbody><!-- /tbody -->
						</table><!-- /table -->
	                </div>
                </div><!-- /.shopping-cart-table -->				
                

<div class="col-md-12 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					<div class="cart-sub-total">
						
					</div>
					<div class="cart-grand-total">
						Total<span class="inner-left-md">{{ Cart::subtotal() }}</span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
						<div class="cart-checkout-btn pull-right">
							<button type="submit" class="btn btn-primary checkout-btn">Order</button>
							
						</div>
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table><!-- /table -->
</div>		
</div>
</div>
	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">


<div class="footer-bottom">
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
			<div class="module-heading">
			    <h4 class="module-title">Contact Us</h4>
			</div><!-- /.module-heading -->
			<div class="module-body">
				<ul class="toggle-footer" style="">
				    

				      <li class="media">
				        <div class="pull-left">
				             <span class="icon fa-stack fa-lg">
				              <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
				            </span>
				        </div>
				        <div class="media-body">
				            <p>+(888) 123-4567<br>+(888) 456-7890</p>
				        </div>
				    </li>

				    <li class="media">
				        <div class="pull-left">
				             <span class="icon fa-stack fa-lg">
				              <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
				            </span>
				        </div>
				        <div class="media-body">
				            <span><a href="#">fahimzahid024@gmail.com</a></span>
				        </div>
				    </li>
				      
				</ul>
			</div><!-- /.module-body -->
        </div><!-- /.col -->

        
        <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
                <h4 class="module-title">Corporation</h4>
            </div><!-- /.module-heading -->

            <div class="module-body">
         <ul class='list-unstyled'>
            <li class="first"><a title="Your Account" href="#">About us</a></li>
            <li><a title="Information" href="#">Customer Service</a></li>
            <li><a title="Addresses" href="#">Help</a></li>
         </ul>
            </div><!-- /.module-body -->
        </div><!-- /.col -->
        </div>
    </div>
</div>
</div>

<div class="copyright-bar">
<div class="container" >
    
    <a  style="float: left; color: white;" href="{{ URL::to('https://www.facebook.com/profile.php?id=100044776141789') }}" >zahidur rahman |zahid024|</a> &copy; 2020
</div>
</div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->


	<!-- For demo purposes – can be removed on production -->
	
	
	<!-- For demo purposes – can be removed on production : End -->

	<!-- JavaScripts placed at the end of the document so the pages load faster -->
	<script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>

	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

	<script src="{{ asset('assets/js/bootstrap-hover-dropdown.min.js') }}"></script>
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

	<script src="{{ asset('assets/js/echo.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.easing-1.3.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-slider.min.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.rateit.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/lightbox.min.js') }}"></script>
	<script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('assets/js/wow.min.js') }}"></script>
	<script src="{{ asset('assets/js/scripts.js') }}"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
   <script src="{{asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
	<script>
      @if(Session::has('messege'))
        var type="{{Session::get('alert-type','info')}}"
        switch(type){
            case 'info':
                 toastr.info("{{ Session::get('messege') }}");
                 break;
            case 'success':
                toastr.success("{{ Session::get('messege') }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('messege') }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('messege') }}");
                break;
        }
      @endif
    </script>

</body>
</html>
