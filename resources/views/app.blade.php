<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
		
		<title>dress-for-less clone</title>
		
		<!-- Favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    <body class="flex flex-col items-center">
        <header class="mt-2 p-3">
            <div class="logo flex flex-row items-top justify-between">
                <div class="w-1/5"></div>
                <div class="w-3/5"><img class="w-full" src="{{ asset('img/logo.svg') }}" alt="" srcset=""></div>
                <div class="w-1/5 text-xs text-right font-medium">Sign in</div>
            </div>

            <nav class="nav">
                <ul class="px-2 mt-1 flex flex-row items-center justify-between">
                    <li><svg class="w-8" viewBox="0 0 20 20"><path d="M16.4 9H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zm0 4H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1zM3.6 7h12.8c.552 0 .6-.447.6-1 0-.553-.048-1-.6-1H3.6c-.552 0-.6.447-.6 1 0 .553.048 1 .6 1z"/></svg></li>
                    <li><svg class="w-8" viewBox="0 0 20 20"><path d="M17.545 15.467l-3.779-3.779a6.15 6.15 0 00.898-3.21c0-3.417-2.961-6.377-6.378-6.377A6.185 6.185 0 002.1 8.287c0 3.416 2.961 6.377 6.377 6.377a6.15 6.15 0 003.115-.844l3.799 3.801a.953.953 0 001.346 0l.943-.943c.371-.371.236-.84-.135-1.211zM4.004 8.287a4.282 4.282 0 014.282-4.283c2.366 0 4.474 2.107 4.474 4.474a4.284 4.284 0 01-4.283 4.283c-2.366-.001-4.473-2.109-4.473-4.474z"/></svg></li>
                    <li><svg class="w-8" viewBox="0 0 20 20"><path d="M7.725 2.146c-1.016.756-1.289 1.953-1.239 2.59.064.779.222 1.793.222 1.793s-.313.17-.313.854c.109 1.717.683.976.801 1.729.284 1.814.933 1.491.933 2.481 0 1.649-.68 2.42-2.803 3.334C3.196 15.845 1 17 1 19v1h18v-1c0-2-2.197-3.155-4.328-4.072-2.123-.914-2.801-1.684-2.801-3.334 0-.99.647-.667.932-2.481.119-.753.692-.012.803-1.729 0-.684-.314-.854-.314-.854s.158-1.014.221-1.793c.065-.817-.398-2.561-2.3-3.096-.333-.34-.558-.881.466-1.424-2.24-.105-2.761 1.067-3.954 1.929z"/></svg></li>
                    <li><svg class="w-8 fill-current text-red-600" viewBox="0 0 20 20"><path d="M17.19 4.156c-1.672-1.535-4.383-1.535-6.055 0L10 5.197 8.864 4.156c-1.672-1.535-4.382-1.535-6.054 0-1.881 1.726-1.881 4.519 0 6.245L10 17l7.19-6.599c1.88-1.726 1.88-4.52 0-6.245zm-1.066 5.219L10 15.09 3.875 9.375c-.617-.567-.856-1.307-.856-2.094s.138-1.433.756-1.999c.545-.501 1.278-.777 2.063-.777.784 0 1.517.476 2.062.978L10 7.308l2.099-1.826c.546-.502 1.278-.978 2.063-.978s1.518.276 2.063.777c.618.566.755 1.212.755 1.999s-.238 1.528-.856 2.095z"/></svg></li>
                    <li><svg class="w-8" viewBox="0 0 32 32"><path d="M16 3c-2.746 0-5 2.254-5 5v1H6.062L6 9.938l-1 18L4.937 29h22.125L27 27.937l-1-18L25.937 9H21V8c0-2.746-2.254-5-5-5zm0 2a3 3 0 013 3v1h-6V8a3 3 0 013-3zm-8.063 6H11v3h2v-3h6v3h2v-3h3.063l.875 16H7.063z"/></svg></li>
                </ul>
            </nav>
        </header>

        <main class="mb-auto flex flex-col items-center p-3">
            <section class="hero">
                <img src="{{ asset('img/hero.jpg') }}" alt="" srcset="">
            </section>

            <section class="categories my-3 grid grid-cols-2 gap-3">
                <div class="category-card relative border border-gray-400 flex justify-center">
                    <img src="{{ asset('img/women.jpg') }}" alt="" srcset="">
                    <button class="absolute bottom-0 w-2/3 px-3 py-2 mb-3 bg-gray-400">Women</button>
                </div>
                <div class="category-card relative border border-gray-400 flex justify-center">
                    <img src="{{ asset('img/men.jpg') }}" alt="" srcset="">
                    <button class="absolute bottom-0 w-2/3 px-3 py-2 mb-3 bg-gray-400">Men</button>
                </div>
                <div class="category-card relative border border-gray-400 flex justify-center">
                    <img src="{{ asset('img/shoes.jpg') }}" alt="" srcset="">
                    <button class="absolute bottom-0 w-2/3 px-3 py-2 mb-3 bg-gray-400">Shoes</button>
                </div>
                <div class="category-card relative border border-gray-400 flex justify-center">
                    <img src="{{ asset('img/accesories.jpg') }}" alt="" srcset="">
                    <button class="absolute bottom-0 w-2/3 px-3 py-2 mb-3 bg-gray-400">Accesories</button>
                </div>
            </section>

            <section class="top-sellers my-3 flex flex-col items-center">
                <h1 class="my-4 text-2xl font-extrabold">Topseller</h1>

                <div class="top-sellers-carousel flex flex-row items-top justify-between">
                    <div class="w-1/8 mt-20 mr-1"><svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.891 17.418a.697.697 0 010 .979.68.68 0 01-.969 0l-7.83-7.908a.697.697 0 010-.979l7.83-7.908a.68.68 0 01.969 0 .697.697 0 010 .979L6.75 10l7.141 7.418z"/></svg></div>
                    <div class="product-card w-3/8">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img src="{{ asset('img/top-seller-1.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="product-info text-center flex flex-col justify-between">
                            <h3 class="text-sm font-bold">Rich & Royal</h3>
                            <div class="discount px-2 text-xs font-light flex flex-row items-center justify-between">
                                <span class="line-through">49.90 €</span>
                                <span>|</span>
                                <span class="bg-red-600 px-1 text-white font-semibold">-50%</span>
                            </div>
                            <span class="new-price text-xs font-semibold text-red-600">Only: 24.90 €</span>
                        </div>
                    </div>
                    <div class="product-card w-3/8">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img src="{{ asset('img/top-seller-2.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="product-info text-center flex flex-col justify-between">
                            <h3 class="text-sm font-bold">Malvin</h3>
                            <div class="discount px-2 text-xs font-light flex flex-row items-center justify-between">
                                <span class="line-through">129.90 €</span>
                                <span>|</span>
                                <span class="bg-red-600 px-1 text-white font-semibold">-50%</span>
                            </div>
                            <span class="new-price text-xs font-semibold text-red-600">Only: 64.90 €</span>
                        </div>
                    </div>
                    <div class="w-1/8 mt-20 ml-1"><svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/></svg></div>
                </div>
            </section>

            <section class="new-arrivals my-3 flex flex-col justify-between">
                <img class="mb-5" src="{{ asset('img/new-arrivals.jpg') }}" alt="">
                <img class="mb-3" src="{{ asset('img/TommyHilfiger.jpg') }}" alt="">
                <img class="mb-3" src="{{ asset('img/our-promise.jpg') }}" alt="">
                <img class="mb-3" src="{{ asset('img/dresses-trousers.jpg') }}" alt="">
            </section>

            <section class="new-arrivals my-3 flex flex-col items-center">
                <h1 class="my-4 text-2xl font-extrabold">New Arrivals</h1>

                <div class="new-arrivals-carousel flex flex-row items-top justify-between">
                    <div class="w-1/8 mt-20 mr-1"><svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.891 17.418a.697.697 0 010 .979.68.68 0 01-.969 0l-7.83-7.908a.697.697 0 010-.979l7.83-7.908a.68.68 0 01.969 0 .697.697 0 010 .979L6.75 10l7.141 7.418z"/></svg></div>
                    <div class="product-card w-3/8">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img src="{{ asset('img/new-arrival-1.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="product-info text-center flex flex-col justify-between">
                            <h3 class="text-sm font-bold">New Zealand Auckland</h3>
                            <div class="discount px-2 text-xs font-light flex flex-row items-center justify-between">
                                <span class="line-through">79.90 €</span>
                                <span>|</span>
                                <span class="bg-red-600 px-1 text-white font-semibold">-50%</span>
                            </div>
                            <span class="new-price text-xs font-semibold text-red-600">Only: 39.90 €</span>
                        </div>
                    </div>
                    <div class="product-card w-3/8">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img src="{{ asset('img/new-arrival-2.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="product-info text-center flex flex-col justify-between">
                            <h3 class="text-sm font-bold">LTB</h3>
                            <div class="discount px-2 text-xs font-light flex flex-row items-center justify-between">
                                <span class="line-through">39.90 €</span>
                                <span>|</span>
                                <span class="bg-red-600 px-1 text-white font-semibold">-50%</span>
                            </div>
                            <span class="new-price text-xs font-semibold text-red-600">Only: 19.90 €</span>
                        </div>
                    </div>
                    <div class="w-1/8 mt-20 ml-1"><svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/></svg></div>
                </div>
            </section>

            <section class="our-recommendations flex flex-col items-center">
                <h1 class="my-4 text-2xl font-extrabold">Our Recommendations</h1>

                <div class="our-recommendations-carousel flex flex-row items-top justify-between">
                    <div class="w-1/8 mt-20 mr-1"><svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.891 17.418a.697.697 0 010 .979.68.68 0 01-.969 0l-7.83-7.908a.697.697 0 010-.979l7.83-7.908a.68.68 0 01.969 0 .697.697 0 010 .979L6.75 10l7.141 7.418z"/></svg></div>
                    <div class="product-card w-3/8">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img src="{{ asset('img/new-arrival-1.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="product-info text-center flex flex-col justify-between">
                            <h3 class="text-sm font-bold">New Zealand Auckland</h3>
                            <div class="discount px-2 text-xs font-light flex flex-row items-center justify-between">
                                <span class="line-through">79.90 €</span>
                                <span>|</span>
                                <span class="bg-red-600 px-1 text-white font-semibold">-50%</span>
                            </div>
                            <span class="new-price text-xs font-semibold text-red-600">Only: 39.90 €</span>
                        </div>
                    </div>
                    <div class="product-card w-3/8">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img src="{{ asset('img/new-arrival-2.jpg') }}" alt="" srcset="">
                        </div>
                        <div class="product-info text-center flex flex-col justify-between">
                            <h3 class="text-sm font-bold">LTB</h3>
                            <div class="discount px-2 text-xs font-light flex flex-row items-center justify-between">
                                <span class="line-through">39.90 €</span>
                                <span>|</span>
                                <span class="bg-red-600 px-1 text-white font-semibold">-50%</span>
                            </div>
                            <span class="new-price text-xs font-semibold text-red-600">Only: 19.90 €</span>
                        </div>
                    </div>
                    <div class="w-1/8 mt-20 ml-1"><svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/></svg></div>
                </div>
            </section>

            <section class="newsletter my-3 py-12 bg-gray-200 flex flex-col items-center justify-center align-middle">
                <p class="text-xl text-center px-6">
                    <span>Subscribe to out newsletter now and </span>
                    <span class="font-bold">get 10% off</span>
                </p>
                <form action="" class="flex flex-col px-4">
                    <input class="mx-4 my-8 px-4 py-2" type="text" placeholder="e-mail address">
                    <div class="buttons flex justify-evenly">
                        <button class="w-full bg-black text-white text-sm mx-1 px-6 py-2">For women</button>
                        <button class="w-full bg-black text-white text-sm mx-1 px-6 py-2">For men</button>
                    </div>
                    <p class="text-center text-sm mt-6">
                        <span class="font-bold">Learn about fashion trends, offers &amp; vouchers!</span>
                        <br> Unsubscription at any time and with effect for the future, e.g. by e-mail to <a href="" class="underline">service@dress-for-less.row</a> or by clicking on the unsubscription link in the newsletter.
                    </p>
                </form>
            </section>
        </main>

        <footer class="w-full flex flex-col px-3">
            <div class="border-t-2 border-gray-300 p-6">
                <div class="payment-icons flex flex-row items-center justify-between">
                    <img class="h-8" src="{{ asset('img/visa.svg') }}" alt="">
                    <img class="h-8" src="{{ asset('img/mastercard.svg') }}" alt="">
                    <img class="h-8" src="{{ asset('img/amex.svg') }}" alt="">
                    <img class="h-8" src="{{ asset('img/paypal.svg') }}" alt="">
                </div>
                <p class="text-sm text-center pt-6">Custome service: +40 123 456 7890</p>
            </div>
            <div class="border-t border-gray-300 p-6 text-center">
                <a class="" href="#">Contact Us</a>
            </div>
            <div class="border-t border-gray-300 p-6 text-center">
                <a class="" href="#">Help/FAQ</a>
            </div>
            <div class="border-t border-gray-300 p-6 text-center">
                <a class="" href="#">Terms and conditions</a>
            </div>
            <div class="border-t border-gray-300 p-6 text-center">
                <a class="" href="#">Privacy policy</a>
            </div>
            <div class="border-t border-gray-300 p-6 text-center">
                <a class="" href="#">Press contacts</a>
            </div>
            <div class="border-t border-gray-300 p-6 flex flex-row items-center text-sm">
                <div class="lang">
                    <a class="font-bold" href="#">EN</a>
                    <span class="mx-1">/</span>
                    <a class="" href="#">DE</a>
                </div>
                <a href="" class="flex items-center">
                    <img class="h-4 ml-8" src="{{ asset('img/world.svg') }}" alt="">
                    <span class="mx-1">other countries</span>
                    <svg class="w-4" viewBox="0 0 20 20"><path d="M17.418 6.109a.697.697 0 01.979 0 .68.68 0 010 .969l-7.908 7.83a.697.697 0 01-.979 0l-7.908-7.83a.68.68 0 010-.969.697.697 0 01.979 0L10 13.25l7.418-7.141z"/></svg>
                </a>
            </div>
            <p class="copyright text-sm text-center px-3 mb-6">Copyright @dress-for-less GmbH 1999-2020</p>
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>