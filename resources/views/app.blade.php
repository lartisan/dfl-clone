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
        @stack('styles')

        <!-- Alpine JS -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="flex flex-col max-w-screen-xl mx-auto items-center">
        @include ('partials.header')

        <main class="mb-auto flex flex-col items-center p-3 lg:p-0 lg:px-3">
            <section class="hero lg:w-full">
                <img class="md:hidden" src="{{ asset('img/hero.jpg') }}" alt="" srcset="">
                <img class="hidden md:block lg:w-full" src="{{ asset('img/hero-md.jpg') }}" alt="" srcset="">
            </section>

            <section class="categories md:hidden my-3 grid grid-cols-2 gap-3">
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

            <section class="top-sellers lg:w-full my-3 flex flex-col items-center">
                <h1 class="my-4 text-2xl font-extrabold">Topseller</h1>

                <div class="top-sellers-carousel flex flex-row items-top">
                    <div class="left-arrow w-1/8 mt-20 md:mt-40 mr-1">
                        <svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.891 17.418a.697.697 0 010 .979.68.68 0 01-.969 0l-7.83-7.908a.697.697 0 010-.979l7.83-7.908a.68.68 0 01.969 0 .697.697 0 010 .979L6.75 10l7.141 7.418z"/></svg>
                    </div>
                    <div class="product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-1.jpg') }}" alt="" srcset="">
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
                    <div class="product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-2.jpg') }}" alt="" srcset="">
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
                    <div class="hidden md:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-3.jpg') }}" alt="" srcset="">
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
                    <div class="hidden lg:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-4.jpg') }}" alt="" srcset="">
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
                    <div class="hidden lg:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-5.jpg') }}" alt="" srcset="">
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
                    <div class="hidden xl:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-5.jpg') }}" alt="" srcset="">
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
                    <div class="right-arrow w-1/8 mt-20 md:mt-40 ml-1">
                        <svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/></svg>
                    </div>
                </div>
            </section>

            <section class="new-arrivals w-full my-3 flex flex-col">
                <img class="mb-5 md:hidden" src="{{ asset('img/new-arrivals.jpg') }}" alt="">
                <img class="mb-5 hidden md:block" src="{{ asset('img/new-arrivals-md.jpg') }}" alt="">

                <div class="new-arrivals-items w-full flex flex-col md:flex-row md:items-center md:space-x-4">
                    <div class="mb-3" ><img src="{{ asset('img/TommyHilfiger.jpg') }}" alt=""></div>
                    <div class="mb-3" ><img src="{{ asset('img/our-promise.jpg') }}" alt=""></div>
                    <div class="mb-3" ><img src="{{ asset('img/dresses-trousers.jpg') }}" alt=""></div>
                </div>
            </section>

            <section class="new-arrivals my-3 flex flex-col items-center">
                <h1 class="my-4 text-2xl font-extrabold">New Arrivals</h1>

                <div class="new-arrivals-carousel flex flex-row items-top">
                    <div class="left-arrow w-1/8 mt-20 md:mt-40 mr-1">
                        <svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.891 17.418a.697.697 0 010 .979.68.68 0 01-.969 0l-7.83-7.908a.697.697 0 010-.979l7.83-7.908a.68.68 0 01.969 0 .697.697 0 010 .979L6.75 10l7.141 7.418z"/></svg>
                    </div>
                    <div class="product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/new-arrival-1.jpg') }}" alt="" srcset="">
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
                    <div class="product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/new-arrival-2.jpg') }}" alt="" srcset="">
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
                    <div class="hidden md:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/new-arrival-3.jpg') }}" alt="" srcset="">
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
                    <div class="hidden lg:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-4.jpg') }}" alt="" srcset="">
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
                    <div class="hidden lg:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-5.jpg') }}" alt="" srcset="">
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
                    <div class="hidden xl:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-5.jpg') }}" alt="" srcset="">
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
                    <div class="right-arrow w-1/8 mt-20 md:mt-40 ml-1">
                        <svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/></svg>
                    </div>
                </div>
            </section>

            <section class="our-recommendations my-3 flex flex-col items-center">
                <h1 class="my-4 text-2xl font-extrabold">Our Recommendations</h1>

                <div class="our-recommendations-carousel flex flex-row items-top">
                    <div class="left-arrow w-1/8 mt-20 md:mt-40 mr-1">
                        <svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.891 17.418a.697.697 0 010 .979.68.68 0 01-.969 0l-7.83-7.908a.697.697 0 010-.979l7.83-7.908a.68.68 0 01.969 0 .697.697 0 010 .979L6.75 10l7.141 7.418z"/></svg>
                    </div>
                    <div class="product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/recommended-1.jpg') }}" alt="" srcset="">
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
                    <div class="product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/recommended-2.jpg') }}" alt="" srcset="">
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
                    <div class="hidden md:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/recommended-3.jpg') }}" alt="" srcset="">
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
                    <div class="hidden lg:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-4.jpg') }}" alt="" srcset="">
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
                    <div class="hidden lg:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-5.jpg') }}" alt="" srcset="">
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
                    <div class="hidden xl:block product-card flex-grow w-3/8 md:w-1/4">
                        <div class="product-image relative">
                            <img class="absolute top-0 left-0 w-12 mt-2 shadow-xs" src="{{ asset('img/hangtag.png') }}" alt="">
                            <img class="" src="{{ asset('img/top-seller-5.jpg') }}" alt="" srcset="">
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
                    <div class="right-arrow w-1/8 mt-20 md:mt-40 ml-1">
                        <svg class="w-6 fill-current text-gray-700" viewBox="0 0 20 20"><path d="M13.25 10L6.109 2.58a.697.697 0 010-.979.68.68 0 01.969 0l7.83 7.908a.697.697 0 010 .979l-7.83 7.908a.68.68 0 01-.969 0 .697.697 0 010-.979L13.25 10z"/></svg>
                    </div>
                </div>
            </section>

            <section class="newsletter my-3 py-12 bg-gray-200 flex flex-col items-center justify-center align-middle">
                <p class="text-xl text-center px-6 md:mb-6">
                    <span>Subscribe to out newsletter now and </span>
                    <span class="font-bold">get 10% off</span>
                </p>

                <form action="" class="flex flex-col md:flex-row px-4 md:my-6">
                    <input class="mx-4 md:mx-1 my-8 md:my-0 px-4 py-2" type="text" placeholder="e-mail address">
                    <div class="buttons flex md:flex-row justify-evenly md:justify-between">
                        <button class="bg-black text-white text-sm mx-1 px-6 py-2">For women</button>
                        <button class="bg-black text-white text-sm mx-1 px-6 py-2">For men</button>
                    </div>
                </form>
                
                <p class="text-center text-sm mt-6">
                    <span class="font-bold">Learn about fashion trends, offers &amp; vouchers!</span>
                    <br> Unsubscription at any time and with effect for the future, e.g. by e-mail to <a href="" class="underline">service@dress-for-less.row</a> or by clicking on the unsubscription link in the newsletter.
                </p>
            </section>
        </main>

        <footer class="w-full flex flex-col mt-12 px-3">
            <div class="payment-icons border-t border-gray-300 p-4">
                <div class="flex flex-row items-center justify-center space-x-4">
                    <p class="hidden md:inline-block text-sm">Pay easy with:</p>
                    <img class="h-8" src="{{ asset('img/visa.svg') }}" alt="">
                    <img class="h-8" src="{{ asset('img/mastercard.svg') }}" alt="">
                    <img class="h-8" src="{{ asset('img/amex.svg') }}" alt="">
                    <img class="h-8" src="{{ asset('img/paypal.svg') }}" alt="">
                </div>
                <p class="text-sm text-center pt-6 md:hidden">Custome service: +40 123 456 7890</p>
            </div>

            <div class="md:px-6 flex flex-row justify-between">
                <div class="company hidden md:block flex flex-col md:w-1/4 space-y-2">
                    <div class="footer-title hidden md:block mb-6">
                        <p class="font-bold">Company</p>
                    </div>
                    <div><a class="" href="#">About dress-for-less</a></div>
                    <div><a class="" href="#">Affilate program</a></div>
                </div>

                <div class="service w-full md:w-auto flex flex-col md:w-1/4 md:space-y-2">
                    <div class="footer-title hidden md:block mb-4">
                        <p class="font-bold">Service</p>
                    </div>
                    <div class="border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Contact Us</a>
                    </div>
                    <div class="border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Help/FAQ</a>
                    </div>
                    <div class="md:hidden border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Terms and conditions</a>
                    </div>
                    <div class="md:hidden border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Privacy policy</a>
                    </div>
                    <div class="md:hidden border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Press contacts</a>
                    </div>
                    <div class="hidden md:block border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Delivery</a>
                    </div>
                    <div class="hidden md:block border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Returns</a>
                    </div>
                    <div class="hidden md:block border-t md:border-0 border-gray-300 p-4 md:p-0 text-center md:text-left">
                        <a class="" href="#">Newsletter</a>
                    </div>
                </div>

                <div class="legal hidden md:block flex flex-col md:w-1/4 space-y-2">
                    <div class="footer-title hidden md:block mb-6">
                        <p class="font-bold">Legal notice</p>
                    </div>
                    <div><a class="" href="#">Terms and conditions</a></div>
                    <div><a class="" href="#">Privacy policy</a></div>
                    <div><a class="" href="#">Press contacts</a></div>
                </div>

                <div class="benefits hidden md:block flex flex-col md:w-1/4">
                    <div class="footer-title hidden md:block mb-6">
                        <p class="font-bold">Benefits</p>
                    </div>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <svg class="w-1/12 mt-1 mr-1" viewBox="0 0 20 20"><path d="M8.294 16.998c-.435 0-.847-.203-1.111-.553L3.61 11.724a1.392 1.392 0 01.27-1.951 1.392 1.392 0 011.953.27l2.351 3.104 5.911-9.492a1.396 1.396 0 011.921-.445c.653.406.854 1.266.446 1.92L9.478 16.34a1.39 1.39 0 01-1.12.656c-.022.002-.042.002-.064.002z"/></svg>
                            <a class="w-11/12" href="#">Top designer brands up to 70% off</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-1/12 mt-1 mr-1" viewBox="0 0 20 20"><path d="M8.294 16.998c-.435 0-.847-.203-1.111-.553L3.61 11.724a1.392 1.392 0 01.27-1.951 1.392 1.392 0 011.953.27l2.351 3.104 5.911-9.492a1.396 1.396 0 011.921-.445c.653.406.854 1.266.446 1.92L9.478 16.34a1.39 1.39 0 01-1.12.656c-.022.002-.042.002-.064.002z"/></svg>
                            <a class="w-11/12" href="#">More than 350 brands online</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-1/12 mt-1 mr-1" viewBox="0 0 20 20"><path d="M8.294 16.998c-.435 0-.847-.203-1.111-.553L3.61 11.724a1.392 1.392 0 01.27-1.951 1.392 1.392 0 011.953.27l2.351 3.104 5.911-9.492a1.396 1.396 0 011.921-.445c.653.406.854 1.266.446 1.92L9.478 16.34a1.39 1.39 0 01-1.12.656c-.022.002-.042.002-.064.002z"/></svg>
                            <a class="w-11/12" href="#">Item immediately available</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-1/12 mt-1 mr-1" viewBox="0 0 20 20"><path d="M8.294 16.998c-.435 0-.847-.203-1.111-.553L3.61 11.724a1.392 1.392 0 01.27-1.951 1.392 1.392 0 011.953.27l2.351 3.104 5.911-9.492a1.396 1.396 0 011.921-.445c.653.406.854 1.266.446 1.92L9.478 16.34a1.39 1.39 0 01-1.12.656c-.022.002-.042.002-.064.002z"/></svg>
                            <a class="w-11/12" href="#">Fast delivery</a>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-1/12 mt-1 mr-1" viewBox="0 0 20 20"><path d="M8.294 16.998c-.435 0-.847-.203-1.111-.553L3.61 11.724a1.392 1.392 0 01.27-1.951 1.392 1.392 0 011.953.27l2.351 3.104 5.911-9.492a1.396 1.396 0 011.921-.445c.653.406.854 1.266.446 1.92L9.478 16.34a1.39 1.39 0 01-1.12.656c-.022.002-.042.002-.064.002z"/></svg>
                            <a class="w-11/12" href="#">20 years on online know-how</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-300 p-4 text-sm flex flex-wrap md:flex-no-wrap md:flex-row items-center md:justify-between md:space-x-2">
                <div class="lang md:w-1/3">
                    <a class="font-bold" href="#">EN</a>
                    <span class="mx-1">/</span>
                    <a class="" href="#">DE</a>
                </div>
                <a href="" class="flex items-center md:hidden">
                    <img class="h-4 ml-8" src="{{ asset('img/world.svg') }}" alt="">
                    <span class="mx-1">other countries</span>
                    <svg class="w-4" viewBox="0 0 20 20"><path d="M17.418 6.109a.697.697 0 01.979 0 .68.68 0 010 .969l-7.908 7.83a.697.697 0 01-.979 0l-7.908-7.83a.68.68 0 010-.969.697.697 0 01.979 0L10 13.25l7.418-7.141z"/></svg>
                </a>
                <p class="text-sm text-center hidden md:block md:w-1/3">Custome service: +40 123 456 7890</p>
                <p class="copyright text-xs text-center md:text-left px-3 mt-2 mb-6 md:m-0 md:w-1/3">Copyright @dress-for-less GmbH 1999-2020</p>
            </div>
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>
        @stack('scripts')
    </body>
    </html>