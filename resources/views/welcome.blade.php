{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}--}}
{{--        </style>--}}

{{--        <style>--}}
{{--            body {--}}
{{--                font-family: 'Nunito';--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body class="antialiased">--}}
{{--        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">--}}
{{--                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 text-gray-700 text-lg">--}}
{{--                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">--}}
{{--                        <g clip-path="url(#clip0)" fill="#EF3B2D">--}}
{{--                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>--}}
{{--                        WELCOME!--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                </div>--}}



{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}




    <!DOCTYPE html>
<html class="no-js" lang="ge">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>პროფბიუთი - თმის, კანის, ფრჩხილის და სახის მოვლის საუკეთესო ბრენდების ონლაინ პლატფორმა.</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/bpg-arial-caps.min.css">
    <link rel="stylesheet" href="assets/css/bpg-algeti-compact.min.css">
    <!-- CSS
	============================================ -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body class="homepage-bg1">

<!-- Topbar Section Start -->
<div class="topbar-section section section-fluid">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-md-auto col-12">
                <p class="text-center text-md-left my-2">უფასო მიტანა თბილისის მასშტაბით 60 ₾ შენაძენზე მეტის შემთხვევაში!</p>
            </div>
            <div class="col-auto d-none d-md-block">
                <div class="topbar-menu d-flex flex-row-reverse">
                    <ul class="header-lan-curr">
                        <li><a href="#">ქართული</a>
                            <ul class="curr-lan-sub-menu">
                                <li><a href="#">English</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#"><i class="fa fa-map-marker-alt"></i>მისამართი</a></li>
                        <li><a href="#"><i class="fa fa-truck"></i>მიტანის სერვისი</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->
<!-- Header Section Start -->
<div class="header-section section section-fluid bg-white d-none d-xl-block">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col-auto">
                <div class="header-logo">
                    <a href="index.html"><img src="assets/images/logo/logo-2.png" alt="Learts Logo"></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Search Start -->
            <div class="col-auto mr-auto">
                <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                    <ul>
                        <li class="has-children"><a href="#"><span class="menu-text">თმის მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">თმის ინსტრუმენტები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">თმის ზეთები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">შამპუნები და კონდიციონერები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ნიღბები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">დანარჩენი პროდუქცია</span></a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html"><span class="menu-text">წამწამები</span></a>
                        </li>
                        <li><a href="shop.html"><span class="menu-text">ფეხის მოვლა</span></a>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">კანის მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">საწმენდი საშუალებები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">თვალები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ნიღბები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ამპულები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">დანარჩენი პროდუქცია</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">მაკიაჟი</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">სახის</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">თვალის</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ტუჩის</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ფუნჯები</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">ტანის მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">მზის დამცავები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ყველა</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">ფრჩხილები</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">მანიკური</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">მოვლა</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ხელისა და ფეხის კრემები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ქლიბი</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">პირის ღრუს მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">კბილის პასტა</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">კბილის ჯაგრისი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">კბილის ძაფი</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Search End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login">
                        <a href=""><i class="fal fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-wishlist">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->
        </div>
    </div>
</div>
<!-- Header Section End -->

<!-- Header Sticky Section Start -->
<div class="sticky-header section bg-white section-fluid d-none d-xl-block">
    <div class="container">
        <div class="row align-items-center">
            <!-- Header Logo Start -->
            <div class="col-xl-auto col">
                <div class="header-logo">
                    <a href="index.html"><img src="assets/images/logo/logo-2.png" alt=""></a>
                </div>
            </div>
            <!-- Header Logo End -->
            <!-- Search Start -->
            <div class="col-auto mr-auto d-none d-xl-block">
                <nav class="site-main-menu site-main-menu-left justify-content-center">
                    <ul>
                        <li class="has-children"><a href="#"><span class="menu-text">თმის მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">თმის ინსტრუმენტები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">თმის ზეთები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">შამპუნები და კონდიციონერები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ნიღბები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">დანარჩენი პროდუქცია</span></a></li>
                            </ul>
                        </li>
                        <li><a href="#"><span class="menu-text">წამწამები</span></a>
                        </li>
                        <li><a href="#"><span class="menu-text">ფეხის მოვლა</span></a>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">კანის მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">საწმენდი საშუალებები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">თვალები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ნიღბები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ამპულები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">დანარჩენი პროდუქცია</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">მაკიაჟი</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">სახის</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">თვალის</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ტუჩის</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ფუნჯები</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">ტანის მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">მზის დამცავები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ყველა</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">ფრჩხილები</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">მანიკური</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">მოვლა</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ხელისა და ფეხის კრემები</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">ქლიბი</span></a></li>
                            </ul>
                        </li>
                        <li class="has-children"><a href="#"><span class="menu-text">პირის ღრუს მოვლა</span></a>
                            <ul class="sub-menu">
                                <li><a href="shop.html"><span class="menu-text">კბილის პასტა</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">კბილის ჯაგრისი</span></a></li>
                                <li><a href="shop.html"><span class="menu-text">კბილის ძაფი</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Search End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login d-none d-sm-block">
                        <a href=""><i class="fal fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-wishlist d-none d-sm-block">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                    <div class="mobile-menu-toggle d-xl-none">
                        <a href="#" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>

</div>
<!-- Header Sticky Section End -->
<!-- Mobile Header Section Start -->
<div class="mobile-header bg-white section d-xl-none">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.html"><img src="assets/images/logo/logo-2.png" alt=""></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login d-none d-sm-block">
                        <a href=""><i class="fal fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-wishlist d-none d-sm-block">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>
<!-- Mobile Header Section End -->

<!-- Mobile Header Section Start -->
<div class="mobile-header sticky-header bg-white section d-xl-none">
    <div class="container">
        <div class="row align-items-center">

            <!-- Header Logo Start -->
            <div class="col">
                <div class="header-logo">
                    <a href="index.html"><img src="assets/images/logo/logo-2.png" alt=""></a>
                </div>
            </div>
            <!-- Header Logo End -->

            <!-- Header Tools Start -->
            <div class="col-auto">
                <div class="header-tools justify-content-end">
                    <div class="header-login d-none d-sm-block">
                        <a href=""><i class="fal fa-user"></i></a>
                    </div>
                    <div class="header-search d-none d-sm-block">
                        <a href="#offcanvas-search" class="offcanvas-toggle"><i class="fal fa-search"></i></a>
                    </div>
                    <div class="header-wishlist d-none d-sm-block">
                        <a href="#offcanvas-wishlist" class="offcanvas-toggle"><span class="wishlist-count">3</span><i class="fal fa-heart"></i></a>
                    </div>
                    <div class="header-cart">
                        <a href="#offcanvas-cart" class="offcanvas-toggle"><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
                    </div>
                    <div class="mobile-menu-toggle">
                        <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Header Tools End -->

        </div>
    </div>
</div>
<!-- Mobile Header Section End -->
<!-- OffCanvas Search Start -->
<div id="offcanvas-search" class="offcanvas offcanvas-search">
    <div class="inner">
        <div class="offcanvas-search-form">
            <button class="offcanvas-close">×</button>
            <form action="#">
                <div class="row mb-n3">
                    <div class="col-lg-8 col-12 mb-3"><input type="text" placeholder="ჩაწერეთ პროდუქციის დასახელება..."></div>
                    <div class="col-lg-4 col-12 mb-3">
                        <select class="search-select select2-basic">
                            <option value="0">ყველა კატეგორია</option>
                            <option value="kids-babies">თმის მოვლა</option>
                            <option value="home-decor">წამწამები</option>
                            <option value="gift-ideas">ფეხის მოვლა</option>
                            <option value="kitchen">კანის მოვლა</option>
                            <option value="toys">მაკიაჟი</option>
                            <option value="kniting-sewing">ტანის მოვლა</option>
                            <option value="pots">ფრხილები</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- OffCanvas Search End -->

<!-- OffCanvas Wishlist Start -->
<div id="offcanvas-wishlist" class="offcanvas offcanvas-wishlist">
    <div class="inner">
        <div class="head">
            <span class="title">მოწონებული</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="" class="image"><img src="assets/images/product/cart-product-1.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="" class="title">პროდუქციის დასახელება</a>
                        <span class="quantity-price">1 x <span class="amount">₾100.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="" class="image"><img src="assets/images/product/cart-product-2.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="" class="title">პროდუქციის დასახელება</a>
                        <span class="quantity-price">1 x <span class="amount">₾35.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="" class="image"><img src="assets/images/product/cart-product-3.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="" class="title">პროდუქციის დასახელება</a>
                        <span class="quantity-price">1 x <span class="amount">₾9.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="buttons">
                <a href="" class="btn btn-dark btn-hover-primary">დეტალური გვერდი</a>
            </div>
        </div>
    </div>
</div>
<!-- OffCanvas Wishlist End -->

<!-- OffCanvas Cart Start -->
<div id="offcanvas-cart" class="offcanvas offcanvas-cart">
    <div class="inner">
        <div class="head">
            <span class="title">კალათა</span>
            <button class="offcanvas-close">×</button>
        </div>
        <div class="body customScroll">
            <ul class="minicart-product-list">
                <li>
                    <a href="" class="image"><img src="assets/images/product/cart-product-1.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="" class="title">პროდუქციის დასახელება</a>
                        <span class="quantity-price">1 x <span class="amount">₾100.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="" class="image"><img src="assets/images/product/cart-product-2.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="" class="title">პროდუქციის დასახელება</a>
                        <span class="quantity-price">1 x <span class="amount">₾35.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
                <li>
                    <a href="" class="image"><img src="assets/images/product/cart-product-3.jpg" alt="Cart product Image"></a>
                    <div class="content">
                        <a href="" class="title">პროდუქციის დასახელება</a>
                        <span class="quantity-price">1 x <span class="amount">₾9.00</span></span>
                        <a href="#" class="remove">×</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="foot">
            <div class="sub-total">
                <strong>ჯამში :</strong>
                <span class="amount">₾144.00</span>
            </div>
            <div class="buttons">
                <a href="" class="btn btn-dark btn-hover-primary">კალათაში გადასვლა</a>
                <a href="" class="btn btn-outline-dark">სწრაფი ყიდვა</a>
            </div>
            <p class="minicart-message">უფასო მიტანა თბილისის მასშტაბით 60 ₾ შენაძენზე მეტის შემთხვევაში!</p>
        </div>
    </div>
</div>
<!-- OffCanvas Cart End -->

<!-- OffCanvas Search Start -->
<div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu">
    <div class="inner customScroll">
        <div class="offcanvas-menu-search-form">
            <form action="#">
                <input type="text" placeholder="ძიება...">
                <button><i class="fal fa-search"></i></button>
            </form>
        </div>
        <div class="offcanvas-menu">
            <ul>
                <li class="has-children"><a href="#"><span class="menu-text">თმის მოვლა</span></a>
                    <ul class="sub-menu">
                        <li><a href="shop.html"><span class="menu-text">თმის ინსტრუმენტები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">თმის ზეთები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">შამპუნები და კონდიციონერები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ნიღბები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">დანარჩენი პროდუქცია</span></a></li>
                    </ul>
                </li>
                <li><a href="shop.html"><span class="menu-text">წამწამები</span></a>
                </li>
                <li><a href="shop.html"><span class="menu-text">ფეხის მოვლა</span></a>
                </li>
                <li class="has-children"><a href="#"><span class="menu-text">კანის მოვლა</span></a>
                    <ul class="sub-menu">
                        <li><a href="shop.html"><span class="menu-text">საწმენდი საშუალებები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">თვალები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ნიღბები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ამპულები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">დანარჩენი პროდუქცია</span></a></li>
                    </ul>
                </li>
                <li class="has-children"><a href="#"><span class="menu-text">მაკიაჟი</span></a>
                    <ul class="sub-menu">
                        <li><a href="shop.html"><span class="menu-text">სახის</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">თვალის</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ტუჩის</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ფუნჯები</span></a></li>
                    </ul>
                </li>
                <li class="has-children"><a href="#"><span class="menu-text">ტანის მოვლა</span></a>
                    <ul class="sub-menu">
                        <li><a href="shop.html"><span class="menu-text">მზის დამცავები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">მამაკაცის ხაზი</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ყველა</span></a></li>
                    </ul>
                </li>
                <li class="has-children"><a href="#"><span class="menu-text">ფრჩხილები</span></a>
                    <ul class="sub-menu">
                        <li><a href="shop.html"><span class="menu-text">მანიკური</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">მოვლა</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ხელისა და ფეხის კრემები</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">ქლიბი</span></a></li>
                    </ul>
                </li>
                <li class="has-children"><a href="#"><span class="menu-text">პირის ღრუს მოვლა</span></a>
                    <ul class="sub-menu">
                        <li><a href="shop.html"><span class="menu-text">კბილის პასტა</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">კბილის ჯაგრისი</span></a></li>
                        <li><a href="shop.html"><span class="menu-text">კბილის ძაფი</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="offcanvas-buttons">
            <div class="header-tools">
                <div class="header-login">
                    <a href=""><i class="fal fa-user"></i></a>
                </div>
                <div class="header-wishlist">
                    <a href=""><span>3</span><i class="fal fa-heart"></i></a>
                </div>
                <div class="header-cart">
                    <a href=""><span class="cart-count">3</span><i class="fal fa-shopping-cart"></i></a>
                </div>
            </div>
        </div>
        <div class="offcanvas-social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</div>
<!-- OffCanvas Search End -->

<div class="offcanvas-overlay"></div>

<!-- Slider main container Start -->
<div class="section section-fluid bg-white">
    <div class="container-fluid">
        <div class="home3-slider swiper-container">
            <div class="swiper-wrapper">
                @foreach($sliders as $row)
                    <div class="home3-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="{{ asset('uploads/slider/' . $row->slider_image ) }}">
                        <div class="container">
                            <div class="home3-slide-content">
                                <h5 class="sub-title">Profbeauty</h5>
                                @foreach(explode("<br>",$row->slider_text) as $split)
                                    <h2 class="title">{{ $split }}</h2>
                                @endforeach
                                <div class="link"><a href="{{ $row->slider_url }}" class="btn btn-black btn-hover-primary">სრულად</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="home3-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
            <div class="home3-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
        </div>
    </div>
{{--</div>--}}
<!-- Slider main container End -->

<!-- Category Banner Section Start -->
<div class="section section-fluid learts-pt-30 bg-white">
    <div class="container">
        <div class="row learts-mb-n30">

            <div class="col-xxl-6 col-xl-8 col-12 learts-mb-30">
                <div class="learts-blockquote">
                    <div class="inner">
                        <h2 class="title">რეგისტრაციის შემთხვევაში თქვენ მიიღებთ ვაუჩერს!</h2>
                        <div class="desc">
                            <p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5 საუკუნის მანძილზე შემორჩა.</p>
                        </div>
                        <a href="" class="link">სრულად...</a>
                    </div>
                </div>
            </div>
            @foreach($offers as $row)
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12 learts-mb-30">
                <div class="sale-banner3-1">
                    <div class="image"><img src="{{ asset('uploads/offer/' . $row->offer_image ) }}" alt=""></div>
                    <div class="content">
{{--                        <span class="special-title">20%</span>--}}
                        <h2 class="title">{{ $row->offer_text }}</h2>
                        <a href="{{ $row->offer_url }}" class="link">მინდა</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-xxl-3 col-xl-4 col-md-6 col-12 order-xxl-6 learts-mb-30">
                <div class="instagram-banner1">
                    <div class="inner">
                        <div class="image"><img src="assets/images/banner/instagram-1.jpg" alt=""></div>
                        <div class="content">
                            <div class="icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <span class="sub-title">გამოგვყევით instagram-ზე</span>
                            <h3 class="title"><a href="">@profbeauty_yourbeauty</a></h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </div>
</div>
<!-- Category Banner Section End -->

<!-- Product Section Start -->
<div class="section section-fluid section-padding bg-white">
    <div class="container">

        <!-- Product Tab Start -->
        <div class="row">
            <div class="col-12">
                <ul class="product-tab-list nav">
                    <li><a class="active" data-toggle="tab" href="#tab-new-sale">ახალი დამატებული</a></li>
                    <li><a data-toggle="tab" href="#tab-sale-items">პოპულარული</a></li>
                    <li><a data-toggle="tab" href="#tab-best-sellers">ლიკვიდაცია</a></li>
                </ul>
                <div class="prodyct-tab-content1 tab-content">
                    <div class="tab-pane fade show active" id="tab-new-sale">
                        <!-- Products Start -->
                        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">




                            @foreach($products as $row)
                            <div class="col">
                                <div class="product">
                                    <div class="product-thumb">
                                        <a href="" class="image">
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="onsale">-13%</span>--}}
{{--                                                </span>--}}
                                            <img src="{{ asset('uploads/product/' . $row->image ) }}" alt="Product Image">
                                            <img class="image-hover " src="{{ asset('uploads/product/' . $row->image ) }}" alt="Product Image">
                                        </a>
                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <h6 class="title"><a href="">{{ $row->prod_name }}</a></h6>
                                        <span class="price">
{{--                                                <span class="old">₾45.00</span>--}}
                                            <span class="new">₾{{ number_format($row->prod_price, 2) }}</span>
                                            </span>
                                        <div class="product-buttons">
                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>
                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>
                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach



{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-2.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾35.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                            <span class="product-badges">--}}
{{--                                                <span class="hot">hot</span>--}}
{{--                                            </span>--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-3.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾100.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="onsale">-27%</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-4.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                <span class="old">₾30.00</span>--}}
{{--                                            <span class="new">₾22.00</span>--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-5.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾120.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-6.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾140.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="hot">hot</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-7.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾35.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="outofstock"><i class="fal fa-frown"></i></span>--}}
{{--                                                <span class="hot">hot</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-8.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}

{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾50.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-9.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾100.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-10.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾9.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>
                        <!-- Products End -->
                    </div>
                    <div class="tab-pane fade" id="tab-sale-items">
                        <!-- Products Start -->
{{--                        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="onsale">-27%</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-4.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                <span class="old">₾30.00</span>--}}
{{--                                            <span class="new">₾22.00</span>--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-5.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾120.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-6.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾140.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="hot">hot</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-7.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾35.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="outofstock"><i class="fal fa-frown"></i></span>--}}
{{--                                                <span class="hot">hot</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-8.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾50.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-9.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾100.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-10.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾9.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="onsale">-13%</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-1.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                <span class="old">₾45.00</span>--}}
{{--                                            <span class="new">₾39.00</span>--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-2.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾35.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                            <span class="product-badges">--}}
{{--                                                <span class="hot">hot</span>--}}
{{--                                            </span>--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-3.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾100.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                        <!-- Products End -->
                    </div>
                    <div class="tab-pane fade" id="tab-best-sellers">
                        <!-- Products Start -->
{{--                        <div class="products row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-1">--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-6.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾140.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="hot">hot</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-7.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾35.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="outofstock"><i class="fal fa-frown"></i></span>--}}
{{--                                                <span class="hot">hot</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-8.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾50.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-9.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾100.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-10.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾9.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="onsale">-13%</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-1.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                <span class="old">₾45.00</span>--}}
{{--                                            <span class="new">₾39.00</span>--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-2.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾35.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                            <span class="product-badges">--}}
{{--                                                <span class="hot">hot</span>--}}
{{--                                            </span>--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-3.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾100.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                                <span class="product-badges">--}}
{{--                                                    <span class="onsale">-27%</span>--}}
{{--                                                </span>--}}
{{--                                            <img src="assets/images/product/s328/product-4.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                <span class="old">₾30.00</span>--}}
{{--                                            <span class="new">₾22.00</span>--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col">--}}
{{--                                <div class="product">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="" class="image">--}}
{{--                                            <img src="assets/images/product/s328/product-5.jpg" alt="Product Image">--}}
{{--                                            <img class="image-hover " src="assets/images/product/s328/product-1-hover.jpg" alt="Product Image">--}}
{{--                                        </a>--}}
{{--                                        <a href="" class="add-to-wishlist hintT-left" data-hint="მომწონს"><i class="far fa-heart"></i></a>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-info">--}}
{{--                                        <h6 class="title"><a href="">პროდუქციის დასახელება</a></h6>--}}
{{--                                        <span class="price">--}}
{{--                                                ₾120.00--}}
{{--                                            </span>--}}
{{--                                        <div class="product-buttons">--}}
{{--                                            <a href="#quickViewModal" data-toggle="modal" class="product-button hintT-top" data-hint="სწრაფი ნახვა"><i class="fal fa-search"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="კალათაში"><i class="fal fa-shopping-cart"></i></a>--}}
{{--                                            <a href="#" class="product-button hintT-top" data-hint="შედარება"><i class="fal fa-random"></i></a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                        <!-- Products End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Tab End -->

    </div>
</div>
<!-- Product Section End -->

<!-- Deal of the Day Section Start -->
@foreach($suggestions as $row)
    @if($loop -> first)
<div class="section section-fluid section-padding">
    <div class="container">
        <div class="row align-items-center learts-mb-n30">

            <div class="col-lg-6 col-12 learts-mb-30">
                <div class="product-deal-image text-center">
                    <img src="assets/images/product/deal-product-1.png" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-12 learts-mb-30">
                <div class="product-deal-content">
                    <h2 class="title">{{ $row ->suggestion_title }}</h2>
                    <div class="desc">
                        <p>{{ $row->suggestion_text }}</p>
                    </div>
                    <div class="countdown1" data-countdown="{{ $row->suggestion_deadline }}"></div>
                    <a href="" class="btn btn-dark btn-hover-primary">სრულად</a>
                </div>
            </div>
        </div>
    </div>
</div>
    @endif
@endforeach
<!-- Deal of the Day Section End -->

<!-- Shop By Category Section Start -->
<div class="section section-fluid section-padding bg-white">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title title-icon-both">პოპულარული კატეგორიები</h2>
        </div>
        <!-- Section Title End -->

        <div class="row row-cols-xl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 learts-mb-n40">

            <div class="col learts-mb-40">
                <div class="category-banner5">
                    <a href="" class="inner">
                        <div class="image"><img src="assets/images/banner/category/banner-s5-1.png" alt=""></div>
                        <div class="content">
                            <h3 class="title">კატეგორიის დასახელება</h3>
                            <span class="number">256 პროდუქტი</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col learts-mb-40">
                <div class="category-banner5">
                    <a href="" class="inner">
                        <div class="image"><img src="assets/images/banner/category/banner-s5-2.png" alt=""></div>
                        <div class="content">
                            <h4 class="title">კატეგორიის დასახელება</h4>
                            <span class="number">117 პროდუქტი</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col learts-mb-40">
                <div class="category-banner5">
                    <a href="" class="inner">
                        <div class="image"><img src="assets/images/banner/category/banner-s5-3.png" alt=""></div>
                        <div class="content">
                            <h3 class="title">კატეგორიის დასახელება</h3>
                            <span class="number">65 პროდუქტი</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col learts-mb-40">
                <div class="category-banner5">
                    <a href="" class="inner">
                        <div class="image"><img src="assets/images/banner/category/banner-s5-4.png" alt=""></div>
                        <div class="content">
                            <h3 class="title">კატეგორიის დასახელება</h3>
                            <span class="number">44 პროდუქტი</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col learts-mb-40">
                <div class="category-banner5">
                    <a href="" class="inner">
                        <div class="image"><img src="assets/images/banner/category/banner-s5-5.png" alt=""></div>
                        <div class="content">
                            <h3 class="title">კატეგორიის დასახელება</h3>
                            <span class="number">51 პროდუქტი</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Shop By Category Section End -->

<!-- Shop By Brands Section Start -->
<div class="section section-fluid section-padding bg-white border-top-dashed border-bottom-dashed">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title title-icon-both">ბრენდები</h2>
        </div>
        <!-- Section Title End -->

        <div class="brand-carousel">

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-7.png" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-8.png" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-1.png" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-2.png" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-3.png" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-4.png" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-5.png" alt="Brands Image"></a>
                </div>
            </div>

            <div class="col">
                <div class="brand-item">
                    <a href="#"><img src="assets/images/brands/brand-6.png" alt="Brands Image"></a>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- Shop By Brands Section End -->

<!-- Blog Section Start -->
<div class="section section-fluid section-padding bg-white">
    <div class="container">

        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title title-icon-both">ბლოგი და სიახლეები</h2>
        </div>
        <!-- Section Title End -->

        <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1 learts-mb-n40">

            <div class="col learts-mb-40">
                <div class="blog">
                    <div class="image">
                        <a href=""><img src="assets/images/blog/s370/blog-1.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">ნოე 16, 2020</a></li>
                        </ul>
                        <h5 class="title"><a href="">როგორ მოვუაროთ სახის კანს პანდემიის დროს</a></h5>
                        <div class="desc">
                            <p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო...</p>
                        </div>
                        <a href="" class="link">სრულად</a>
                    </div>
                </div>
            </div>

            <div class="col learts-mb-40">
                <div class="blog">
                    <div class="image">
                        <a href=""><img src="assets/images/blog/s370/blog-2.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">ნოე 10, 2020</a></li>
                        </ul>
                        <h5 class="title"><a href="">რატომ უნდა მივიღოთ დილის შხაპი აუცილებლად უზმოზე?</a></h5>
                        <div class="desc">
                            <p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო...</p>
                        </div>
                        <a href="" class="link">სრულად</a>
                    </div>
                </div>
            </div>

            <div class="col learts-mb-40">
                <div class="blog">
                    <div class="image">
                        <a href=""><img src="assets/images/blog/s370/blog-3.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">ოქტ 22, 2020</a></li>
                        </ul>
                        <h5 class="title"><a href="">სწორი კვება და ეფექტური დიეტები სახლის პირობებში</a></h5>
                        <div class="desc">
                            <p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო...</p>
                        </div>
                        <a href="" class="link">სრულად</a>
                    </div>
                </div>
            </div>

            <div class="col learts-mb-40">
                <div class="blog">
                    <div class="image">
                        <a href=""><img src="assets/images/blog/s370/blog-4.jpg" alt="Blog Image"></a>
                    </div>
                    <div class="content">
                        <ul class="meta">
                            <li><i class="far fa-calendar"></i><a href="#">ოქტომბერი 12, 2020</a></li>
                        </ul>
                        <h5 class="title"><a href="">ლორეალ პარიზის ახალი კოლექცია ჩვენს მაღაზიაში</a></h5>
                        <div class="desc">
                            <p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო...</p>
                        </div>
                        <a href="" class="link">სრულად</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row learts-mt-50">
            <div class="col text-center">
                <a href="" class="btn btn-dark btn-hover-primary">ბლოგში გადასვლა</a>
            </div>
        </div>

    </div>
</div>
<!-- Blog Section End -->

<div class="footer3-section section section-fluid section-padding">
    <div class="container">
        <div class="row learts-mb-n40">

            <div class="col-xl-4 col-lg-5 col-12 learts-mb-40">
                <div class="widget-contact">
                    <p class="email">hello@profbeauty.ge</p>
                    <p class="phone">(+995 0322) 123 456</p>
                    <div class="app-buttons">
                        <a href="#"><img src="assets/images/others/android.png" alt=""></a>
                        <a href="#"><img src="assets/images/others/ios.jpg" alt=""></a>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-7 col-12 learts-mb-40">
                <div class="row row-cols-sm-3 row-cols-1 learts-mb-n40">
                    <div class="col learts-mb-40">
                        <ul class="widget-list">
                            <li><a href="#">წესები და პირობები</a></li>
                            <li><a href="#">კონფიდენციალურობა</a></li>
                            <li><a href="#">პარტნიორებისთვის</a></li>
                            <li><a href="#">ვაკანსიები</a></li>
                        </ul>
                    </div>
                    <div class="col learts-mb-40">
                        <ul class="widget-list">
                            <li><a href="#">ჩვენ შესახებ</a></li>
                            <li><a href="#">ჩვენი მისია</a></li>
                            <li><a href="#">მხარდაჭერა</a></li>
                            <li><a href="#">გადახდის პირობები</a></li>
                        </ul>
                    </div>
                    <div class="col learts-mb-40">
                        <ul class="widget-list">
                            <li> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/">Facebook</a></li>
                            <li> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/">Instagram</a></li>
                            <li> <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-12 learts-mb-40">
                <h5 class="widget-title mb-2">გამოიწერეთ სიახლეები</h5>
                <form id="mc-form" class="mc-form widget-subscibe2">
                    <input id="mc-email" autocomplete="off" type="email" placeholder="ჩაწერეთ თქვენი ელ-ფოსტა">
                    <button id="mc-submit" class="btn">გამოწერა</button>
                </form>
                <!-- mailchimp-alerts Start -->
                <div class="mailchimp-alerts text-centre">
                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                    <div class="mailchimp-success text-success"></div><!-- mailchimp-success end -->
                    <div class="mailchimp-error text-danger"></div><!-- mailchimp-error end -->
                </div><!-- mailchimp-alerts end -->
            </div>

        </div>
    </div>
</div>

<div class="footer3-bottom section section-fluid section-padding pt-0">
    <div class="container">
        <div class="row align-items-end learts-mb-n40">

            <div class="col-md-4 col-12 learts-mb-40 order-md-2">
                <div class="widget-about text-center">
                    <img src="assets/images/logo/logo.png" alt="">
                </div>
            </div>

            <div class="col-md-4 col-12 learts-mb-40 order-md-3">
                <div class="widget-payment text-center text-md-right">
                    <img src="assets/images/others/pay.png" alt="">
                </div>
            </div>

            <div class="col-md-4 col-12 learts-mb-40 order-md-1">
                <div class="widget-copyright">
                    <p class="copyright text-center text-md-left"><a href="https://greencat.agency/">&copy; 2020 Green Cat.</a></p>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal -->
<div class="quickViewModal modal fade" id="quickViewModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button class="close" data-dismiss="modal">&times;</button>
            <div class="row learts-mb-n30">

                <!-- Product Images Start -->
                <div class="col-lg-6 col-12 learts-mb-30">
                    <div class="product-images">
                        <div class="product-gallery-slider-quickview">
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-1.jpg">
                                <img src="assets/images/product/single/1/product-1.jpg" alt="">
                            </div>
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-2.jpg">
                                <img src="assets/images/product/single/1/product-2.jpg" alt="">
                            </div>
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-3.jpg">
                                <img src="assets/images/product/single/1/product-3.jpg" alt="">
                            </div>
                            <div class="product-zoom" data-image="assets/images/product/single/1/product-zoom-4.jpg">
                                <img src="assets/images/product/single/1/product-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Images End -->

                <!-- Product Summery Start -->
                <div class="col-lg-6 col-12 overflow-hidden learts-mb-30">
                    <div class="product-summery customScroll">
                        <h3 class="product-title">პროდუქციის დასახელება</h3>
                        <div class="product-price">₾38.00</div>
                        <div class="product-description">
                            <p>საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა, როდესაც უცნობმა მბეჭდავმა ამწყობ დაზგაზე წიგნის საცდელი ეგზემპლარი დაბეჭდა. მისი ტექსტი არამარტო 5 საუკუნის მანძილზე შემორჩა, არამედ მან დღემდე, ელექტრონული ტიპოგრაფიის დრომდეც უცვლელად მოაღწია. განსაკუთრებული პოპულარობა მას 1960-იან წლებში გამოსულმა</p>
                        </div>
                        <div class="product-buttons">
                            <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fal fa-heart"></i></a>
                            <a href="#" class="btn btn-dark btn-outline-hover-dark"><i class="fal fa-shopping-cart"></i> კალათაში</a>
                            <a href="#" class="btn btn-icon btn-outline-body btn-hover-dark"><i class="fal fa-random"></i></a>
                        </div>
                        <div class="product-meta mb-0">
                            <table>
                                <tbody>
                                <tr>
                                    <td class="label"><span>ID</span></td>
                                    <td class="value">0404019</td>
                                </tr>
                                <tr>
                                    <td class="label"><span>კატეგჰორია</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a href="#">კანის მოვლა</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>ბრენდი</span></td>
                                    <td class="value">
                                        <ul class="product-category">
                                            <li><a href="#">Loreal Paris</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>ტეგები</span></td>
                                    <td class="value">
                                        <ul class="product-tags">
                                            <li><a href="#">კანი</a></li>
                                            <li><a href="#">კრემი</a></li>
                                            <li><a href="#">სახე</a></li>
                                            <li><a href="#">მშრალი</a></li>
                                            <li><a href="#">მაკიაჟი</a></li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label"><span>გაიზიარეთ</span></td>
                                    <td class="va">
                                        <div class="product-share">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fal fa-envelope"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Product Summery End -->

            </div>
        </div>
    </div>
</div>

<!-- JS
============================================ -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>

<!-- Main Activation JS -->
<script src="assets/js/main.js"></script>

</body>
</html>
