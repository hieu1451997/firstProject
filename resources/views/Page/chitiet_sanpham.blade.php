@extends('master')
@section('content')
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Chi tiết sản phẩm</li>
				</ul>
			</div>
		</div>
</div>
	<!-- //page -->

	<!-- Single Page -->
<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Chi tiết sản phẩm</span>
				
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							
								
								
									<div class="thumb-image">
										<img src="source/images/{{$sanpham->img}}" data-imagezoom="true" class="img-fluid" alt=""> </div>
								
								
							
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3">{{$sanpham->TenSp}}</h3>
					<p class="mb-3">
						@if($sanpham->Gia_KM==0)
							<span class="item_price">${{$sanpham->DonGia}}</span>
						@else 
							<span class="item_price">${{$sanpham->Gia_KM}}</span>
							<del>${{$sanpham->DonGia}}</del>
						@endif
						<label>Giao hàng miễn phí</label>
					</p>
					<div class="single-infoagile">
						<ul>
							
							<li class="mb-3">
								Giao hàng nhanh chóng
							</li>
							<li class="mb-3">
								Tiki từ $50/tháng.
							</li>
							<li class="mb-3">
								Giảm giá 5% với thẻ VIP
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>1 năm</label> bảo hành</p>
						<ul>
							<li class="mb-1">
								Sản phẩm thuộc:{{$sanpham->Mota}}
							</li>
							<li class="mb-1">
								Hãng sản xuất: Adias
							</li>
							
						</ul>
						
					</div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
							<div class="single-item-caption">
													<a class="add-to-cart pull-left" href="{{route('themgiohang',$sanpham->ID)}}"><i class="fa fa-shopping-cart">Mua hang</i></a>											
												</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection