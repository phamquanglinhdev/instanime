@extends("layouts.client")
@section("content")
    <div class="container m-auto">

        <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight mb-2"> Market </h1>

        <div class="lg:m-0 -mx-5 flex justify-between py-4 relative space-x-3 uk-sticky dark-tabs" uk-sticky="cls-active: bg-gray-100 bg-opacity-95" style="">
            <div class="flex overflow-x-scroll lg:overflow-hidden lg:pl-0 pl-5 space-x-3">
                <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Shop</a>
                <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> headphones  </a>
                <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Parfums </a>
                <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Fruits </a>
                <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Mobiles  </a>
                <a href="#" class="bg-white py-2 px-4 rounded inline-block font-bold shadow"> Laptops </a>
            </div>
            <a href="#"  uk-toggle="target: #offcanvas-create" class="bg-pink-500 hover:bg-pink-600 hover:text-white flex font-bold inline-block items-center px-4 py-2 rounded shadow text-white lg:block hidden"> <i class="-mb-1 mr-1 uil-plus"></i> Create</a>
        </div>

        <div class="relative mt-4" uk-slider="finite: true">

            <div class="uk-slider-container pb-3">

                <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">

                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media"> <img src="assets/images/product/1.jpg" alt=""></div>

                                <div class="item-inner">
                                    <div class="item-price"> 20$ </div>
                                    <div class="item-title"> Brown headphones </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">4</span> likes </span>
                                        <span> <span class="count">106</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media"> <img src="assets/images/product/13.jpg" alt=""></div>

                                <div class="item-inner">
                                    <div class="item-price"> 12$ </div>
                                    <div class="item-title"> Parfum Spray </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">2</span> likes </span>
                                        <span> <span class="count">286</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media"> <img src="assets/images/product/2.jpg" alt=""></div>

                                <div class="item-inner">
                                    <div class="item-price"> 23$ </div>
                                    <div class="item-title"> Wireless headphones </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">16</span> likes </span>
                                        <span> <span class="count">202</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media"> <img src="assets/images/product/16.jpg" alt=""></div>

                                <div class="item-inner">
                                    <div class="item-price"> 60$ </div>
                                    <div class="item-title"> Paper Coffee Cup </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">12</span> likes </span>
                                        <span> <span class="count">160</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media"> <img src="assets/images/product/17.jpg" alt=""></div>

                                <div class="item-inner">
                                    <div class="item-price"> 30$ </div>
                                    <div class="item-title"> Sed diam nonummy</div>
                                    <div class="item-statistic">
                                        <span> <span class="count">9</span> likes </span>
                                        <span> <span class="count">136</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media"> <img src="assets/images/product/15.jpg" alt=""></div>

                                <div class="item-inner">
                                    <div class="item-price"> 10$ </div>
                                    <div class="item-title"> Herbal Shampoo </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">2</span> likes </span>
                                        <span> <span class="count">286</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <a class="-left-5 absolute bg-white bottom-1/2 flex h-11 items-center justify-center mb-8 p-2 rounded-full shadow text-2xl w-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i> </a>
                <a class="-right-5 absolute bg-white bottom-1/2 flex h-11 items-center justify-center mb-8 p-2 rounded-full shadow text-2xl w-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>

        </div>

        <div class="flex justify-between mt-6 mb-4">
            <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight"> Categories </h1>
            <a href="#" class="text-blue-400 hover:text-blue-500"> See all</a>
        </div>

        <div class="relative" uk-slider="finite: true">

            <div class="uk-slider-container pb-3">

                <ul
                    class="uk-slider-items uk-child-width-1-6@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">

                    <li>

                        <a href="#">
                            <div class="group-catagroy-card" data-src="assets/images/product/11.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Shoes </h4>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div class="group-catagroy-card" data-src="assets/images/product/1.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> headphones </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card" data-src="assets/images/product/7.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Fruits </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card" data-src="assets/images/product/4.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Mobiles </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card" data-src="assets/images/product/13.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Parfums </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card" data-src="assets/images/product/15.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Oils </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                    <li>

                        <a href="#">
                            <div class="group-catagroy-card" data-src="assets/images/product/3.jpg" uk-img>
                                <div class="group-catagroy-card-content">
                                    <h4> Laptops </h4>
                                </div>
                            </div>
                        </a>

                    </li>
                </ul>

                <a class="-left-5 absolute bg-white bottom-1/2 flex h-11 items-center justify-center -mb-3 p-2 rounded-full shadow text-2xl w-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i> </a>
                <a class="-right-5 absolute bg-white bottom-1/2 flex h-11 items-center justify-center -mb-3 p-2 rounded-full shadow text-2xl w-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>
        </div>

        <hr class="my-3 my-sm-2">

        <div class="flex justify-between mt-6 mb-4">
            <h1 class="lg:text-2xl text-lg font-extrabold leading-none text-gray-900 tracking-tight">  Brand Collection </h1>
            <a href="#" class="text-blue-400 hover:text-blue-500"> See all</a>
        </div>

        <div class="relative" uk-slider="finite: true">

            <div class="uk-slider-container pb-3">

                <ul class="uk-slider-items uk-child-width-1-5@m uk-child-width-1-3@s uk-child-width-1-2 uk-grid-small uk-grid">

                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media">
                                    <img src="assets/images/product/12.jpg" alt="">
                                </div>
                                <div class="item-inner">
                                    <div class="item-price"> 20$ </div>
                                    <div class="item-title"> Hermes Rivera </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">24</span> likes </span>
                                        <span> <span class="count">286</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media">
                                    <img src="assets/images/product/15.jpg" alt="">
                                </div>
                                <div class="item-inner">
                                    <div class="item-price"> 17$ </div>
                                    <div class="item-title"> Herbal Shampoo </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">7</span> likes </span>
                                        <span> <span class="count">286</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media">
                                    <img src="assets/images/product/4.jpg" alt="">
                                </div>
                                <div class="item-inner">
                                    <div class="item-price"> 22$ </div>
                                    <div class="item-title"> iPhone 7 unboxing </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">12</span> likes </span>
                                        <span> <span class="count">386</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media">
                                    <img src="assets/images/product/14.jpg" alt="">
                                </div>
                                <div class="item-inner">
                                    <div class="item-price"> 20$ </div>
                                    <div class="item-title"> Wood Chair </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">2</span> likes </span>
                                        <span> <span class="count">286</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media">
                                    <img src="assets/images/product/11.jpg" alt="">
                                </div>
                                <div class="item-inner">
                                    <div class="item-price"> 42$ </div>
                                    <div class="item-title"> Hermes Rivera</div>
                                    <div class="item-statistic">
                                        <span> <span class="count">2</span> likes </span>
                                        <span> <span class="count">286</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" uk-toggle="target: #offcanvas-preview">
                            <div class="market-list">
                                <div class="item-media">
                                    <img src="assets/images/product/9.jpg" alt="">
                                </div>
                                <div class="item-inner">
                                    <div class="item-price"> 20$ </div>
                                    <div class="item-title"> Strawberries FreshRipe </div>
                                    <div class="item-statistic">
                                        <span> <span class="count">2</span> likes </span>
                                        <span> <span class="count">286</span> views </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <a class="-left-5 absolute bg-white bottom-1/2 flex h-11 items-center justify-center mb-8 p-2 rounded-full shadow text-2xl w-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="previous"> <i class="icon-feather-chevron-left"></i> </a>
                <a class="-right-5 absolute bg-white bottom-1/2 flex h-11 items-center justify-center mb-8 p-2 rounded-full shadow text-2xl w-11 z-10 dark:bg-gray-800 dark:text-white" href="#" uk-slider-item="next"> <i class="icon-feather-chevron-right"></i></a>

            </div>

        </div>

    </div>
@endsection
