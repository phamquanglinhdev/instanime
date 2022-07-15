<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/instellohtml/feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 09:10:44 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{asset("assets/images/favicon.png")}}}" rel="icon" type="image/png">

    <!-- Basic Page Needs
        ================================================== -->
    <title>Instello Sharing Photos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Instello - Sharing Photos platform HTML Template">

    <!-- icons
        ================================================== -->
    <link rel="stylesheet" href="{{asset("assets/css/icons.css")}}">

    <!-- CSS
        ================================================== -->
    <link rel="stylesheet" href="{{asset("assets/css/uikit.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/tailwind.css")}}">

</head>

<body>
<div id="wrapper" class="flex flex-col justify-between h-screen">

    <!-- header-->
    <div class="bg-white py-4 shadow dark:bg-gray-800">
        <div class="max-w-6xl mx-auto">


            <div class="flex items-center lg:justify-between justify-around">

                <a href="#">
                    <img src="{{asset("assets/images/logo.png")}}" alt="" class="w-32">
                </a>

                <div class="capitalize flex font-semibold hidden lg:block my-2 space-x-3 text-center text-sm">
                    <a href="#" class="py-3 px-4">Đăng nhập</a>
                    <a href="#" class="bg-pink-500 pink-500 px-6 py-3 rounded-md shadow text-white">Đăng kí</a>
                </div>

            </div>
        </div>
    </div>

    <!-- Content-->
    @yield("content")

    <!-- Footer -->

    <div class="lg:mb-5 py-3 uk-link-reset">
        <div class="flex flex-col items-center justify-between lg:flex-row max-w-6xl mx-auto lg:space-y-0 space-y-3">
            <div class="flex space-x-2 text-gray-700 uppercase">
                <a href="#"> About</a>
                <a href="#"> Help</a>
                <a href="#"> Terms</a>
                <a href="#"> Privacy</a>
            </div>
            <p class="capitalize"> © copyright 2020 by Instello</p>
        </div>
    </div>

</div>



<!-- Story modal -->
<div id="story-modal" class="uk-modal-container" uk-modal>
    <div class="uk-modal-dialog story-modal">
        <button
            class="uk-modal-close-default lg:-mt-9 lg:-mr-9 -mt-5 -mr-5 shadow-lg bg-white rounded-full p-4 transition dark:bg-gray-600 dark:text-white"
            type="button" uk-close></button>

        <div class="story-modal-media">
            <img src="{{asset("assets/images/post/img4.jpg")}}" alt="" class="inset-0 h-full w-full object-cover">
        </div>
        <div class="flex-1 bg-white dark:bg-gray-900 dark:text-gray-100">

            <!-- post header-->
            <div class="border-b flex items-center justify-between px-5 py-3 dark:border-gray-600">
                <div class="flex flex-1 items-center space-x-4">
                    <a href="#">
                        <div class="bg-gradient-to-tr from-yellow-600 to-pink-600 p-0.5 rounded-full">
                            <img src="{{asset("assets/images/avatars/avatar-2.jpg")}}"
                                 class="bg-gray-200 border border-white rounded-full w-8 h-8">
                        </div>
                    </a>
                    <span class="block text-lg font-semibold"> Johnson smith </span>
                </div>
                <a href="#">
                    <i class="icon-feather-more-horizontal text-2xl rounded-full p-2 transition -mr-1"></i>
                </a>
            </div>
            <div class="story-content p-4" data-simplebar>

                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam erat volutpat. </p>

                <div class="py-4 ">
                    <div class="flex justify-around">
                        <a href="#" class="flex items-center space-x-3">
                            <div class="flex font-bold items-baseline"><i class="uil-heart mr-1"> </i> Like</div>
                        </a>
                        <a href="#" class="flex items-center space-x-3">
                            <div class="flex font-bold items-baseline"><i class="uil-heart mr-1"> </i> Comment</div>
                        </a>
                        <a href="#" class="flex items-center space-x-3">
                            <div class="flex font-bold items-baseline"><i class="uil-heart mr-1"> </i> Share</div>
                        </a>
                    </div>
                    <hr class="-mx-4 my-3">
                    <div class="flex items-center space-x-3">
                        <div class="flex items-center">
                            <img src="{{asset("assets/images/avatars/avatar-1.jpg")}}" alt=""
                                 class="w-6 h-6 rounded-full border-2 border-white">
                            <img src="{{asset("assets/images/avatars/avatar-4.jpg")}}" alt=""
                                 class="w-6 h-6 rounded-full border-2 border-white -ml-2">
                            <img src="{{asset("assets/images/avatars/avatar-2.jpg")}}" alt=""
                                 class="w-6 h-6 rounded-full border-2 border-white -ml-2">
                        </div>
                        <div>
                            Liked <strong> Johnson</strong> and <strong> 209 Others </strong>
                        </div>
                    </div>
                </div>

                <div class="-mt-1 space-y-1">
                    <div class="flex flex-1 items-center space-x-2">
                        <img src="{{asset("assets/images/avatars/avatar-2.jpg")}}" class="rounded-full w-8 h-8">
                        <div class="flex-1 p-2">
                            consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        </div>
                    </div>

                    <div class="flex flex-1 items-center space-x-2">
                        <img src="{{asset("assets/images/avatars/avatar-4.jpg")}}" class="rounded-full w-8 h-8">
                        <div class="flex-1 p-2">
                            consectetuer adipiscing elit
                        </div>
                    </div>

                </div>


            </div>
            <div class="p-3 border-t dark:border-gray-600">
                <div class="bg-gray-200 dark:bg-gray-700 rounded-full rounded-md relative">
                    <input type="text" placeholder="Add your Comment.." class="bg-transparent max-h-8 shadow-none">
                    <div class="absolute bottom-0 flex h-full items-center right-0 right-3 text-xl space-x-2">
                        <a href="#"> <i class="uil-image"></i></a>
                        <a href="#"> <i class="uil-video"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<script>

    (function (window, document, undefined) {
        'use strict';
        if (!('localStorage' in window)) return;
        var nightMode = localStorage.getItem('gmtNightMode');
        if (nightMode) {
            document.documentElement.className += ' dark';
        }
    })(window, document);


    (function (window, document, undefined) {

        'use strict';

        // Feature test
        if (!('localStorage' in window)) return;

        // Get our newly insert toggle
        var nightMode = document.querySelector('#night-mode');
        if (!nightMode) return;

        // When clicked, toggle night mode on or off
        nightMode.addEventListener('click', function (event) {
            event.preventDefault();
            document.documentElement.classList.toggle('dark');
            if (document.documentElement.classList.contains('dark')) {
                localStorage.setItem('gmtNightMode', true);
                return;
            }
            localStorage.removeItem('gmtNightMode');
        }, false);

    })(window, document);
</script>

<!-- Scripts
   ================================================== -->
<script src="{{asset("assets/js/tippy.all.min.js")}}"></script>
<script src="{{asset("assets/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("assets/js/uikit.js")}}"></script>
<script src="{{asset("assets/js/simplebar.js")}}"></script>
<script src="{{asset("assets/js/custom.js")}}"></script>


<script src="{{asset("assets/ionicons/dist/ionicons.js")}}"></script>
@yield("script")
</body>


<!-- Mirrored from demo.foxthemes.net/instellohtml/feed.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 09:11:41 GMT -->
</html>
