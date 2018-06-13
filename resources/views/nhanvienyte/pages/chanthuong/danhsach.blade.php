@extends ('nhanvienyte.layout.master_nhanvienyte')
@section ('title', 'Quản lý Chấn Thương')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách chấn thương</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Chấn thương</h4>
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Mã chấn thương</th> 
									<th>Tên chấn thương</th> 
									<th>Phân loại chấn thương</th>
									<th>Thời gian hồi phục</th>
									<th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="odd gradeX"> 
									<th scope="row">1</th> 
										<td>CT001</td> 
										<td>Rách gân Kheo</td> 
										<td>Chấn thương Cơ</td> 
										<td>3 tháng</td> 
										<td>
											<a href="#">Xoá</a>
											<a href="{{route('SuaChanThuong')}}">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">2</th> 
										<td>CT002</td> 
										<td>Trật mắt cá chân</td> 
										<td>Chấn thương Khớp</td> 
										<td>2 tuần - 1 tháng</td> 
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">3</th> 
										<td>CT003</td> 
										<td>Gãy xương</td> 
										<td>Chấn thương Xương</td> 
										<td>1 năm</td> 
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