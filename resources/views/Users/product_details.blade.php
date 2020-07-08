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




<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">

<!-- Fonts --> 
<link href='{{ asset('http://fonts.googleapis.com/css?family=Roboto:300,400,500,700') }}' rel='stylesheet' type='text/css'>
<link href='{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800') }}' rel='stylesheet' type='text/css'>
<link href='{{ asset('https://fonts.googleapis.com/css?family=Montserrat:400,700' ) }}' rel='stylesheet' type='text/css'>


</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1">

<!-- ============================================== TOP MENU : END ============================================== -->
<div class="main-header">
<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
			<!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
<a href="home.html">

<img src="assets/images/logo.png" alt="">

</a>
</div><!-- /.logo -->
<!-- ============================================================= LOGO : END ============================================================= -->				</div><!-- /.logo-holder -->

<div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
	<!-- /.contact-row -->
</div><!-- /.top-search-holder -->

<div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">

<div class="dropdown dropdown-cart">
<a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
	<div class="items-cart-inner">
    <div class="basket">
			
	</div>
		
		
	
    </div>
</a>
<ul class="dropdown-menu">
	<li>
		<div class="cart-item product-summary">
			<div class="row">
				<div class="col-xs-4">
					<div class="image">
						<a href="detail.html"><img src="assets/images/cart.jpg" alt=""></a>
					</div>
				</div>
				<div class="col-xs-7">
					
					<h3 class="name"><a href="index8a95.html?page-detail">Simple Product</a></h3>
					<div class="price">$600.00</div>
				</div>
				<div class="col-xs-1 action">
					<a href="#"><i class="fa fa-trash"></i></a>
				</div>
			</div>
		</div><!-- /.cart-item -->
		<div class="clearfix"></div>
	<hr>

	<div class="clearfix cart-total">
		<div class="pull-right">
			
				<span class="text">Sub Total :</span><span class='price'>$600.00</span>
				
		</div>
		<div class="clearfix"></div>
			
		<a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>	
	</div><!-- /.cart-total-->
			
		
</li>
</ul><!-- /.dropdown-menu-->
</div><!-- /.dropdown-cart -->

<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
	</div><!-- /.row -->

</div><!-- /.container -->

</div><!-- /.main-header -->

<!-- ============================================== NAVBAR ============================================== -->
<div class="header-nav animate-dropdown">
<div class="container">
<div class="yamm navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <div class="nav-bg-class">
        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
<div class="nav-outer">
<ul class="nav navbar-nav">
	<li class="active dropdown yamm-fw">
		<a href="{{URL::to('/')}}" >Home</a>
		
	</li>
	<li class="dropdown yamm mega-menu">
		
        <ul class="dropdown-menu container">
			<li>
<div class="yamm-content ">
   
</div>

</li>
		</ul>
		
	</li>

	<li class="dropdown mega-menu">
		
        <ul class="dropdown-menu container">
			<li>
				<div class="yamm-content">

</div><!-- /.yamm-content -->					</li>
		</ul>
	</li>
	<li class="dropdown hidden-sm">
		
		
	</li>

	

	
    
    
    
	
	<li class="dropdown">
		
		<ul class="dropdown-menu pages">
			<li>
				<div class="yamm-content">
					<div class="row">
						
							
							
							
						
					</div>
				</div>
			</li>
            
           
			
		</ul>
	</li>
     
			
	
</ul><!-- /.navbar-nav -->
<div class="clearfix"></div>				
</div><!-- /.nav-outer -->
</div><!-- /.navbar-collapse -->


    </div><!-- /.nav-bg-class -->
</div><!-- /.navbar-default -->
</div><!-- /.container-class -->

</div><!-- /.header-nav -->
<!-- ============================================== NAVBAR : END ============================================== -->

</header>

<!-- ============================================== HEADER : END ============================================== -->

<div class="body-content outer-top-xs">
<div class='container'>
<div class='row single-product'>
<div class='col-md-3 sidebar'>
<div class="sidebar-module-container">
<div class="home-banner outer-top-n">
{{-- <img src="assets/images/banners/LHS-banner.jpg" alt="Image"> --}}
</div>		



<!-- ============================================== HOT DEALS ============================================== -->

{{-- Hot Deal --}}

<?php 
$publish_product = DB::table('tbl_product')
                   ->where('product_status',1)
                   ->get();

?>

<div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
    <h3 class="section-title">More Product</h3>
    <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
