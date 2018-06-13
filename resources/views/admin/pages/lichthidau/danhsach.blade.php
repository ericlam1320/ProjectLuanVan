@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Lịch thi đấu')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách Lịch Thi Đấu</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Lịch Thi Đấu</h4>
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Tên lịch thi đấu</th> 
									<th>Đội A</th> 
									<th>Đội B</th>
									<th>Ngày Giờ thi đấu</th>
									<th>Sân vận động</th>
									<th>Tỷ số</th>
									<th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="odd gradeX"> 
									<th scope="row">1</th> 
										<td>Lịch thi đấu 1</td> 
										<td>Liverpool</td> 
										<td>Man City</td>
										<td>19:30 26/05/2018</td>
										<td>Anfield</td>
										<td>4-0</td>
										<td>
											<a href="#">Xoá</a> 
											<a href="{{route('SuaLichThiDau')}}">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">2</th> 
										<td>Lịch thi đấu 2</td> 
										<td>Arsenal</td> 
										<td>Liverpool</td>
										<td>00:30 06/05/2018</td>
										<td>Emirates</td>
										<td>3-1</td>
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">3</th> 
										<td>Lịch thi đấu 3</td> 
										<td>Liverpool</td> 
										<td>Chelsea</td>
										<td>21:30 14/05/2018</td>
										<td>Anfield</td>
										<td>3-0</td>
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>

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