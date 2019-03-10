@extends('master')
@section('content')

		
			<div class="modal-content" style="width: 600px ;margin: 100px auto">
					<h5 class="modal-title text-center">Đăng nhập</h5>		
				
				<div class="modal-body">
					<form action="" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<label class="col-form-label">Tài khoản</label>
							<input type="text" class="form-control" placeholder=" " name="email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Mật khẩu</label>
							<input type="password" class="form-control" placeholder=" " name="password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Đăng nhập">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Nhớ tài khoản ?</label>
							</div>
						</div>
						
					</form>
				</div>
			</div>
		
@endsection