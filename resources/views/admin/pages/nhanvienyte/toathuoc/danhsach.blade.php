@extends ('admin.layout.master_nhanvienyte')
@section ('title', 'Quản lý Toa Thuốc')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách toa thuốc</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Toa thuốc</h4>
						<table class="table"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Mã toa thuốc</th> 
									<th>Ngày khám</th> 
									<th>ngày tái khám</th>
									<th>Chẩn đoán</th>
									<th>Hướng dẫn</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="active"> 
									<th scope="row">1</th> 
										<td>TT001</td> 
										<td>19/05/2018</td> 
										<td>26/05/2018</td> 
										<td>Bị bong gân nhẹ. Cần nghỉ ngơi để hồi phục sức khoẻ</td>
										<td>Hướng dẫn ABCD</td>
										<td><a href="#">Xoá</a></td>
										<td><a href="{{route('SuaToaThuoc')}}">Sửa</a></td>
								</tr> 

								<tr class="active"> 
									<th scope="row">2</th> 
										<td>TT002</td> 
										<td>16/05/2018</td> 
										<td>23/05/2018</td> 
										<td>Bị bong gân nhẹ. Cần nghỉ ngơi để hồi phục sức khoẻ</td>
										<td>Hướng dẫn ABCD</td>
										<td><a href="#">Xoá</a></td>
										<td><a href="#">Sửa</a></td>
								</tr> 

								<tr class="active"> 
									<th scope="row">3</th> 
										<td>TT003</td> 
										<td>10/05/2018</td> 
										<td>17/05/2018</td> 
										<td>Bị bong gân nhẹ. Cần nghỉ ngơi để hồi phục sức khoẻ</td>
										<td>Hướng dẫn ABCD</td>
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

