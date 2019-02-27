@extends('master')
@section('content')
<div class="services-breadcrumb">
	<div class="agile_inner_breadcrumb">
		<div class="container">
			<ul class="w3_short">
				<li>
					<a href="index.html">Trang chủ</a>
					<i>|</i>
				</li>
				<li>Sản phẩm </li>
			</ul>
		</div>
	</div>
</div>
	<!-- //page -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
				
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
								<span>{{$montt->TenMonTT}}</span>								
							</h3>
							<div class="row">
								@foreach($sp_montt as $sp)
								<div class="col-md-4 product-men" style="margin-bottom: 100px">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="source/images/{{$sp->img}}" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="{{route('chitietsanpham',$sp->ID)}}" class="link-product-add-cart">Chi tiết</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="">{{$sp->TenSP}}</a>
											</h4>
											<div class="info-product-price my-2">
												@if($sp->Gia_KM==0)
													<span class="item_price">${{$sp->DonGia}}</span>
												@else 
													<span class="item_price">${{$sp->Gia_KM}}</span>
													<del>${{$sp->DonGia}}</del>
												@endif
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														<input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="{{$sp->TenSP}}" />
														@if($sp->Gia_KM==0)
														<input type="hidden" name="amount" value="{{$sp->DonGia}}" />
														@else
														<input type="hidden" name="amount" value="{{$sp->Gia_KM}}" />
														@endif
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />
														<input type="hidden" name="cancel_return" value=" " />
														<input type="submit" name="submit" value="Add to cart" class="button btn" />
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
								@endforeach
								
							</div>
							<div class="row">
								{{$sp_montt->links()}}
							</div>
						</div>
						<!-- //first section -->
						
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Hãng</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Search Brand..." name="search" required="">
								<input type="submit" value=" ">
							</form>
							<div class="left-side py-2">
								<ul>
									@foreach($ns_x as $nsx)
									<li>
										<input type="checkbox" class="checked">
										<span class="span">{{$nsx->TenNSX}}</span>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- ram -->
						
						<!-- //ram -->
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
										<a href="#">Đến $30,000</a>
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
						<!-- offers -->
						
						<!-- //arrivals -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
@endsection