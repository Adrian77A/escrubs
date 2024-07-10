
<x-layout>

	<x-slot name="title"> Escrubs - Sitio Oficial</x-slot>

	
	<!-- Sliders -->
	 <livewire:home.banner />


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
						<img src="{{ asset('storage/banners/2.png')}}" alt="IMG-BANNER">
						<a href="{{ route('catalog_amber')}}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8" style="font-family:Bebas Neue, cursive; font-size: 40px; color: ##090909">
									Amber interactivo
								</span>

								<span class="block1-info stext-102 trans-04">
									Catálogo 2023
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
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						Todos los productos
					</button>

					@foreach ($name_categories as $category)
						<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".{{$category->name}}">
							{{$category->name}}
						</button>
					@endforeach

					{{-- <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Gorros">
						Gorritos
					</button>

					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".Chamarras">
						chamarras
					</button> --}}
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filter
					</div>

					{{-- <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Search
					</div> --}}
				
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
								<li class="p-b-6 flex-w flex-l-m filter-tope-group">
									<span class="fs-15 lh-12 m-r-6" style="color: #222;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<button class="filter-link stext-106 trans-04" data-filter=".negro">
										Negro
									</button>
								
								</li>
								<li class="p-b-6 flex-w flex-l-m filter-tope-group">
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
								</li>

								<li class="p-b-6 flex-w flex-l-m filter-tope-group">
									<span class="fs-15 lh-12 m-r-6" style="color: #00ad5f;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<button class="filter-link stext-106 trans-04" data-filter=".verde">
										Verde
									</button>
								</li>

								<li class="p-b-6 flex-w flex-l-m filter-tope-group">
									<span class="fs-15 lh-12 m-r-6" style="color: #fa4251;">
										<i class="zmdi zmdi-circle"></i>
									</span>

									<button class="filter-link stext-106 trans-04" data-filter=".rojo">
										Rojo
									</button>
								</li>

								<li class="p-b-6 flex-w flex-l-m filter-tope-group">
									<span class="fs-15 lh-12 m-r-6" style="color: #aaa;">
										<i class="zmdi zmdi-circle-o"></i>
									</span>

									<button class="filter-link stext-106 trans-04 flex-w flex-l-m filter-tope-group" data-filter=".blanco">
										Blanco
									</button>
								</li>
							</ul>
						</div>

						{{-- <div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Tags
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Fashion
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Lifestyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Denim
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Streetstyle
								</a>

								<a href="#" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									Crafts
								</a>
							</div>
						</div> --}}

					</div>
				</div>
			</div>


			{{-- @livewire('product.product') --}}
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
											<img src="{{ asset('storage') . '/'. $image }}" alt="{{$image}}">
										@endif
									@endforeach
								@endif
                               

									{{-- <a href="#" data-bs-toggle="modal" data-bs-target="#modal-edit-{{ $item_data->id }}">
										test
									</a> --}}
							   <!-- Modal1 -->
                               {{-- @if($updateMode)
									<div class="wrap-modal1 js-modal1 p-t-60 p-b-20 {{$key_product}}">
										<div class="overlay-modal1 js-hide-modal1"></div>

										<div class="container">
											<div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
												<button class="how-pos3 hov3 trans-04 js-hide-modal1" wire:click="hideModal">
													<img src="{{ asset('storage/images/icons/icon-close.png')}}" alt="CLOSE">
												</button>

												<div class="row">
													<div class="col-md-6 col-lg-7 p-b-30">
														<div class="p-l-25 p-r-30 p-lr-0-lg">
															<div class="wrap-slick3 flex-sb flex-w">
																<div class="wrap-slick3-dots"></div>
																<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

																<div class="slick3 gallery-lb">
																	@if(is_array($this->images_data))
																		@foreach($this->images_data as $image)
																		<div class="item-slick3" data-thumb="{{ asset('storage') . '/'. $image }}">
																			<div class="wrap-pic-w pos-relative">
																				<img src="{{ asset('storage') . '/'. $image }}" alt="{{$image}}">

																				<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{ asset('storage') . '/'. $image }}">
																					<i class="fa fa-expand"></i>
																				</a>
																			</div>
																		</div>
																		@endforeach
																	@endif
																</div>
															</div>
														</div>
													</div>
													
													
													<div class="col-md-6 col-lg-5 p-b-30">
														<div class="p-r-50 p-t-5 p-lr-0-lg">
															<h4 class="mtext-105 cl2 js-name-detail p-b-14">
																{{$this->record->name}}
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
									</div>

                                @endif --}}



							</div>

							<div class="block2-txt flex-w flex-t p-t-14">
								<div class="block2-txt-child1 flex-col-l ">
									<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="font-size: 15px; color:black">
										<b>{{$item_data->name}}</b>
									</a>

									{{-- <span class="stext-105 cl3" style="font-size: 21px;color:black">
										$ {{$item_data->price}}
									</span> --}}
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

			

			<!-- Load more -->
			{{-- <div class="flex-c-m flex-w w-full p-t-45">
				<a href="#" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04">
					Load More
				</a>
			</div> --}}

		</div>
	</section>


	<!-- Back to top -->
	<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
	</div>

	
	
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