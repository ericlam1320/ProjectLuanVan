@extends ('client.layouts.master')

@section ('title', 'Liverpool FC - Trang Chủ')

@section ('content')

			<!--// Main Banner //-->
			  <div id="mainbanner">
				<div class="flexslider">
				  <ul class="slides">
					<li>
					  <!--// THUMB SLIDER START //-->
					  <div class="thumb-slider">
						<img src="Client/images/banner/liverpool_banner.jpg" alt="" />
					  </div>
					  <!--// THUMB SLIDER END //-->
					</li>
					
					<li>
					  <div class="thumb-slider">
						<img src="Client/images/banner/liverpool_banner3.jpg" alt="" />
						<div class="container">
				
						</div>
					  </div>
					</li>

					<li>
						<div class="thumb-slider">
							<img src="Client/images/banner/liverpool_banner2.jpg" alt="" />
							<div class="container">
								<div class="kode-ft-caption text-center"> 
									<div class="football-caption">      
										<h5>Thank you !!</h5>
									</div>
									<div class="clearfix"></div>        
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</li>
					
				  </ul>
				</div>
			  </div>
			  <!--// Main Banner //-->

			  <!--// Main Content //-->
			  <div class="kode-content">
				<div class="ft-match-slider">
				  <div class="owl-carousel-3 owl-theme" id="owl-demo6">
					
					@for ($i=0;$i<=5;$i++)
					  <div class="ft-match-dec">
						  <span>{{ date('d/m/Y' , strtotime($CacTranDauTiepTheo[$i]->NgayThiDau)) }}</span>
						  <div class="ft-match-teams">
							<div class="ft-team-1">
							  <h5><a href="#">{{ $CacTranDauTiepTheo[$i]->TenDayDu }}</a></h5>
							  <a href="#"><img src="Client/images/logos/Liverpool.png" alt=""></a>
							</div>
							<span> VS </span>
							<div class="ft-team-1 ft-team-2">
							  <h5><a href="#">{{ $CacTranDauTiepTheo[$i+1]->TenDayDu }}</a></h5>
							  <a href="#"><img src="Client/images/logos/ManCity.png" alt=""></a>
							</div>
						  </div>
					  </div>
					  <?php $i++; ?>
					@endfor

				</div>

				<section class="ftb_goalpost">
					<div class="container">
						<div class="heading5 hdg_6">
						  <h4>Câu lạc bộ bóng đá <span>Liverpool</span></h4>
						</div>
						<div class="row">
							<div class="ftb_goal_tab_des">
								<div class="col-md-3">
									<div class="ftb_goal_fig">
										<img height="240" width="400" src="Client/images/logos/Liverpool_Home.png" alt="images">
									</div>
								</div>
								<div class="col-md-9">
									<div class="panel panel-default">
										<div class="ftb_goal_tabs">
											<div class="panel-body">	
												<div class="tab-content">
													<div class="tab-pane active" id="tab3">
														<div class="ftb_club_stats">
															<p>Câu lạc bộ bóng đá Liverpool (viết tắt Liverpool F.C.) là một câu lạc bộ bóng đá chuyên nghiệp Anh, có trụ sở tại thành phố Liverpool, hạt Merseyside, hiện đang chơi tại giải bóng đá Ngoại hạng Anh. Tính đến nay, Liverpool đã 18 lần vô địch nước Anh, giành được 7 Cúp FA, 8 Cúp Liên đoàn Anh, 15 Siêu cúp Anh, 5 Cúp vô địch châu Âu (Cúp C1), 3 Cúp UEFA (Cúp C2) và 3 Siêu cúp châu Âu.</p>
															<ul>
																<li><a><i class="fa fa-chevron-circle-right"></i><b>Năm thành lập</b>	1892</a></li>
																<li><a><i class="fa fa-chevron-circle-right"></i><b>Biệt danh</b>	The Reds</a></li>
																<li><a><i class="fa fa-chevron-circle-right"></i><b>Sân vận động</b>	Anfiled</a></li>
																<li><a><i class="fa fa-chevron-circle-right"></i><b>Sức chứa</b>	54.074</a></li>
																<li><a><i class="fa fa-chevron-circle-right"></i><b>Chủ sở hữu</b>	Tập đoàn Fenway Sports</a></li>
																<li><a><i class="fa fa-chevron-circle-right"></i><b>Chủ tịch</b>	Tom Werner </a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>
					</div>
				</section>

				</section>
				<!--// TENNIS EVENT BG //-->
				<section class="ftb-resultbg">
				  <div class="container">
					<div class="heading5">
					  <h4>Kết quả trận đấu <span>gần đây</span></h4>
					</div>
					<div class="ftb-result-wrap">
					  <div class="ftb-result1">
						<div class="ftb-result-logo">
						  <a href="#"><img src="Client/images/logos/Liverpool_big.png" alt=""></a>
						</div>
						<div class="text">
						  <h6><a href="#">{{ $KetQuaTranDauGanDay[0]->TenDayDu }}</a></h6>
						</div>
					  </div>

					  <div class="ftb-final-result">
						<em>{{ date('d/m/Y', strtotime($KetQuaTranDauGanDay[0]->NgayThiDau)) }} | {{ date('G:i', strtotime($KetQuaTranDauGanDay[0]->GioThiDau)) }} PM <i>{{ $KetQuaTranDauGanDay[0]->DiaDiem }}</i></em>
						<p><span class="grater">{{ $KetQuaTranDauGanDay[0]->TiSo }}</span> - <span>{{ $KetQuaTranDauGanDay[1]->TiSo }}</span></p>
						<a class="btn-4"  href="#">Xem chi tiết</a>
					  </div>

					  <div class="ftb-result1 ftb-result2">
						<div class="ftb-result-logo">
						  <a href="#"><img src="Client/images/logos/RealMadrid_big.png" alt=""></a>
						</div>
						<div class="text">
						  <h6><a href="#">{{ $KetQuaTranDauGanDay[1]->TenDayDu }}</a></h6>
						</div>
					  </div>
					</div>
				  </div>
				</section>

				<!--// Football EVENT FIXTURE //-->
				<section>
				  <div class="container">
					<div class="row">
					  <!--// BLOG SLIDER //-->
					  <div class="col-md-4">
						<div class="heading6">
						  <h4>Tin tức <span>nổi bật</span></h4>
						</div>
						<div class="ftb-bx-slider">
						  <ul class="bxslider">

							<li>
							  <div class="ftb-post-thumb">
								<a href="#"><img src="Client/extra-images/ftb-post-slider.jpg" alt=""></a>
								<div class="text">
								  <h6>Thành công nhờ mua sắm hiệu quả</h6>
								  <a class="btn-4" href="#">Xem chi tiết</a>
								</div>
							  </div>
							</li>


						  </ul>
						</div>
					  </div>
					  <!--// BLOG SLIDER //-->
					  <!--// BLOG SLIDER //-->
					  <div class="col-md-4">
						<!--// HEADING 6 //-->
						<div class="heading6">
						  <h4>Clip<span> Nổi bật</span></h4>
						</div>
						<!--// HEADING 6 //-->
						<!--// POST //-->
						<div class="ftb-post-thumb">
						  <a href="https://www.youtube.com/watch?v=tCHODj8bA6w"><img src="Client/extra-images/ftb-post-slider2.jpg" alt="" height="180"></a>
						  <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
						  <div class="text">
							<h6>Các bàn thắng đẹp Salah</h6>
						  </div>
						</div>
						<!--// POST //-->
						<!--// POST //-->
						<div class="ftb-post-thumb">
						  <a href="https://www.youtube.com/watch?v=sDymt1S8NE8"><img src="Client/extra-images/ftb-post-slider3.jpg" alt="" height="180"></a>
						  <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
						  <div class="text">
							<h6>Liverpool 3 - 0 Man City</h6>
						  </div>
						</div>
						<!--// POST //-->
					  </div>
					  <!--// BLOG SLIDER //-->
					  <div class="col-md-4">
						<!--// HEADING 6 //-->
						<div class="heading6">
						  <h4>Bảng xếp hạng<span></span></h4>
						</div>
						<!--// HEADING 6 //-->
						<!--// RATING TABLE //-->
						<ul class="ftb-rating-table">
						  <li>
							<div class="ftb-position">
							  1 . 
							</div>
							<div class="ftb-team-name">
							  <img src="Client/images/logos/ManCity.png" alt="">
							  <a href="#">Manchester City</a>
							</div>
							<div class="ftb-team-points">
							  100
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  2 . 
							</div>
							<div class="ftb-team-name">
							  <img src="Client/images/logos/MU.png" alt="">
							  <a href="#">Manchester Utd</a>
							</div>
							<div class="ftb-team-points">
							  87
							</div>
						  </li>
						  <li  class="BangXepHangDoiBong">
							<div class="ftb-position">
							  3 . 
							</div>
							<div class="ftb-team-name">
							  <img src="Client/images/logos/Liverpool.png" alt="">
							  <a href="#">Liverpool</a>
							</div>
							<div class="ftb-team-points">
							  78
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  4 . 
							</div>
							<div class="ftb-team-name">
							  <img src="Client/images/logos/Arsenal.png" alt="">
							  <a href="#">Arsenal</a>
							</div>
							<div class="ftb-team-points">
							  77
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  5 . 
							</div>
							<div class="ftb-team-name">
							  <img src="Client/images/logos/Chelsea.png" alt="">
							  <a href="#">Chelsea</a>
							</div>
							<div class="ftb-team-points">
							  75
							</div>
						  </li>
						  <li>
							<div class="ftb-position">
							  6 . 
							</div>
							<div class="ftb-team-name">
							  <img src="Client/images/logos/RealMadrid.png" alt="">
							  <a href="#">Wigan Atletic</a>
							</div>
							<div class="ftb-team-points">
							  67
							</div>
						  </li>
						</ul>
						<!--// RATING TABLE //-->
					  </div>
					  <!--// BLOG SLIDER //-->
					</div>
					
				  </div>

				</section>
				<section class="ftb-gallery-bg">
					<div class="container">
					  <div class="heading5">
						<h4>Hình ảnh  <span>Câu lạc bộ</span></h4>
					  </div>
					  <div class="ftb-gallery">
						<ul>
								
								@for ($i=1;$i<=6;$i++)
							  <li>
									<figure>
									  <img height="250" src="Client/images/banner/liverpool_img{{ $i }}.jpg" alt="">
									  <figcaption>
										<a data-rel="prettyPhoto[]" href="Client/images/banner/liverpool_img{{ $i }}.jpg"><i class="fa fa-eye"></i></a>
									  </figcaption>
									</figure>
							  </li>
							  @endfor

						</ul>
						<div class="tns-load ftb-load">                
						  <a href="#">Xem thêm</a>
						</div>
					  </div>
					</div>
				</section>

				<!--// FOOTBALL COUNTER //-->
				<div class="ftb-counterup">
				  <div class="container">
					<!--// HEADING 5 //-->
					<div class="heading5">
					  <h4>Thống kê mùa giải</h4>
					</div>
					<!--// HEADING 5 //-->
					<div class="row">
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-football"></span>
						  <div class="text">
							<h3 class="word-count">{{ $ThongKeMuaGiai[0]->SoTran }}</h3>
							<p>Trận đã đấu</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-soccer"></span>
						  <div class="text">
							<h3 class="word-count">{{ $ThongKeMuaGiai[0]->BanThang }}</h3>
							<p>Bàn thắng</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-symbol"></span>
						  <div class="text">
							<h3 class="word-count">{{ $ThongKeMuaGiai[0]->SoTranThang }}</h3>
							<p>Trận thắng</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					  <!--// COUNTER //-->
					  <div class="col-md-3 col-sm-3">
						<div class="counterup-dec">
						  <span class="icon-cup"></span>
						  <div class="text">
							<h3 class="word-count">{{ $SoCupTrongMuaGiai?$SoCupTrongMuaGiai[0]->SoCup:'0' }}</h3>
							<p>Danh hiệu</p>
						  </div>
						</div>
					  </div>
					  <!--// COUNTER //-->
					</div>
				  </div>
				</div>
				<!--// FOOTBALL COUNTER //-->
				<!--// FOOTBALL TEAM SECTION //-->
				<section>
				  <div class="container">
					<!--// HEADING 5 //-->
					<div class="heading5 black">
					  <h4>Cầu thủ  <span>đội bóng</span></h4>
					</div>
					<!--// HEADING 5 //-->
					<div class="row">

					  <!--// FOOTBALL TEAM //-->
					  @foreach ($CauThuTrongDoi as $cauthu)
					  <div class="col-md-3 col-sm-6">
							<div class="ftb-team-thumb">
							  <figure><img height='250' src="Client/images/players/Players_Home4.png" alt=""></figure>
							  <div class="ftb-team-dec">
								<span>07</span>
								<div class="text">
								  <a href="danh-sach-cau-thu/chi-tiet">{{ $cauthu->nguoidung->HoTen }}</a>
								  <p>{{ $cauthu->ViTriSoTruong }}</p>
								</div>
								<a class="arrow-iconbtn" href="danh-sach-cau-thu/chi-tiet"><i class="fa fa-arrow-right "></i></a>
							  </div>
							</div>
					  </div>
					  @endforeach
					  <!--// FOOTBALL TEAM //-->

					</div>
				  </div>
				</section>
				<!--// FOOTBALL TEAM SECTION //-->

				<!--// FOOTBALL LATEST NEWS SECTION //-->
				<div class="ftb-latestnew-wrap">
				  <div class="container">
					<div class="row">
					  <!--// FOOTBALL LATEST NEWS //-->
					  <div class="col-md-7">
						<!--// HEADING 5 //-->
						<div class="heading5 text-left">
						  <h4>Tin tức <span>Mới nhất</span></h4>
						</div>
						<!--// HEADING 5 //-->
						<div class="ftb-latestnew">
						  <figure><img height="500" src="Client/images/banner/liverpool_img2.jpg" alt=""></figure>
						  <div class="ftb-new-dec">
							<span>
							  <b>Tháng 5</b>
							  27
							</span>
							<div class="text">
							  <h4><a href="tin-tuc/chi-tiet">Great Win Over Real Madrid</a></h4>
							  <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor lo's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibe ...</p>
							  <a href="tin-tuc/chi-tiet">Xem chi tiết</a>
							</div>
						  </div>
						</div>
					  </div>
					  <!--// FOOTBALL LATEST NEWS //-->
					  <!--// FOOTBALL LATEST NEWS //-->
					  <div class="col-md-5 ftb-latestnew2-wrap">
						<!--// HEADING 5 //-->
						<div class="heading5 text-left">
						  <a href="tin-tuc/chi-tiet"><h4>Xem thêm <span>></span> </h4></a>
						</div>
						<!--// HEADING 5 //-->
						<!--// FOOTBALL LATEST NEWS //-->

						@for ($i=1;$i<=4;$i++)
						<div class="ftb-latestnew2">
						  <div class="ftb-new-dec">
							<figure><img height="140" src="Client/images/banner/liverpool_img3.jpg" alt=""></figure>
							<div class="text">
							  <h4><a href="tin-tuc/chi-tiet">Tin tức {{$i}}</a></h4>
							  <p>This is Photoshop's version is theveltiocv sollicitudin, lorem quis bibe .This is Photoshop's version is ti ...</p>
							  <a href="tin-tuc/chi-tiet">Xem chi tiết</a>
							</div>
						  </div>
						</div>
						@endfor

					  </div>
					  <!--// FOOTBALL LATEST NEWS //-->
					</div>
				  </div>
				</div>
@stop