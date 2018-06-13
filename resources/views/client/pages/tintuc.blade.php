@extends ('client.layouts.master')

@section ('title' , 'Liverpool FC - Tin tức')

@section ('content')

				<!--// KODE BENNER1 START //-->
				<div class="kode_benner1">
					<div class="kode_benner1_text">
						<h2>Tin tức</h2>
					</div>
					<div class="kode_benner1_cols">
						<div class="container kf_container">
							<ul class="breadcrumb">
							  <li><a href="{{ route('Home') }}">Trang chủ</a></li>
							  <li class="active">Tin tức</li>
							</ul>
						</div>
					</div>
				</div>
				<!--// KODE BENNER1 END //-->
				
				<!--// KODE BLOG WRAPER START //-->
				<div class="kode_blog_wraper">
					<div class="container">
						<div class="row">


							<div class="col-md-9">
								<div class="kode_detail_row">

									<!-- KODE DETAIL FIG START -->
									@for ($i=1;$i<=6;$i++)
									<div class="kode_detail_fig side_2">
										<div class="kode-flicker-slide">
											<div>
												<figure>
													<img height="300" src="Client/images/ftb-gallery-bg.jpg" alt="">
												</figure>
											</div>
										</div>	
										<div class="kode_detail_admin">
											<div class="title_2"><span><strong>27/05/2018</strong></span></div><br><br>
											<div class="title_2">
												<h2><a href="tin-tuc/chi-tiet">Chung kết Champions League 2020 được tổ chức ở vùng đất thánh của Liverpool {{$i}}</a></h2>

											</div>
										</div>
										<div class="kode_detail_text p_2">
											<p>Một thông tin cực vui cho người hâm mộ Liverpool trước thềm chung kết Champions League chính là nơi đăng cai trận chung kết Champions League mùa giải 2019-2020. Trên trang chủ chính thức của UEFA đã đăng tin SVĐ Ataturk Olympiat ở Istanbul, Thổ Nhĩ Kỳ sẽ trở thành nơi có vinh dự được tổ chức trận đấu định đoạt ngôi vương.</p>
											<a href="tin-tuc/chi-tiet">Xem chi tiết</a>
										</div>
									</div>
									@endfor
									<!-- KODE DETAIL FIG END -->
																	
									<div class="kode_blog_pagination pagi_2">
										<a class="left" href="#"><i class="fa fa-angle-double-left"></i></a>
										<a href="#">1</a>
										<a href="#">2</a>
										<a href="#">3</a>
										<a href="#">4</a>
										<a href="#">5</a>
										<a class="right" href="#"><i class="fa fa-angle-double-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--// KODE BLOG WRAPER END //-->
@stop