
<x-layout>

	<x-slot name="title"> Escrubs - Sitio Oficial</x-slot>

	
	<!-- Sliders -->
	 <livewire:home.banner />

	 <style>
		 #canvas {
			border: 1px solid black;
		}
		.pagination {
			display: flex;
			justify-content: center;
			list-style: none;
			padding: 0;
		}
		.pagination .page-item {
			margin: 0 5px;
		}
		.pagination .page-link {
			color: rgb(251, 227, 209);
			background-color: #e83e8c;
			border: 1px solid #dee2e6;
			padding: 0.5rem 0.75rem;
			text-decoration: none;
		}
		.pagination .page-item.active .page-link {
			color: #e83e8c;
			background-color: rgb(251, 227, 209);;
			border-color: rgb(251, 227, 209);;
		}

		.pagination .page-item.disabled .page-link {
			color: #6c757d;
			pointer-events: none;
			background-color: #e83e8c;
			border: 1px solid #dee2e6;
		}
    </style>
	<!-- Banner -->
	<div class="sec-banner bg0 p-t-80 p-b-50">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5">
					Catalogos
				</h3>
			</div>
			<div class="row">
				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{ asset('storage/banners/AmberModernLogo_2.png')}}" alt="IMG-BANNER">
						<a href="{{ route('catalog_amber')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8" style="font-family:Bebas Neue, cursive; font-size: 40px; color: ##090909">
									Amber interactivo
								</span>

								<span class="block1-info stext-102 trans-04">
									Catálogo 2024
								</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver ahora !
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{ asset('storage/banners/3.png')}}" alt="IMG-BANNER">

						<a href="{{ route('catalog_estetos')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8" style="font-family:Bebas Neue, cursive; font-size: 40px; color: ##090909">
									Estetos
								</span>

								<span class="block1-info stext-102 trans-04">
									Catálogo 2024
								</span>
							</div>
							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver ahora !
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						<img src="{{ asset('storage/banners/4.png')}}" alt="IMG-BANNER">

						<a href="{{ route('catalog_enfermedic')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8" style="font-family:Bebas Neue, cursive; font-size: 40px; color: ##090909">
									Enfermedic
								</span>
								<span class="block1-info stext-102 trans-04">
									Catálogo 2024
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Ver ahora !
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10">
				<h3 class="ltext-103 cl5" id="productos">
					Productos
				</h3>
			</div>
			<div class="flex-w flex-sb-m p-b-52" id="filtro-productos">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos los productos
					</button>

					@foreach ($name_categories as $category)
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category->name}}">
							{{$category->name}}
						</button>
					@endforeach

					
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

				
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<div class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						{{-- <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search"> --}}
					
					</div>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">

						<div class="filter-col3 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Color
							</div>

							<ul>
								@foreach ($colors_list as $color)
									<li class="p-b-6 flex-w flex-l-m filter-tope-group">
										<span class="fs-15 lh-12 m-r-6" 
										@if ($color=='negro')
											style="color: #222;"
											@elseif($color=='azul')
												style="color: #4272d7;"
											@elseif($color=='gris')
												style="color: #b3b3b3;"
											@elseif($color=='verde')
												style="color: #00ad5f;"
											@elseif($color=='rojo')
												style="color: #fa4251;"
											@elseif($color=='blanco')
												style="color: #fcf8f8;"
										@endif>
											<i class="zmdi zmdi-circle"></i>
										</span>
										<button class="filter-link stext-106 trans-04 filter-button" data-filter="color" data-value="{{ $color }}">
											{{ ucfirst($color) }}
										</button>
									</li>
								@endforeach

								{{-- <li class="p-b-6 flex-w flex-l-m filter-tope-group">
									<span class="fs-15 lh-12 m-r-6" style="color: #4272d7;">
										<i class="zmdi zmdi-circle"></i>
									</span>
									<button class="filter-link stext-106 trans-04" data-filter=".azul">
										Azul
									</button>
								</li>
								<li class="p-b-6 flex-w flex-l-m filter-tope-group">
									<span class="fs-15 lh-12 m-r-6" style="color: #b3b3b3;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<button class="filter-link stext-106 trans-04" data-filter=".gris">
										Gris
									</button>
								</li> --}}
							

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row isotope-grid" id="product">
				@foreach ($data as $key_product => $item_data)
				@php
					// Decodificar JSON a array
					$images = is_string($item_data->img) ? json_decode($item_data->img, true) : $item_data->img;
				@endphp
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$item_data->category->name}} {{$item_data->color}}">
						<!-- Block2 -->
						
							<div class="block2">
								<div class="block2-pic hov-img0">

									@if(is_array($images))
										@foreach($images as $key_image => $image)
											@if ($loop->first)
												<a href="https://wa.me/527751502207?text={{ urlencode('Buen día me gustaría saber el precio del producto: ' . $item_data->name . ' sku: ' . $item_data->sku .' Categoria: ' . $item_data->category->name) }}" target="_blank"> 
													<img src="{{ asset('storage') . '/'. $image }}" alt="{{$image}}" style="background-color: #fbe3d1;" width="200" height="400">
												</a>
											@endif
										@endforeach
									@endif
							
								</div>
									<div class="block2-txt flex-w flex-t p-t-14">
										<div class="block2-txt-child1 flex-col-l ">
											<a href="https://wa.me/527751502207?text={{ urlencode('Buen día me gustaría saber el precio del producto: ' . $item_data->name . ' sku: ' . $item_data->sku .' Categoria: ' . $item_data->category->name) }}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" target="_blank" style="font-size: 26px; color:black;font-family:Bebas Neue, cursive">
												<b>{{$item_data->name}}</b>
											</a>

											<span class="stext-105 cl3" style="font-size: 14px;color:black">
												{{$item_data->description ?? '' }}
											</span>

										</div>
										<div class="block2-txt-child2 flex-r p-t-3">
											<a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
												<img class="icon-heart1 dis-block trans-04" src="{{ asset('storage/images/icons/icon-heart-01.png')}}" alt="ICON">
												<img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{ asset('storage/images/icons/icon-heart-02.png')}}" alt="ICON">
											</a>
										</div>
									</div>
							
							</div>
						

					</div>
				@endforeach
			</div>

		</div>

		<!-- Enlaces de paginación -->
		<nav>
			<ul class="pagination">
				@if ($data->onFirstPage())
					<li class="page-item disabled"><span class="page-link">Anterior</span></li>
				@else
					<li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}#filtro-productos">Anterior</a></li>
				@endif

				@foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
					@if ($page == $data->currentPage())
						<li class="page-item active"><span class="page-link">{{ $page }}</span></li>
					@else
						<li class="page-item"><a class="page-link" href="{{ $url }}#filtro-productos">{{ $page }}</a></li>
					@endif
				@endforeach

				@if ($data->hasMorePages())
					<li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}#filtro-productos">Siguiente</a></li>
				@else
					<li class="page-item disabled"><span class="page-link">Siguiente</span></li>
				@endif
			</ul>
		</nav>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				document.querySelectorAll('.filter-button').forEach(function(button) {
					button.addEventListener('click', function() {
						var filterType = this.getAttribute('data-filter');
						var filterValue = this.getAttribute('data-value');
						var url = new URL(window.location.href);
						url.searchParams.set(filterType, filterValue);
						url.hash = 'filtro-productos';
						window.location.href = url.toString();
					});
				});
		});
		</script>
	</section>

	<!-- Modal1 -->
	{{-- <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
		<div class="overlay-modal1 js-hide-modal1"></div>

		<div class="container">
			<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
				<button class="how-pos3 hov3 trans-04 js-hide-modal1">
					<img src="{{ asset('storage/images/icons/icon-close.png')}}" alt="CLOSE">
				</button>

				<div class="row">
					<div class="col-md-6 col-lg-7 p-b-30">
						<div class="p-l-25 p-r-30 p-lr-0-lg">
							<div class="wrap-slick3 flex-sb flex-w">
								<div class="wrap-slick3-dots"></div>
								<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

								<div class="slick3 gallery-lb">
									<div class="item-slick3" data-thumb="{{ asset('storage/images/product-detail-01.jpg')}}">
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('storage/images/product-detail-01.jpg')}}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('storage/images/product-detail-01.jpg')}}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{{ asset('storage/images/product-detail-02.jpg')}}">
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('storage/images/product-detail-02.jpg')}}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('storage/images/product-detail-02.jpg')}}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>

									<div class="item-slick3" data-thumb="{{ asset('storage/images/product-detail-03.jpg')}}">
										<div class="wrap-pic-w pos-relative">
											<img src="{{ asset('storage/images/product-detail-03.jpg')}}" alt="IMG-PRODUCT">

											<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('storage/images/product-detail-03.jpg')}}">
												<i class="fa fa-expand"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-5 p-b-30">
						<div class="p-r-50 p-t-5 p-lr-0-lg">
							<h4 class="mtext-105 cl2 js-name-detail p-b-14">
								Lightweight Jacket
							</h4>

							<span class="mtext-106 cl2">
								$58.79
							</span>

							<p class="stext-102 cl3 p-t-23">
								Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
							</p>
							
							<!--  -->
							<div class="p-t-33">
								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Size
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Size S</option>
												<option>Size M</option>
												<option>Size L</option>
												<option>Size XL</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-203 flex-c-m respon6">
										Color
									</div>

									<div class="size-204 respon6-next">
										<div class="rs1-select2 bor8 bg0">
											<select class="js-select2" name="time">
												<option>Choose an option</option>
												<option>Red</option>
												<option>Blue</option>
												<option>White</option>
												<option>Grey</option>
											</select>
											<div class="dropDownSelect2"></div>
										</div>
									</div>
								</div>

								<div class="flex-w flex-r-m p-b-10">
									<div class="size-204 flex-w flex-m respon6-next">
										<div class="wrap-num-product flex-w m-r-20 m-tb-10">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>

										<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
											Add to cart
										</button>
									</div>
								</div>	
							</div>

							<!--  -->
							<div class="flex-w flex-m p-l-100 p-t-40 respon7">
								<div class="flex-m bor9 p-r-10 m-r-11">
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 js-addwish-detail tooltip100" data-tooltip="Add to Wishlist">
										<i class="zmdi zmdi-favorite"></i>
									</a>
								</div>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook">
									<i class="fa fa-facebook"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
									<i class="fa fa-twitter"></i>
								</a>

								<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Google Plus">
									<i class="fa fa-google-plus"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	
</x-layout>