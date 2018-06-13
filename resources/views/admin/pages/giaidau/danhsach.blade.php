@extends ('admin.layout.master_admin')
@section ('title', 'Quản lý Giải đấu')
@section('content')
	<div id="page-wrapper">
				
			<div class="main-page">
				<h3 class="title1">Danh sách Giải đấu</h3>
				<div class="tables">
					<div class="bs-example widget-shadow" data-example-id="contextual-table"> 
						<h4>Giải đấu</h4>

						@if(session('success'))
						<div class="alert alert-success">
							{{ session('success') }}
						</div>
	                  	@endif
	                  	
	                  	@if(session('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>
	                  	@endif

						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead> 
								<tr> 
									<th>#</th> 
									<th>Tên giải đấu</th> 
									<th>Năm bắt đầu mùa giải</th> 
									<th>Năm kết thúc mùa giải</th>
									<th>Thuộc tính</th>
								</tr> 
							</thead> 

							<tbody> 

								<?php $stt = 1; ?>
								@foreach ($giaidau as $giaidau)
								<tr class="odd gradeX">
										<td>{{ 	$stt }}</td>
										<td>{{ 	$giaidau->TenGiaiDau  }}</td> 
										<td>{{	$giaidau->NamBatDauMuaGiai  }}</td> 
										<td>{{	$giaidau->NamKetThucMuaGiai  }}</td> 
										<td width="80px" style="font-size: 25px" class="text-center">
											<a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="admin/giai-dau/xoa/{{ $giaidau->id }}">
												<i class="fa fa-trash-o fa-fw"></i>
											</a>
											<a href="admin/giai-dau/sua/{{ $giaidau->id }}">
												<i class="fa fa-pencil fa-fw"></i>
											</a>
										</td>
								</tr> 
								<?php $stt++; ?>
								@endforeach
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
<script>
    function XacNhanXoa(message){
            if(window.confirm(message)){
                return true;
            }
            return false;
        }

</script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>
@endsection