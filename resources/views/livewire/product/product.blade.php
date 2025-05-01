<div>
        <!-- Product -->
       {{-- product general --}}
			<div class="row isotope-grid">
				@foreach ($data as $key_product => $item_data)
				@php
					// Decodificar JSON a array
					$images = is_string($item_data->img) ? json_decode($item_data->img, true) : $item_data->img;
				@endphp
					<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$item_data->category->name}}">
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
							
									 {{-- <a  href="modal-{{$item_data->id}}" data-target="{{$item_data->id}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1 {{$key_product}}">
										Ver
									</a> --}}

                                    <button href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1"
									wire:click="show({{ $item_data->id }})">
                                        Ver
                                    </button>

                               

									{{-- <a href="#" data-bs-toggle="modal" data-bs-target="#modal-edit-{{ $item_data->id }}">
										test
									</a> --}}
							   <!-- Modal1 -->
                               @if($updateMode)
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

                                @endif



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

			<script>
				document.addEventListener('livewire:load', function () {
					Livewire.on('showProduct', productId => {
						document.querySelectorAll('.js-modal1').forEach(modal => {
							modal.style.display = 'none';
						});
						const modal = document.getElementById(`modal-${productId}`);
						if (modal) {
							modal.style.display = 'block';
						}
					});
			
					Livewire.on('hideModal', () => {
						document.querySelectorAll('.js-modal1').forEach(modal => {
							modal.style.display = 'none';
						});
					});
			
					document.querySelectorAll('.js-hide-modal1').forEach(button => {
						button.addEventListener('click', function() {
							var modal = button.closest('.wrap-modal1');
							if (modal) {
								modal.style.display = 'none';
								Livewire.emit('hideModal');
							}
						});
					});
				});
			</script>

</div>