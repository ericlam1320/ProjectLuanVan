@extends ('client.layouts.master')

@section ('title', 'Liverpool FC - Chi tiết tin tức')

@section ('content')

<!--// KODE BENNER1 START //-->
<div class="kode_benner1 bamnner2">
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

<div class="kode_blog_wraper">
	<div class="container">
		<div class="row">

			<div class="col-md-9">
				<div class="kode_detail_row">
					<!-- KODE DETAIL FIG START -->
					<div class="kode_detail_fig">
						<figure>
							<img src="Client/extra-images/ftb-post-slider2.jpg" alt="">
						</figure>
						<div class="kode_detail_admin">
							<span>04/05/2018<strong></strong></span>
							<div class="kode_detail_title">
								<h2>Fifa president Gianni nelo nfantino</h2>
							</div>
						</div>
						<div class="kode_detail_text">
							<p>HE more Gareth Southgate spoke yesterday, the more he inadvertently appeared to tick those boxes whichHE more Gareth Southgate spoke yesterday, the more he inadvertently appeared to tick those boxes whichHE more Gareth Southgate spoke yesterday, the more he inadvertently appeared to tick those boxes whichHE more Gareth Southgate spoke yesterday, the more he inadvertently . . is the yar istme diolidurmeio HE more Gareth Southgate spoke yesterday, the more he inadvertently appeared to tick those boxes whichHE more Gareth Southgate </p>
							<p>HE more Gareth Southgate spoke yesterday, the more he inadvertently appeared to tick those boxes whichHE more Gareth Southgate spoke yesterday, the more he inadvertently appeared to tick those boxes whichHE more Gareth Southgate spoke yesterday, the more he inadvertently appearer.</p>
						</div>
					</div>

					<div class="kode_detail_caption">
						<p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolorin reprehenderit idn voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sasunt in culpa qui officia deserunt mollit anim id est laborum.Sed utea perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. ipsa quae abmora illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
						<p>Sed utea perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. ipsa quae abmora illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
						<p>error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. ipsa quae abmora illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
					</div>
	
					<div class="kode_detail_post">
						<div class="kode_detail_share">
							<h5><a href="#"><i class="fa fa-share-alt"></i></a>Chia sẻ</h5>
							<ul>
								  <li><a href="https://www.facebook.com/LiverpoolFC"> <i class="fa fa-facebook"></i></a></li>
								  <li><a href="https://twitter.com/lfc"> <i class="fa fa-twitter"></i></a></li>
								  <li><a href="https://www.linkedin.com/company/liverpool-football-club"> <i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="kode_detail_related">
						<h2>Tin tức khác</h2>
						<div class="kode-related-slide">

							@for ($i=1;$i<=4;$i++)
							<div class="kode_blog_fig fig_2">
								<figure>
									<img href="tin-tuc/chi-tiet" src="Client/extra-images/video2.jpg" alt="">
									<figcaption>
										<a href="tin-tuc/chi-tiet"><i class="fa fa-expand"></i></a>
									</figcaption>
								</figure>

								<div class="kode_blog_text">
									<div class="kode_blog_des">
										<div class="kode_blog_caption">
											<h5>Fifa president Gianni nelo 
												Infantino 
											</h5>
											<p>HE more Gareth Southgate spoke yesterday, the more he inadvertently appeared to tick those boxes which..</p>
										</div>
									</div>	
									<div class="kode_blog_comment">
										<a href="tin-tuc/chi-tiet">Xem chi tiết</a>
									</div>
								</div>
							</div>
							@endfor
						
						</div>		
					</div>

				</div>
			</div>

		</div>
	</div>
</div>

@stop