@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Bảng Xếp Hạng')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách Bảng xếp hạng</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Bảng xếp hạng</h4>
						<table class="table"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Tên bảng xếp hạng</th> 
									<th>Năm bắt đầu</th> 
									<th>Năm kết thúc</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="active"> 
									<th scope="row">1</th> 
										<td>Bảng xếp hạng 1</td> 
										<td>2015</td> 
										<td>2016</td> 
										<td><a href="{{route('SuaBangXepHang')}}">Sửa</a></td>
								</tr> 

								<tr class="active"> 
									<th scope="row">2</th> 
										<td>Bảng xếp hạng 2</td> 
										<td>2016</td> 
										<td>2017</td>
										<td><a href="#">Sửa</a></td>
								</tr> 

								<tr class="active"> 
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

