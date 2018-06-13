@extends ('huanluyenvien.layouts.master')

@section ('title', 'Liverpool FC - Lịch thi đấu')

@section ('content')

				<!--// KODE BENNER1 START //-->
				<div class="kode_benner1 bamnner2">
					<div class="kode_benner1_text">
						<h2>Lịch thi đấu</h2>
					</div>
					<div class="kode_benner1_cols">
						<div class="container kf_container">
							<ul class="breadcrumb">
							  <li><a href="huan-luyen-vien/1">Trang chủ</a></li>
							  <li class="active">Lịch thi đấu</li>
							</ul>
						</div>
					</div>
				</div>

				<!--// KODE BENNER1 END //-->
				<div class="kode_fixture_wraper">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<!--// TENNIS EVENT BG //-->
								<div class="kode_ticket_sig_row">
									<ul>
										<li>
											<div class="kode_ticket_sig_fig">
												<figure>
													<img src="Client/images/logos/liverpool_big.png" alt="" height="120">
												</figure>
												<h4>Liverpool</h4>
											</div>
										</li>
										<li>
											<div class="kode_ticket_sig_fig fig_2">
												<span>VS</span>
												<a><i class="fa fa-clock-o"></i>2 : 45 P.M</a>
												<p>Anfield Stadium</p>
												<h4>27/05/2018</h4>
											</div>
										</li>
										<li>
											<div class="kode_ticket_sig_fig">
												<figure>
													<img src="Client/images/logos/realmadrid_big.png" alt="" height="120">
												</figure>
												<h4>Real Madrid</h4>
											</div>
										</li>
									</ul>
								</div>
								
								<div class="ftb-tabs-wrap wrap_3">
									<div class="ftb_tabs_drop">
										<h5></h5>
									</div>
									  <!--// MAIN TABS TABLE //-->
									  <ul class="ftb-main-table table_2">
										
										@for($i=1;$i<=4;$i++)
										<li>
										  <div class="ftb-date date_2">
											<span>28/{{$i+5}}/2018<sup> </sup> </span>
											<p>1:00</p>
										  </div>
										  <div class="ftb-compitatev tev_2">
											<div class="compitatev-team1">
											  <img src="Client/images/logos/liverpool_big.png" alt="">
											  <a href="#">Liverpool</a>
											</div>
											<span>VS</span>
											<div class="compitatev-team1 compitatev-team2">
											 <a href="#">Arsenal</a>
											  <img src="Client/images/logos/arsenal_big.png" alt="">
											</div>
										  </div>
										  <div class="ftb-venue venue_2"></div>
										</li>
										@endfor
										
									  </ul>
									  <!--// MAIN TABS TABLE //-->  
								</div>	

								<div class="kode_blog_pagination">
									<a class="left" href="#"><i class="fa fa-angle-double-left"></i></a>
									<a href="#">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
									<a href="#">4</a>
									<a href="#">5</a>
									<a class="right" href="#"><i class="fa fa-angle-double-right"></i></a>
								</div>
							</div>

							
							<div class="col-md-3">
								<div class="kode_detail_side_bar">

									<form class="kode_detail_side_field">
										<input type="text" placeholder="Tìm kiếm" required>
										<button><i class="fa fa-search"></i></button>
									</form>

									<div class="ftb-fixture-row">
										<h5>Bảng xếp hạng</h5>
									  <!--// RATING TABLE //-->
										<ul class="ftb-rating-table rating_2">

										  @for($i=1;$i<=10;$i++)
										  <li class="{{$i==4 ? 'BangXepHangDoiBong' : ''}}">
											<div class="ftb-position">
											  {{$i}} . 
											</div>
											<div class="ftb-team-name">
											  <img src="Client/images/logos/liverpool.png" alt="">
											  <a href="#">Đội {{$i}}</a>
											</div>
											<div class="ftb-team-points">
											  {{50-$i}}
											</div>
										  </li>
										  @endfor

										</ul>
										<!--// RATING TABLE //-->
									</div>
	
								</div>
							</div>
						</div>
					</div>
				</div>	

@stop