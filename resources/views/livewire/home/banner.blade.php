<div>
	<style>
		#background-video {
			position: absolute;
			top: 50%;
			left: 50%;
			width: 100%;
			height: 100%;
			object-fit: cover;
			transform: translate(-50%, -50%);
			z-index: -1;
			opacity: 0.75; /* Ajusta la opacidad según lo necesites */
		}
		.video-background {
			position: relative;
			width: 100%;
			height: 100vh; /* O ajusta esta altura según tus necesidades */
			overflow: hidden;
		}
	</style>
	<!-- Slider -->
	<section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				@foreach ($this->get_banners as $item)
					@if ($item->title == 'video')
						<div class="item-slick1">
							<video width="640" height="360" autoplay playsinline controls muted loop id="background-video">
								<source src="{{ asset('storage/'.$item->img)}}" type="video/mp4">
								Tu navegador no soporta el video.
							</video>
							@else
							<div class="item-slick1" style="background-image: url({{ asset('storage/' . $item->img)}}); opacity:0.75;">
					@endif
						<div class="container h-full">
							<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
								<div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
									<span class="ltext-101 cl2 respon2">
										{{ $item->description }}
									</span>
								</div>
								<div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
									<h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
										{{ $item->title }}
									</h2>
								</div>
								<div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
									<a href="{{route('home')}}#product" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
										Comprar ahora !
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach	
			</div>
		</div>
	</section>
</div>