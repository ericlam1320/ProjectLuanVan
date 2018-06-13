@extends ('admin.layout.master_nhanvienyte')
@section ('title', 'Quản lý Chấn Thương')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách chấn thương</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Chấn thương</h4>
						<table class="table"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Mã chấn thương</th> 
									<th>Tên chấn thương</th> 
									<th>Phân loại chấn thương</th>
									<th>Thời gian hồi phục</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="active"> 
									<th scope="row">1</th> 
										<td>CT001</td> 
										<td>Rách gân Kheo</td> 
										<td>Chấn thương Cơ</td> 
										<td>3 tháng</td> 
										<td><a href="#">Xoá</a></td>
										<td><a href="{{route('SuaChanThuong')}}">Sửa</a></td>
								</tr> 

								<tr class="active"> 
									<th scope="row">2</th> 
										<td>CT002</td> 
										<td>Trật mắt cá chân</td> 
										<td>Chấn thương Khớp</td> 
										<td>2 tuần - 1 tháng</td> 
										<td><a href="#">Xoá</a></td>
										<td><a href="#">Sửa</a></td>
								</tr> 

								<tr class="active"> 
									<th scope="row">3</th> 
										<td>CT003</td> 
										<td>Gãy xương</td> 
										<td>Chấn thương Xương</td> 
										<td>1 năm</td> 
										<td><a href="#">Xoá</a></td>
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

