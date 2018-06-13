@extends ('nhanvienyte.layout.master_nhanvienyte')
@section ('title', 'Quản lý Toa Thuốc')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách toa thuốc</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Toa thuốc</h4>
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Mã toa thuốc</th> 
									<th>Ngày khám</th> 
									<th>ngày tái khám</th>
									<th>Chẩn đoán</th>
									<th>Hướng dẫn</th>
									<th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="odd gradeX"> 
									<th scope="row">1</th> 
										<td>TT001</td> 
										<td>19/05/2018</td> 
										<td>26/05/2018</td> 
										<td>Bị bong gân nhẹ. Cần nghỉ ngơi để hồi phục sức khoẻ</td>
										<td>Hướng dẫn ABCD</td>
										<td>
											<a href="#">Xoá</a>
											<a href="{{route('SuaToaThuoc')}}">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">2</th> 
										<td>TT002</td> 
										<td>16/05/2018</td> 
										<td>23/05/2018</td> 
										<td>Bị bong gân nhẹ. Cần nghỉ ngơi để hồi phục sức khoẻ</td>
										<td>Hướng dẫn ABCD</td>
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">3</th> 
										<td>TT003</td> 
										<td>10/05/2018</td> 
										<td>17/05/2018</td> 
										<td>Bị bong gân nhẹ. Cần nghỉ ngơi để hồi phục sức khoẻ</td>
										<td>Hướng dẫn ABCD</td>
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