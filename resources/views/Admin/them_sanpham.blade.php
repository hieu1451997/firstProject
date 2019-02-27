@extends('masterAdmin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                    	@if(count($errors)>0)
                    		<div class="alert alert-danger">
                    			@foreach($errors->all() as $err)
                    				{{$err}}<br>
                    			@endforeach
                    		</div>
                    	@endif
                    	@if(session('thongbao'))
                    		<div class="alert alert-success">
                    			{{session('thongbao')}}
                    		</div>
                    	@endif
                        <form action="{{route('themsanpham')}}" method="POST" enctype="multipart/form-data">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}">
                        	<div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="TenSp" placeholder="Nhập tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>Môn thể thao</label>
                                <select class="form-control" name="MonTT">
                                	@foreach($montt as $mtt)
                                    <option value="{{$mtt->ID}}">{{$mtt->TenMonTT}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhà sản xuất</label>
                                <select class="form-control" name="NSX">
                                    @foreach($nsx as $ns_x)
                                    <option value="{{$ns_x->ID}}">{{$ns_x->TenNSX}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea class="form-control" rows="3" name="Mota"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Đơn Giá</label>
                                <input class="form-control" name="DonGia" placeholder="Nhập đơn giá" />
                            </div>
                            <div class="form-group">
                                <label>Giá KM</label>
                                <input class="form-control" name="Gia_KM" placeholder="Nhập giá bán khuyến mãi" />
                            </div>

							<div class="form-group">
                                <label>Ảnh</label>
                                <input class="form-control" name="img" type="file" required="true"  />
                            </div>



                            <div class="form-group">
                                <label>Đơn vị</label>
                                <input class="form-control" name="Donvi" placeholder="Nhập đơn vị" />
                            </div>
                            
                            <div class="form-group">
                                <label>Đánh dấu</label>
                                <input class="form-control" name="danh_dau" placeholder="Nhập đơn vị" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection