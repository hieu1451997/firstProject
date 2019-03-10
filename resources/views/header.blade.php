<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Ưu đãi & Giảm giá hàng đầu khu vực
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#small-dialog1">
								<i class="fas fa-map-marker mr-2"></i>Chọn địa điểm</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Vận chuyển</a>
						</li>
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 0971718792
						</li>
					
							<li class="text-center border-right text-white">
							<a href="{{route('login')}}"  class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> Đăng nhập </a>
							</li>
							<li class="text-center text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng kí </a>
							</li>
				
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Đăng kí</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{route('singin')}}" method="post" id="form">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						@if(count($errors)>0)
							<div class="alert alert-danger" id="preview">
								@foreach($errors->all() as $err)
									{{$err}}
								@endforeach
							</div>
						@endif
						@if(Session::has('thanhcong'))
							<div class="alert alert-success">{{session::get('thanhcong')}}</div>
						@endif
					
						<div class="form-group">
							<label class="col-form-label">Tên của bạn</label>
							<input type="text" class="form-control" placeholder=" " name="name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Nhập lại mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="ConfirmPassword" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Đăng kí">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">Tôi đồng ý với các điều khoản sử dụng</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index" class="font-weight-bold font-italic">
							<img src="source/images/logo2.png" alt=" " class="img-fluid">Sport Equipment
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="{{route('search')}}" method="get">
								<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required name="key">
								<button class="btn my-2 my-sm-0" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						
							
						<div class="beta-comp">
							@if(Session::has('cart'))
							<div class="cart">
								<div class="beta-select"><i class="fa fa-shopping-cart"></i> (@if(Session::has('cart')){{Session('cart')->totalQty}} @else Trống @endif) <i class="fa fa-chevron-down"></i></div>
								<div class="beta-dropdown cart-body">
								
								@foreach($product_cart as $product)
								<div class="cart-item">
									<a class="cart-item-delete" href="{{route('xoagiohang',$product['item']['ID'])}}" ><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="source/images/{{$product['item']['img']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['TenSp']}}</span>
											
											<span class="cart-item-amount">{{$product['qty']}}*
												@if($product['item']['Gia_KM']==0)
												<span>{{$product['item']['DonGia']}}</span>
												@else
												<span>{{$product['item']['Gia_KM']}}</span>
												@endif

											</span>
										</div>
									</div>
								</div>
								@endforeach
								
								

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Session('cart')->totalPrice}} USD</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
								</div>
							</div> <!-- .cart -->
							@endif
						</div>
							
					</div>
						<!-- //cart details -->
					
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Tất cả các hãng</option>
							@foreach($ns_x as $nsx)
							<option value="{{$nsx->TenNSX}}">{{$nsx->TenNSX}}</option>
							@endforeach
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Môn thể thao
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												@foreach($mon_tt as $montt)
												<li>
													<a href="{{route('loaisanpham',$montt->ID)}}">{{$montt->TenMonTT}}</a>
												</li>
												@endforeach
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</li>
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="gioi-thieu">Giới thiệu</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="lien-he">Liên hệ</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Khác
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="product.html">Trợ giúp</a>
								<a class="dropdown-item" href="product2.html">Bảo quản đồ</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="single.html">Hình thức thanh toán</a>
								<a class="dropdown-item" href="single2.html">Tin tức hay</a>
								<div class="dropdown-divider"></div>
							</div>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
	</div>