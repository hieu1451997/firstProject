@extends('master')
@section('content')
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
							<h3 class="heading-tittle text-center font-italic">Sản phẩm Tìm kiếm</h3>
							<div class="row">
								@foreach($product as $danh_dau)
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
								{{$product->links()}}
							</div>
						</div>
						
						
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
@endsection