@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Bảng Xếp Hạng')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách Bảng xếp hạng</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Bảng xếp hạng</h4>
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Tên bảng xếp hạng</th> 
									<th>Năm bắt đầu</th> 
									<th>Năm kết thúc</th>
									<th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="odd gradeX"> 
									<th scope="row">1</th> 
										<td>Bảng xếp hạng 1</td> 
										<td>2015</td> 
										<td>2016</td> 
										<td><a href="{{route('SuaBangXepHang')}}">Sửa</a></td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">2</th> 
										<td>Bảng xếp hạng 2</td> 
										<td>2016</td> 
										<td>2017</td>
										<td><a href="#">Sửa</a></td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">3</th> 
										<td>Bảng xếp hạng 3</td> 
										<td>2017</td> 
										<td>2018</td> 
										<td><a href="#">Sửa</a></td>
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