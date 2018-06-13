@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Người Dùng')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách người dùng</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Bảng xếp hạng</h4>
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Tên người dùng</th> 
									<th>Chức vụ</th> 
									<th>Email</th>
									<th>Ngày sinh</th>
									<th>Quốc tịch</th>
									<th>Giới tính</th>
									<th>Nơi sinh</th>
									<th>Hình</th>
									<th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="odd gradeX"> 
									<th scope="row">1</th> 
										<td>Jurgen Kloop</td> 
										<td>Huấn luyện viên</td> 
										<td>jkliverpool@gmail.com</td> 
										<td>16/06/1967</td> 
										<td>Đức</td> 
										<td>Nam</td> 
										<td>Stuttgart</td> 
										<td>Hình1</td>
										<td>
											<a href="#">Xoá</a>
											<a href="{{route('SuaNguoiDung')}}">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">2</th> 
										<td>Arsène Wenger</td> 
										<td>Nhân viên y tế</td> 
										<td>awliverpool@gmail.com</td> 
										<td>22/10/1949</td> 
										<td>Pháp</td> 
										<td>Nam</td> 
										<td>Strasbourg</td> 
										<td>Hình2</td>
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">3</th> 
										<td>Mohamed Salah</td> 
										<td>Cầu thủ</td> 
										<td>msliverpool@gmail.com</td> 
										<td>15/06/1992</td> 
										<td>Ai Cập</td> 
										<td>Nam</td> 
										<td>El Gharbia</td>
										<td>Hình3</td> 
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>
								</tr>  

							</tbody> 
						</table> 
					</div>
				</div>

				
				<div class="clearfix"></div>
				
			</div>
	</div>
@endsection

@section('script')
<script src="AdminAssets/datatables/js/jquery.dataTables.min.js"></script>
<script src="AdminAssets/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="AdminAssets/datatables-responsive/dataTables.responsive.js"></script>
<!-- <script>
    function XacNhanXoa(message){
            if(window.confirm(message)){
                return true;
            }
            return false;
        }

</script> -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
@endsection