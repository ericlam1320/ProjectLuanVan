@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Bảng Xếp Hạng')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Cập nhật Bảng xếp hạng</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Bảng xếp hạng 1</h4>
						<form class="form-horizontal" action="/action_page.php">
						<div class="form-group">        
					      	<div class="col-md-10">
					        	<button type="submit" class="btn btn-default">Cập nhật</button>
					      	</div>
					    </div>
						<table class="table"> 
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Tên Câu lạc bộ</th> 
									<th>Số Trận</th> 
									<th>Thắng</th>
									<th>Hoà</th>
									<th>Thua</th>
									<th>Bàn Thắng</th>
									<th>Bàn Thua</th>
									<th>Hiệu Số</th>
									<th>Điểm</th>
								</tr> 
							</thead> 

							<tbody> 
								<tr class="active"> 
									<th scope="row"><input type="text" placeholder="1" name="pos" size="2"></th> 
										<td><input type="text" placeholder="Man City" name="team"></td> 
										<td><input type="text" placeholder="38" name="p" size="4"></td>
										<td><input type="text" placeholder="32" name="w" size="4"></td> 
										<td><input type="text" placeholder="4" name="d" size="4"></td> 
										<td><input type="text" placeholder="2" name="l" size="4"></td> 
										<td><input type="text" placeholder="106" name="gf" size="4"></td> 
										<td><input type="text" placeholder="27" name="ga" size="4"></td> 
										<td><input type="text" placeholder="79" name="gd" size="4"></td> 
										<td><input type="text" placeholder="100" name="pts" size="4"></td> 
								</tr> 

								<tr class="active"> 
									<th scope="row"><input type="text" placeholder="2" name="pos" size="2"></th> 
										<td><input type="text" placeholder="Man Utd" name="team"></td> 
										<td><input type="text" placeholder="38" name="p" size="4"></td>
										<td><input type="text" placeholder="25" name="w" size="4"></td> 
										<td><input type="text" placeholder="6" name="d" size="4"></td> 
										<td><input type="text" placeholder="7" name="l" size="4"></td> 
										<td><input type="text" placeholder="68" name="gf" size="4"></td> 
										<td><input type="text" placeholder="28" name="ga" size="4"></td> 
										<td><input type="text" placeholder="40" name="gd" size="4"></td> 
										<td><input type="text" placeholder="81" name="pts" size="4"></td> 
								</tr> 

								<tr class="active"> 
									<th scope="row"><input type="text" placeholder="3" name="pos" size="2"></th> 
										<td><input type="text" placeholder="Tottenham" name="team"></td> 
										<td><input type="text" placeholder="38" name="p" size="4"></td>
										<td><input type="text" placeholder="23" name="w" size="4"></td> 
										<td><input type="text" placeholder="8" name="d" size="4"></td> 
										<td><input type="text" placeholder="7" name="l" size="4"></td> 
										<td><input type="text" placeholder="74" name="gf" size="4"></td> 
										<td><input type="text" placeholder="36" name="ga" size="4"></td> 
										<td><input type="text" placeholder="38" name="gd" size="4"></td> 
										<td><input type="text" placeholder="77" name="pts" size="4"></td> 
								</tr> 

								<tr class="active"> 
									<th scope="row"><input type="text" placeholder="3" name="pos" size="2"></th> 
										<td><input type="text" placeholder="Liverpool" name="team"></td> 
										<td><input type="text" placeholder="38" name="p" size="4"></td>
										<td><input type="text" placeholder="21" name="w" size="4"></td> 
										<td><input type="text" placeholder="12" name="d" size="4"></td> 
										<td><input type="text" placeholder="5" name="l" size="4"></td> 
										<td><input type="text" placeholder="84" name="gf" size="4"></td> 
										<td><input type="text" placeholder="38" name="ga" size="4"></td> 
										<td><input type="text" placeholder="46" name="gd" size="4"></td> 
										<td><input type="text" placeholder="75" name="pts" size="4"></td> 
								</tr>

							</tbody> 
						</table> 
					</form>
					</div>
				</div>

				
				<div class="clearfix"></div>
				
			</div>
	</div>
@endsection

