@extends ('cauthu.layouts.master')

@section ("title")
Liverpool FC - {{  $tenCauThu  }}
@stop

@section ('content')

<section class="ftb-resultbg">
	<div class="container" style="margin-top: 200px;">
		<div class="heading5">
			<h4>Trận đấu <span>tiếp theo</span></h4>
		</div>
		<div class="ftb-result-wrap">
			<div class="ftb-result1">
				<div class="ftb-result-logo">
					<a href="#"><img src="Client/images/logos/Liverpool_big.png" alt=""></a>
				</div>
				<div class="text">
					<h6><a href="#">Liverpool</a></h6>
				</div>
			</div>

			<div class="ftb-final-result">
				<em>27/05/2018 | 9:00 pm <i>Kiev Stadium</i></em>
				<a class="btn-4"  href="./cau-thu/TenCauThu/doi-hinh-chien-thuat">Xem đội hình chiến thuật</a>
			</div>

			<div class="ftb-result1 ftb-result2">
				<div class="ftb-result-logo">
					<a href="#"><img src="Client/images/logos/RealMadrid_big.png" alt=""></a>
				</div>
				<div class="text">
					<h6><a href="#">Real Madrid</a></h6>
				</div>
			</div>
		</div>
	</div>
</section>


<!--// Main Content //-->
<div class="kode-content">
	<div class="ft-match-slider">
		<div class="owl-carousel-3 owl-theme" id="owl-demo6">
			<!--// SLIDER ITEM //-->
			<div class="ft-match-dec">
				<span>27/05/2018</span>
				<div class="ft-match-teams">
					<div class="ft-team-1">
						<h5><a href="#">Liverpool</a></h5>
						<a href="#"><img src="Client/images/logos/Liverpool.png" alt=""></a>
					</div>
					<span>3 - 1</span>
					<div class="ft-team-1 ft-team-2">
						<h5><a href="#">Real Madrid</a></h5>
						<a href="#"><img src="Client/images/logos/RealMadrid.png" alt=""></a>
					</div>
				</div>
			</div>
			<!--// SLIDER ITEM //-->
			<!--// SLIDER ITEM //-->
			<div class="ft-match-dec">
				<span>08/08/2018</span>
				<div class="ft-match-teams">
					<div class="ft-team-1">
						<h5><a href="#">Liverpool</a></h5>
						<a href="#"><img src="Client/images/logos/Liverpool.png" alt=""></a>
					</div>
					<span>21 : 00</span>
					<div class="ft-team-1 ft-team-2">
						<h5><a href="#">Arsenal</a></h5>
						<a href="#"><img src="Client/images/logos/Arsenal.png" alt=""></a>
					</div>
				</div>
			</div>
			<!--// SLIDER ITEM //-->
			<!--// SLIDER ITEM //-->
			<div class="ft-match-dec">
				<span>16/8/2018</span>
				<div class="ft-match-teams">
					<div class="ft-team-1">
						<h5><a href="#">Manchester Utd</a></h5>
						<a href="#"><img src="Client/images/logos/MU.png" alt=""></a>
					</div>
					<span>18 : 00</span>
					<div class="ft-team-1 ft-team-2">
						<h5><a href="#">Liverpool</a></h5>
						<a href="#"><img src="Client/images/logos/Liverpool.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>

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