<header class="mt-2 p-3 w-full">
	<!-- Top bar with logo -->
	<div class="logo flex flex-row items-top justify-between">
		<div class="w-1/5 md:w-1/3">
			<div class="flex space-x-4 hidden md:block">
				<a class="uppercase font-bold" href="#">Women</a>
				<a class="uppercase font-bold border-b-4 border-red-600" href="#">Men</a>
			</div>
		</div>
		<div class="w-3/5 md:w-1/3"><img class="w-full" src="{{ asset('img/logo.svg') }}" alt="" srcset=""></div>
		<div class="w-1/5 md:w-1/3 text-xs text-right font-medium">Sign in</div>
	</div> <!-- ./ Top bar with logo -->

	<!-- Main nav -->
	<nav class="nav md:-mt-6" x-data="{ isOpen: false }">
		<!-- Right side menu -->
		<ul class="px-2 mt-1 flex flex-row items-center justify-between md:justify-end md:space-x-5">
			<li class="hamburger md:hidden">
				<a @click.prevent="isOpen = !isOpen"  @click.away="isOpen = false" href="#">
					<svg class="w-8" viewBox="0 0 20 20">
						<path x-show="!isOpen" d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/>
						<path x-show="isOpen" d="M14.348 14.849a1.2 1.2 0 01-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 11-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 111.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 111.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 010 1.698z"/>
					</svg>
				</a>
			</li>
			<li class="search md:hidden"><svg class="w-8 md:w-6" viewBox="0 0 20 20"><path d="M17.545 15.467l-3.779-3.779a6.15 6.15 0 00.898-3.21c0-3.417-2.961-6.377-6.378-6.377A6.185 6.185 0 002.1 8.287c0 3.416 2.961 6.377 6.377 6.377a6.15 6.15 0 003.115-.844l3.799 3.801a.953.953 0 001.346 0l.943-.943c.371-.371.236-.84-.135-1.211zM4.004 8.287a4.282 4.282 0 014.282-4.283c2.366 0 4.474 2.107 4.474 4.474a4.284 4.284 0 01-4.283 4.283c-2.366-.001-4.473-2.109-4.473-4.474z"/></svg></li>
			<li class="user"><svg class="w-8 md:w-6" viewBox="0 0 20 20"><path d="M7.725 2.146c-1.016.756-1.289 1.953-1.239 2.59.064.779.222 1.793.222 1.793s-.313.17-.313.854c.109 1.717.683.976.801 1.729.284 1.814.933 1.491.933 2.481 0 1.649-.68 2.42-2.803 3.334C3.196 15.845 1 17 1 19v1h18v-1c0-2-2.197-3.155-4.328-4.072-2.123-.914-2.801-1.684-2.801-3.334 0-.99.647-.667.932-2.481.119-.753.692-.012.803-1.729 0-.684-.314-.854-.314-.854s.158-1.014.221-1.793c.065-.817-.398-2.561-2.3-3.096-.333-.34-.558-.881.466-1.424-2.24-.105-2.761 1.067-3.954 1.929z"/></svg></li>
			<li class="fav"><svg class="w-8 md:w-6 fill-current text-red-600" viewBox="0 0 20 20"><path d="M17.19 4.156c-1.672-1.535-4.383-1.535-6.055 0L10 5.197 8.864 4.156c-1.672-1.535-4.382-1.535-6.054 0-1.881 1.726-1.881 4.519 0 6.245L10 17l7.19-6.599c1.88-1.726 1.88-4.52 0-6.245zm-1.066 5.219L10 15.09 3.875 9.375c-.617-.567-.856-1.307-.856-2.094s.138-1.433.756-1.999c.545-.501 1.278-.777 2.063-.777.784 0 1.517.476 2.062.978L10 7.308l2.099-1.826c.546-.502 1.278-.978 2.063-.978s1.518.276 2.063.777c.618.566.755 1.212.755 1.999s-.238 1.528-.856 2.095z"/></svg></li>
			<li class="world hidden md:block"><img class="w-6" src="{{ asset('img/world.svg') }}" alt=""></li>
			<li class="total hidden md:block">0.00 €</li>
			<li class="bag"><svg class="w-8" viewBox="0 0 32 32"><path d="M16 3c-2.746 0-5 2.254-5 5v1H6.062L6 9.938l-1 18L4.937 29h22.125L27 27.937l-1-18L25.937 9H21V8c0-2.746-2.254-5-5-5zm0 2a3 3 0 013 3v1h-6V8a3 3 0 013-3zm-8.063 6H11v3h2v-3h6v3h2v-3h3.063l.875 16H7.063z"/></svg></li>
		</ul> <!-- ./ Right side menu -->

		<!-- Main menu -->
		<div :class="{ 'hidden': !isOpen }" class="menus md:flex mt-6 md:mt-1 px-6 md:px-0"> <!-- transition-opacity opacity-100 -->
			<div class="gender flex space-x-20 md:hidden">
				<a class="uppercase font-bold" href="#">Women</a>
				<a class="uppercase font-bold border-b-4 border-red-600" href="#">Men</a>
			</div>
			
			<ul class="primary-menu-list md:relative divide-y divide-gray-300 border-b border-gray-300 mt-2 mb-6 md:mb-0 md:w-full md:bg-black md:border md:border-black md:divide-y-0 md:flex">
				@foreach (config('dfl.mainMenus') as $primaryMenu)
					<li 
						:class="{ 'md:text-black md:bg-white': isCollapsed }"
						@mouseenter.debounce.100ms="isCollapsed = true"
						@mouseleave.debounce.100ms="isCollapsed = false"
						{{-- @click.away="isCollapsed = false"  --}}
						x-data="{ isCollapsed: false }">
						<a 
							:class="{ 'md:text-white md:hover:text-black md:hover:bg-white md:hover:border md:hover:border-black': !isCollapsed }"
							class="flex items-center justify-between w-full py-2 md:px-4 md:text-xs md:uppercase md:justify-around" 
							href="#">
							{{ $primaryMenu['name'] }}
							<svg class="md:hidden w-6 h-6 fill-current text-gray-600" viewBox="0 0 20 20">
								<path x-show="isCollapsed" d="M16 10c0 .553-.048 1-.601 1H4.601C4.049 11 4 10.553 4 10c0-.553.049-1 .601-1H15.4c.552 0 .6.447.6 1z"/>
								<path x-show="!isCollapsed" d="M16 10c0 .553-.048 1-.601 1H11v4.399c0 .552-.447.601-1 .601-.553 0-1-.049-1-.601V11H4.601C4.049 11 4 10.553 4 10c0-.553.049-1 .601-1H9V4.601C9 4.048 9.447 4 10 4c.553 0 1 .048 1 .601V9h4.399c.553 0 .601.447.601 1z"/>
							</svg>
						</a>
						@unless( empty($primaryMenu['children']) )
							<div
								class="secondary-menu-container" :class="{ 'hidden': !isCollapsed }">
								<div class="md:absolute md:left-0 md:w-full mt-4 md:mt-0 md:p-3 md:flex md:flex-row md:space-x-32 md:bg-white md:border md:border-black">
									<ul class="secondary-menu-list text-sm space-y-3 md:space-y-1 {{ !empty($primaryMenu['children'][count($primaryMenu['children'])-1]['children']) ? 'md:flex md:flex-row md:space-x-40 md:space-y-0' : '' }}">
										@if( empty($primaryMenu['children'][count($primaryMenu['children'])-1]['children']) ) <li class="hidden md:block text-lg mb-4">Category</li> @endif
										@foreach ($primaryMenu['children'] as $secondaryMenu)
											<li class="">
												<a 
													class="
														{{ (empty($secondaryMenu['children']) && $loop->first) ? 'font-bold mb-2' : '' }}
														{{ !empty($secondaryMenu['children']) ? 'text-xl md:text-base font-thin md:font-normal' : '' }}
													" 
													href="#">{{ $secondaryMenu['name'] }}</a>
												@unless( empty($secondaryMenu['children']) )
													<ul class=" mt-3 ml-2 md:ml-0 space-y-2">
														@foreach($secondaryMenu['children'] as $thirdMenu)
															<li>
																<a class="{{ $loop->first ? 'font-bold mb-2' : '' }}" href="#">{{ $thirdMenu['name'] }}</a>
															</li>
														@endforeach
													</ul>
												@endunless
											</li>
										@endforeach
									</ul>

									@if( empty($primaryMenu['children'][count($primaryMenu['children'])-1]['children']) )
										<ul class="hidden md:block secondary-menu-list-options text-sm md:space-y-1">
											<li class="hidden md:block text-lg mb-4">Top Fashion Brands</li>
											@foreach ($primaryMenu['brands'] as $brand)
												<li>
													<a href="#">{{ $brand['name'] }}</a>
												</li>
											@endforeach
										</ul>

										<img class="hidden md:block p-10" src="{{ asset('img/'.Str::slug($primaryMenu['name']).'-menu.jpg') }}" alt="">
									@endif
								</div>
							</div>
						@endunless
					</li>
				@endforeach
			</ul>
		</div> <!-- ./ Main menu -->

		<!-- Search bar -->
		<div class="search-bar p-1 hidden w-full border-b border-dotted border-black md:flex items-center justify-between">
			<div><p class="pr-2 text-xs text-red-600">Sign up for the newsletter now and get your <span class="font-bold">10% voucher!</span></p></div>
			<form action="">
				<input class="text-sm border border-gray-600 p-1" type="text" placeholder="Your search term">
			</form>
		</div> <!-- ./ Search bar -->
	</nav> <!-- ./ Main nav -->
</header>