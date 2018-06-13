@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Tin Tức')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách tin tức</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Bảng xếp hạng</h4>
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Tiêu đề</th>
					                <th>Tóm tắt</th>
					                <th>Ngày đăng</th>
					                <th>Hình</th>
					                <th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="odd gradeX"> 
									<th scope="row">1</th> 
										<td>Góc chiến thuật: Khắc chế Ronaldo, Klopp sẽ chơi sơ đồ 3 hậu vệ?</td> 
										<td>Để có thể khóa chặt ngòi nổ nguy hiểm nhất bên phía Real Madrid, HLV Jurgen Klopp có thể tính đến phương án sử dụng sơ đồ 3 hậu vệ.</td> 
										<td>25/05/2018</td> 
										<td>Hình</td>
										<td>
											<a href="#">Xoá</a>
											<a href="{{route('SuaTinTuc')}}">Sửa</a>
										</td>
								</tr> 

								<tr class="odd gradeX"> 
									<th scope="row">2</th> 
										<td>Ai hưởng lương cao nhất ở Liverpool?</td> 
										<td>Trước thềm chung kết Champions League, hãy cùng BongDa.com.vn điểm qua 10 cầu thủ hưởng lương cao nhất đội hình Liverpool.</td> 
										<td>22/05/2018</td> 
										<td>Hình</td>
										<td>
											<a href="#">Xoá</a>
											<a href="#">Sửa</a>
										</td>
								</tr> 


								<tr class="odd gradeX"> 
									<th scope="row">3</th> 
										<td>Ai sẽ ghi bàn quyết định trong trận chung kết Champions League?</td> 
										<td>Real Madrid lẫn Liverpool đều sở hữu những cầu thủ tấn công có khả năng giải quyết trận đấu. Vậy cái tên nào sẽ là người ghi bàn quyết định trong trận đại chiến ở chung kết Champions League rạng sáng ngày 27/05 tới?</td> 
										<td>23/05/2018</td> 
										<td>Hình</td>
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