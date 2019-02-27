@extends('masterAdmin')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên SP</th>
                                <th>ID_MTT</th>
                                <th>ID_NSX</th>
                                <th>Mô tả</th>
                                <th>Đơn giá</th>
                                <th>Giá KM</th>
                                <th>Ảnh</th>
                                <th>Đơn vị</th>
                                <th>Loại</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($s_p as $sp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sp->ID}}</td>
                                <td>{{$sp->TenSp}}</td>
                                <td>{{$sp->ID_MTT}}</td>
                                <td>{{$sp->ID_NSX}}</td>
                                <td>{{$sp->Mota}}</td>
                                <td>{{$sp->DonGia}}</td>
                                <td>{{$sp->Gia_KM}}</td>
                                <td><img src="source/images/{{$sp->img}}" alt="" width="50px height="50px" "></td>
                                <td>{{$sp->Donvi}}</td>
                                <td>{{$sp->danh_dau}}</td>
                                
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection