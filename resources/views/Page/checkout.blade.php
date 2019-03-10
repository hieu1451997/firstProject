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
					<li>Giỏ hàng</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- checkout page -->
	<div class="privacy py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>Xem giỏ hàng</span>
			</h3>
			<!-- //tittle heading -->
			<form action="{{route('dathang')}}" method="post" class="creditly-card-form agileinfo_form">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="checkout-right">
					
					<div class="table-responsive">
						<table class="timetable_sub">
							<thead>
								<tr>
									
									<th>Sản phẩm</th>
									<th>Số lượng</th>
									<th>Tên sản phẩm</th>
									<th>Giá</th>
								</tr>
							</thead>
							<tbody>
								@if(Session::has('cart'))
								@foreach($product_cart as $cart)
								<tr class="rem1">
									
									<td class="invert-image">
										<a href="#">
											<img src="source/images/{{$cart['item']['img']}}" alt=" " class="img-responsive">
										</a>
									</td>
									<td class="invert">
										
											
												
												<div class="entry value">
													<span>{{$cart['qty']}}</span>
												</div>
												
										
									</td>
									<td class="invert">{{$cart['item']['TenSp']}}</td>
									@if($cart['item']['Gia_KM']==0)
									<td class="invert">{{$cart['item']['DonGia']}} USD</td>	
									@else
										<td class="invert">{{$cart['item']['Gia_KM']}} USD</td>		
									@endif					
								</tr>
								@endforeach
								@endif
								<tr>
									<td>Tổng tiền</td>
									<td colspan="3">{{$totalPrice}} USD</td>>
								</tr>

							</tbody>
						</table>
					</div>
				</div>
				<div class="checkout-left">
					<div class="address_form_agile mt-sm-5 mt-4">
						<h4 class="mb-sm-4 mb-3">Thông tin khách hàng</h4>
						
							<div class="creditly-wrapper wthree, w3_agileits_wrapper">
								<div class="information-wrapper">
									<div class="first-row">

										<div class="controls form-group">
											<input class="billing-address-name form-control" type="text" name="HoTen" placeholder="Họ tên" required="">
										</div>

										

										<div class="controls form-group">
											<input class="billing-address-name form-control" type="text" name="email" placeholder="Email" required="">
										</div>

										<div class="controls form-group">
											<input class="billing-address-name form-control" type="text" name="Diachi" placeholder="Địa chỉ giao hàng" required="">
										</div>

										<div class="controls form-group">
											<input class="billing-address-name form-control" type="text" name="sdt" placeholder="Số điện thoại" required="">
										</div>
										
									</div>
									<button class="submit check_out btn">Mua hàng</button>
								</div>
							</div>
						
						
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection