@extends ('admin.layout.master_nhanvienyte')
@section ('title', 'Quản lý Lịch Khám')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách lịch khám</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Lịch khám</h4>
						<table class="table"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Mã lịch khám</th> 
									<th>Ngày khám</th> 
									<th>Ca khám</th>
									<th>Địa điểm</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="active"> 
									<th scope="row">1</th> 
										<td>LK001</td> 
										<td>26/05/2018</td> 
										<td>Sáng</td> 
										<td>180 Cao Lỗ P4 Q8 TpHCM</td>
										<td><a href="#">Xoá</a></td>
										<td><a href="{{route('SuaLichKham')}}">Sửa</a></td>
								</tr> 

								<tr class="active"> 
									<th scope="row">2</th> 
										<td>LK002</td> 
										<td>14/05/2018</td> 
										<td>Trưa</td> 
										<td>180 Cao Lỗ P4 Q8 TpHCM</td>
										<td><a href="#">Xoá</a></td>
										<td><a href="#">Sửa</a></td>
								</tr> 

								<tr class="active"> 
									<th scope="row">3</th> 
										<td>LK003</td> 
										<td>16/05/2018</td> 
										<td>Chiều</td> 
										<td>180 Cao Lỗ P4 Q8 TpHCM</td>
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