@foreach($publish_product as $row)
     <div class="item">
        <div class="products">
            <div class="hot-deal-wrapper">
                <div class="image">
                    <img src="{{ URL::to($row -> product_image) }}" alt="">
                </div>
                <div class="timing-wrapper">
                    
                    
                    

                    

                    
                </div>
            </div><!-- /.hot-deal-wrapper -->

                <div class="product-info text-left m-t-20">
                    <h3 class="name"><a href="detail.html">{{ $row-> product_name }}</a></h3>
                    

                    <div class="product-price"> 
                        <span class="price">
                            {{ $row -> product_price }}
                        </span>
                            
                                          
                    
                    </div><!-- /.product-price -->
                    
                </div><!-- /.product-info -->

                <div class="cart clearfix animate-effect">
                    <div class="action">
                        
                        <div class="add-cart-button btn-group">
                            <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                <i class="fa fa-shopping-cart"></i>                                                 
                            </button>
                            <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                                    
                        </div>
                        
                    </div><!-- /.action -->
                </div><!-- /.cart -->
            </div>  
            </div>    
@endforeach          


           
    
                        
        
    </div><!-- /.sidebar-widget -->
</div>

<?php 
foreach ($product_details as $v_row) {
    # code...
}
?>

</div>
	</div><!-- /.sidebar -->
	<div class='col-md-9'>
    <div class="detail-block">
		<div class="row  wow fadeInUp">
        
{{-- <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
<div class="product-item-holder size-big single-product-gallery small-gallery">

<div id="owl-single-product">
    <div class="single-product-gallery-item" id="slide1">
        <a data-lightbox="image-1" data-title="Gallery" href=""><img  src="{{ URL::to('$v_row->product_image') }}" data-echo="assets/images/products/p6.jpg" alt="">
        </a>
    </div><!-- /.single-product-gallery-item -->

    
</div><!-- /.single-product-slider -->


<div class="single-product-gallery-thumbs gallery-thumbs">

    <div id="owl-single-product-thumbnails">
        
        
        
        
        
    </div><!-- /#owl-single-product-thumbnails -->

    

</div><!-- /.gallery-thumbs -->

</div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->      --}}   	


<div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
            <div class="single-product-gallery-item" id="slide1">
                
                    <img class="img-responsive" src="{{ URL::to($v_row->product_image) }}"  />
                </a>
            </div><!-- /.single-product-gallery-item -->

         </div><!-- /.single-product-slider -->


    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->   


<div class='col-sm-6 col-md-7 product-info-block'>
		<div class="product-info">
			<h1 class="name">{{ $v_row -> product_name }}</h1>
			
			<div class="rating-reviews m-t-20">
				<div class="row">
					<div class="col-sm-3">
						<div class="rating rateit-small"></div>
					</div>
				</div><!-- /.row -->		
			</div><!-- /.rating-reviews -->

			<div class="stock-container info-container m-t-10">
				<div class="row">
					<div class="col-sm-2">
						<div class="stock-box">
							<span class="label">Availability :</span>
						</div>	
					</div>
					<div class="col-sm-9">
						<div class="stock-box">
							<span class="value">In Stock</span>
						</div>	
					</div>
				</div><!-- /.row -->	
			</div><!-- /.stock-container -->

			<div class="description-container m-t-20">
				{{ $v_row -> product_short_description }}
			</div><!-- /.description-container -->

			<div class="price-container info-container m-t-20">
				<div class="row">
					

					<div class="col-sm-6">
						<div class="price-box">
							<span class="price">{{ $v_row -> product_price }}</span>
						</div>
					</div>

					
				</div><!-- /.row -->
			</div><!-- /.price-container -->

			<div class="quantity-container info-container">
				<div class="row">
					
					<div class="col-sm-2">
						<span class="label">Qty :</span>
					</div>
					
					<div class="col-sm-2">
						<div class="cart-quantity">
							<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				                <input type="text" value="1">
			              </div>
			            </div>
					</div>

					<div class="col-sm-7">
						<a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</a>
					</div>

					
				</div><!-- /.row -->
			</div><!-- /.quantity-container -->

			

			

			
		</div><!-- /.product-info -->
	</div><!-- /.col-sm-7 -->
</div><!-- /.row -->
</div>
		
		<div class="product-tabs inner-bottom-xs  wow fadeInUp">
			<div class="row">
				<div class="col-sm-3">
					<ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
						<li class="active"><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
						
					</ul><!-- /.nav-tabs #product-tabs -->
				</div>
				<div class="col-sm-9">

					<div class="tab-content">
						
						<div id="description" class="tab-pane in active">
							<div class="product-tab">
								<p class="text">{{ $v_row -> product_long_description }}</p>
							</div>	
						</div><!-- /.tab-pane -->

						

						

					</div><!-- /.tab-content -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.product-tabs -->

		<!-- ============================================== UPSELL PRODUCTS ============================================== -->

<!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
	
	</div><!-- /.col -->
	<div class="clearfix"></div>
</div><!-- /.row -->
<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">



</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
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


</body>

</html>