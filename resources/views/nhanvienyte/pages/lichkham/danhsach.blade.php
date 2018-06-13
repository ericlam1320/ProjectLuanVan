@extends ('nhanvienyte.layout.master_nhanvienyte')
@section ('title', 'Quản lý Lịch Khám')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách lịch khám</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Lịch khám</h4>
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Mã lịch khám</th> 
									<th>Ngày khám</th> 
									<th>Ca khám</th>
									<th>Địa điểm</th>
									<th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="odd gradeX"> 
									<th scope="row">1</th> 
										<td>LK001</td> 
										<td>26/05/2018</td> 
										<td>Sáng</td> 
										<td>180 Cao Lỗ P4 Q8 TpHCM</td>
										<td>
											<a href="#">Xoá</a>
											<a href="{{route('SuaLichKham')}}">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">2</th> 
										<td>LK002</td> 
										<td>14/05/2018</td> 
										<td>Trưa</td> 
										<td>180 Cao Lỗ P4 Q8 TpHCM</td>
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">3</th> 
										<td>LK003</td> 
										<td>16/05/2018</td> 
										<td>Chiều</td> 
										<td>180 Cao Lỗ P4 Q8 TpHCM</td>
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