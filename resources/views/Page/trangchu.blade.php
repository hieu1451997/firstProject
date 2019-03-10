@extends('master')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item item1 active">
				<div class="container">
					<div class="w3l-space-banner">
						
					</div>
				</div>
			</div>
			<div class="carousel-item item2">
				<div class="container">
					<div class="w3l-space-banner">
						
					</div>
				</div>
			</div>
			<div class="carousel-item item3">
				<div class="container">
					<div class="w3l-space-banner">
						
					</div>
				</div>
			</div>
			
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- //banner -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ản
				<span>P</span>hẩm
				
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Sản phẩm mới</h3>
							<div class="row">
								@foreach($new_product as $danh_dau)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="source/images/{{$danh_dau->img}}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('chitietsanpham',$danh_dau->ID)}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('chitietsanpham',$danh_dau->ID)}}">{{$danh_dau->TenSp}}</a>
											</h4>
											<div class="info-product-price my-2">
												@if($danh_dau->Gia_KM==0)
													<span class="item_price">${{$danh_dau->DonGia}}</span>
												@else 
													<span class="item_price">${{$danh_dau->Gia_KM}}</span>
													<del>${{$danh_dau->DonGia}}</del>
												@endif
											</div>
											
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<div class="single-item-caption">
													<a class="add-to-cart pull-left" href="{{route('themgiohang',$danh_dau->ID)}}"><i class="fa fa-shopping-cart">Mua hang</i></a>											
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<br>
							<div class="row">
								{{$new_product->links()}}
							</div>
						</div>
						<!-- //first section -->
						<!-- second section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic">Sản phẩm mua nhiều</h3>
							<div class="row">
								@foreach($sp_mua_nhieu as $danh_dau)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="source/images/{{$danh_dau->img}}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('chitietsanpham',$danh_dau->ID)}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('chitietsanpham',$danh_dau->ID)}}">{{$danh_dau->TenSp}}</a>
											</h4>
											<div class="info-product-price my-2">
												@if($danh_dau->Gia_KM==0)
													<span class="item_price">${{$danh_dau->DonGia}}</span>
												@else 
													<span class="item_price">${{$danh_dau->Gia_KM}}</span>
													<del>${{$danh_dau->DonGia}}</del>
												@endif
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<div class="single-item-caption">
													<a class="add-to-cart pull-left" href="{{route('themgiohang',$danh_dau->ID)}}"><i class="fa fa-shopping-cart">Mua hang</i></a>											
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<br>
							<div class="row">
								{{$sp_mua_nhieu->links()}}
							</div>
						</div>
						<!-- //second section -->
						<!-- third section -->
						
						<!-- //third section -->
						<!-- fourth section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
							<h3 class="heading-tittle text-center font-italic">Sản phẩm hiếm</h3>
							<div class="row">
								@foreach($sp_hiem as $danh_dau)
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="source/images/{{$danh_dau->img}}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('chitietsanpham',$danh_dau->ID)}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
										</div>
										
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="{{route('chitietsanpham',$danh_dau->ID)}}">{{$danh_dau->TenSp}}</a>
											</h4>
											<div class="info-product-price my-2">
												@if($danh_dau->Gia_KM==0)
													<span class="item_price">${{$danh_dau->DonGia}}</span>
												@else 
													<span class="item_price">${{$danh_dau->Gia_KM}}</span>
													<del>${{$danh_dau->DonGia}}</del>
												@endif
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<div class="single-item-caption">
													<a class="add-to-cart pull-left" href="{{route('themgiohang',$danh_dau->ID)}}"><i class="fa fa-shopping-cart">Mua hang</i></a>											
												</div>
											</div>

										</div>
									</div>
								</div>
								@endforeach

							</div>
							<br>
							<div class="row">
								{{$sp_hiem->links()}}
							</div>
						</div>
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Tên sản phẩm..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Từ $1,000</a>
									</li>
									<li class="my-1">
										<a href="#">$1,000 - $5,000</a>
									</li>
									<li>
										<a href="#">$5,000 - $10,000</a>
									</li>
									<li class="my-1">
										<a href="#">$10,000 - $20,000</a>
									</li>
									<li>
										<a href="#">$20,000 $30,000</a>
									</li>
									<li class="mt-1">
										<a href="#">đến $30,000</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giảm giá</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">5% Trở nên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">10% Trở nên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">20% Trở nên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">30% Trở nên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">50% Trở nên</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">60% Trở nên</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- reviews -->
						
						<!-- //reviews -->
						<!-- electronics -->
						
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm mới</h3>
							<div class="box-scroll">
								<div class="scroll">
									@foreach($new_product as $danh_dau)
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="source/images/{{$danh_dau->img}}" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="{{route('chitietsanpham',$danh_dau->ID)}}">{{$danh_dau->TenSp}}</a>
											@if($danh_dau->Gia_KM==0)
												<a href="" class="price-mar mt-2">${{$danh_dau->DonGia}}</a>
											@else
												<a href="" class="price-mar mt-2">${{$danh_dau->Gia_KM}}</a>
											@endif
											
										</div>
									</div>
									<br>
									@endforeach
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
@endsection