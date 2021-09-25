@extends('clients.master')
@section('title')
    About-Us
@endsection
@section('custom_css')
    <style>
        body {
            background-color: #eff7fa;
        }
        img {
            height: auto;
            max-width: 100%;
        }
        ul, ol {
            list-style: outside none none;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        img {
            transform-style: preserve-3d;
        }
        a {
            text-decoration:none !important;
            color:#888;
        }
        a:hover {
            color:#333;
        }
        a, a:hover {
            text-decoration: none;
        }
        a:focus {
            outline: medium none;
            outline-offset: 0;
        }
        .border-none {
            border: medium none !important;
        }
        .section-padding {
            padding-bottom: 40px;
            margin-top: 100px ;
        }
        .margin-auto {
            margin: auto;
        }
        .dataTables_wrapper.container-fluid.dt-bootstrap4.no-footer {
            margin-top: 15px;
            padding: 0;
        }
        .help-block li {
            color: red;
        }
        .bg-success {
            background: #23bd5b none repeat scroll 0 0 !important;
        }
        .pmb-3 {
            margin-bottom: 30px !important;
        }
        .page-link{
            color: #0cc5b7;
        }
        .page-item.active .page-link{
            border-color: transparent !important;
            background: #0cc5b7; /* Old browsers */
            background: -moz-linear-gradient(-45deg, #0cc5b7 0%, #2bd891 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, #0cc5b7 0%,#2bd891 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, #0cc5b7 0%,#2bd891 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0cc5b7', endColorstr='#2bd891',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }
        .bg-dark {

            background: #0cc5b7; /* Old browsers */
            background: -moz-linear-gradient(-45deg, #0cc5b7 0%, #2bd891 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, #0cc5b7 0%,#2bd891 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, #0cc5b7 0%,#2bd891 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0cc5b7', endColorstr='#2bd891',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }
        .btn-secondary {
            background: #ff934b; /* Old browsers */
            background: -moz-linear-gradient(-45deg, #ff934b 0%, #ff5e62 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, #ff934b 0%,#ff5e62 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, #ff934b 0%,#ff5e62 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff934b', endColorstr='#ff5e62',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
        }
        .text-secondary{
            color:#0cc5b7 !important;
        }
        .bg-success, .btn-success, .btn-outline-success:hover, .badge-success {
            border-color: transparent !important;
            background: #4eda92;
            /* Old browsers */
            background: -moz-linear-gradient(-45deg, #4eda92 1%, #56e0cb 100%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, #4eda92 1%,#56e0cb 100%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, #4eda92 1%,#56e0cb 100%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4eda92', endColorstr='#56e0cb',GradientType=1 );
            /* IE6-9 fallback on horizontal gradient */
        }
        .btn-outline-success{
            border-color: #4eda92;
            color: #4eda92;
        }
        .text-success{
            color: #4eda92 !important;
        }
        .bg-danger, .btn-danger, .btn-outline-danger:hover, .badge-danger{
            border-color: transparent !important;
            background: #ff253a;
            /* Old browsers */
            background: -moz-linear-gradient(-45deg, #ff253a 0%, #ff8453 100%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, #ff253a 0%,#ff8453 100%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, #ff253a 0%,#ff8453 100%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff253a', endColorstr='#ff8453',GradientType=1 );
            /* IE6-9 fallback on horizontal gradient */
        }
        .btn-outline-danger{
            border-color: #ff253a;
            color: #ff253a;
        }
        .text-danger{
            color: #ff253a !important;
        }
        .bg-info, .btn-info, .btn-outline-info:hover, .badge-info{
            border-color: transparent !important;
            background: #17a2b8;
            /* Old browsers */
            background: -moz-linear-gradient(-45deg, #17a2b8 1%, #30def9 100%);
            /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg, #17a2b8 1%,#30def9 100%);
            /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg, #17a2b8 1%,#30def9 100%);
            /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#17a2b8', endColorstr='#30def9',GradientType=1 );
            /* IE6-9 fallback on horizontal gradient */
        }
        .btn-outline-info{
            border-color: #17a2b8;
            color: #17a2b8;
        }
        .text-info{
            color: #17a2b8 !important;
        }
        .badge {
            border-radius: 2px;
            font-weight: 400;
        }
        .btn {
            border: medium none;
            border-radius: 2px !important;
            font-size: 13px;
        }
        .heading-design-h5 {
            font-size: 18px;
            margin-bottom: 14px;
        }
        .heading-design-h5 a {
            font-size: 15px;
            line-height: 22px;
        }
        .border-top {
            border-top: 1px solid #eeeeee !important;
        }
        .border-bottom {
            border-bottom: 1px solid #eeeeee !important;
        }
        .dropdown-item.active, .dropdown-item:active {
            background-color:#f9f9f9 !important;
            color: #1c2224 !important;
            text-decoration: none;
        }
        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #f0f7fa;
            border-radius: 2px;
            width: 100%;
        }
        .select2-container .select2-selection--single {
            height: 35px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 21px;
        }
        .select2-container .select2-selection--single .select2-selection__rendered {
            padding: 0.375rem 0.75rem;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            right: 8px;
            top: 5px;
        }
        .checkout-step-two .select2-container {
            width: 100% !important;
        }
        .accordion .card:not(:first-of-type):not(:last-of-type), .accordion .card:first-of-type{
            border:1px solid #eeeeee;
        }
        .select2-dropdown {
            border: medium none !important;
            border-radius: 0 !important;
            box-shadow: 0 4px 4px #dcdcdc !important;
        }
        .owl-theme .owl-controls .owl-buttons div, .footer-social a{
            transform: scale(1);
            transition-duration: 0.4s;
        }
        .owl-theme .owl-controls .owl-buttons div:hover, .footer-social a:hover{
            transform: scale(1.09);
        }
        .input-group-text {
            border-radius: 2px;
        }
        .card-header {
            background-color: #fbfbfb;
            border-bottom: 1px solid #eeeeee;
        }
        .card {
            background-clip: border-box;
            background-color: #fff;
            border: 1px solid #eeeeee;
            border-radius: 2px;
            display: flex;
            flex-direction: column;
            min-width: 0;
            position: relative;
            word-wrap: break-word;
        }
        .list-group-item:first-child {
            border-top-left-radius: 2px;
            border-top-right-radius: 2px;
        }
        .list-group-item:last-child {
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
        }
        .list-group-item {
            border: 1px solid #eeeeee;
        }
        .navbar-nav li.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* About Page */
        .team-card img {
            border-radius: 50px;
            height: 100px;
            width: 100px;
        }
        /* Mobile Media */
        /* Extra small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            .category-list-sidebar {
                margin: 0 0 12px 0;
            }
            .carousel-slider-main .owl-prev, .carousel-slider-main .owl-next {
                top: 34%;
            }
            .account-left {
                margin-right: 0;
            }
            .account-page .mx-auto {
                margin: 0 15px !important;
            }
            .account-right {
                border-left: medium none !important;
                border-top: 1px solid #eeeeee !important;
                min-height: auto !important;
            }
            .location-top {
                display:none;
            }
            .top-categories-search {
                left: 0;
                margin: auto;
                padding: 0 15px 8px;
                position: relative;
                right: 0;
                top: 0;
                width: 100%;
            }
            .container {
                max-width: 100%;
            }
            .main-nav-right .osahan-top-dropdown .dropdown-toggle {
                padding: 18px 0px !important;
            }
            .main-nav-right .osahan-top-dropdown img {
                left: auto;
                position: relative;
                top: 0;
            }
            .osahan-menu-2 .nav-link.shop {
                border-right: medium none;
                margin-right: 0;
            }
            .shop-detail-slider #sync2 {
                padding: 0;
            }
            .shop-detail-slider #sync2 img {
                margin: 26px 0 10px 0;
            }
            .navbar-toggler {
                background: #fff none repeat scroll 0 0 !important;
                border: medium none;
                border-radius: 2px;
                margin: 0 16px 0 0;
                padding: 6px 9px;
            }
            .top-categories-search-main {
                margin-top: 0 !important;
            }
            .main-nav-right .btn {
                font-size: 0;
                padding: 21px 8px;
            }
            .osahan-menu .my-2.my-lg-0 .main-nav-right {
                position: absolute;
                right: 76px;
                top: 0;
            }
            .main-nav-right .btn .mdi {
                font-size: 17px !important;
                margin: 0;
                vertical-align: initial !important;
            }
            .login-modal-left {
                display: none;
            }
            .app img {
                margin-bottom: 4px;
            }
            .footer-social a {
                margin-bottom: 3px;
            }
            .top-categories-search .form-control {
                border-radius: 2px 0 0 2px !important;
                min-width: auto;
            }
            .cart-sidebar {
                width: 320px;
            }
            .login-modal-right {
                padding: 6px;
            }
            .top-category .owl-prev {
                left: 0;
            }
            .top-category .owl-next {
                right: 0px;
            }
            .owl-carousel-featured .owl-prev {
                left: 0;
            }
            .owl-carousel-featured .owl-next {
                right: 0px;
            }
            .feature-box {
                margin-bottom: 6px;
                overflow: hidden;
            }
            .footer h6 {
                margin-bottom: 12px !important;
                margin-top: 25px;
            }
            .top-categories-search .form-control-select, .top-categories-search .select2-container {
                width: 138px !important;
                display:none;
            }

            .navbar-top {
                text-align: center;
            }
            .navbar-top .text-right {
                text-align: center !important;
            }
            .osahan-menu .navbar-brand {
                padding: 20px 15px;
            }

        }
        /* Small devices (landscape phones, 576px and up) */
        @media (min-width: 576px) and (max-width: 767.98px) {
            .category-list-sidebar {
                margin: 0 0 12px 0;
            }
            .carousel-slider-main .owl-prev, .carousel-slider-main .owl-next {
                top: 40%;
            }
            .account-left {
                margin-right: 0;
            }
            .account-page .mx-auto {
                margin: 0 15px !important;
            }
            .account-right {
                border-left: medium none !important;
                border-top: 1px solid #eeeeee !important;
                min-height: auto !important;
            }
            .location-top {
                display:none;
            }
            .top-categories-search {
                left: 0;
                margin: auto;
                padding: 0 15px 8px;
                position: relative;
                right: 0;
                top: 0;
                width: 100%;
            }
            .container {
                max-width: 100%;
            }
            .main-nav-right .osahan-top-dropdown .dropdown-toggle {
                padding: 18px 16px !important;
            }
            .main-nav-right .osahan-top-dropdown img {
                left: auto;
                position: relative;
                top: 0;
            }
            .osahan-menu-2 .nav-link.shop {
                border-right: medium none;
                margin-right: 0;
            }
            .shop-detail-slider #sync2 {
                padding: 0;
            }
            .shop-detail-slider #sync2 img {
                margin: 26px 0 10px 0;
            }
            .navbar-toggler {
                background: #fff none repeat scroll 0 0 !important;
                border: medium none;
                border-radius: 2px;
                margin: 0 16px 0 0;
                padding: 6px 9px;
            }
            .top-categories-search-main {
                margin-top: 0 !important;
            }
            .main-nav-right .btn {
                font-size: 0;
                padding: 21px 15px;
            }
            .osahan-menu .my-2.my-lg-0 .main-nav-right {
                position: absolute;
                right: 76px;
                top: 0;
            }
            .main-nav-right .btn .mdi {
                font-size: 17px !important;
                margin: 0;
                vertical-align: initial !important;
            }
            .login-modal-left {
                display: none;
            }
            .app img {
                margin-bottom: 4px;
            }
            .footer-social a {
                margin-bottom: 3px;
            }
            .top-categories-search .form-control {
                min-width: auto;
            }
            .top-category .owl-prev {
                left: 0;
            }
            .top-category .owl-next {
                right: 0px;
            }
            .owl-carousel-featured .owl-prev {
                left: 0;
            }
            .owl-carousel-featured .owl-next {
                right: 0px;
            }
            .feature-box {
                margin-bottom: 6px;
                overflow: hidden;
            }
            .top-categories-search .form-control-select, .top-categories-search .select2-container {
                width: 138px !important;
            }
            .navbar-top {
                text-align: center;
            }
            .navbar-top .text-right {
                text-align: center !important;
            }
            .osahan-menu .navbar-brand {
                padding: 20px 15px;
            }
        }
        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) and (max-width: 991.98px) {
            .category-list-sidebar {
                margin: 0 0 12px 0;
            }
            .location-top {
                display:none;
            }
            .top-categories-search {
                left: 0;
                margin: auto;
                padding: 0 15px 8px;
                position: relative;
                right: 0;
                top: 0;
                width: 100%;
            }
            .container {
                max-width: 100%;
            }
            .main-nav-right .osahan-top-dropdown .dropdown-toggle {
                padding: 18px 16px !important;
            }
            .main-nav-right .osahan-top-dropdown img {
                left: auto;
                position: relative;
                top: 0;
            }
            .osahan-menu-2 .nav-link.shop {
                border-right: medium none;
                margin-right: 0;
            }
            .shop-detail-slider #sync2 {
                padding: 0;
            }
            .shop-detail-slider #sync2 img {
                margin: 26px 0 10px 0;
            }
            .navbar-toggler {
                background: #fff none repeat scroll 0 0 !important;
                border: medium none;
                border-radius: 2px;
                margin: 0 16px 0 0;
                padding: 6px 9px;
            }
            .top-categories-search-main {
                margin-top: 0 !important;
            }
            .main-nav-right .btn {
                font-size: 0;
                padding: 21px 15px;
            }
            .osahan-menu .my-2.my-lg-0 .main-nav-right {
                position: absolute;
                right: 76px;
                top: 0;
            }
            .main-nav-right .btn .mdi {
                font-size: 19px !important;
                margin: 0;
            }
            .cart-btn .cart-value {
                margin: 1px 0 0 8px;
            }
            .login-modal-left {
                display: none;
            }
            .app img {
                margin-bottom: 4px;
            }
            .footer-social a {
                margin-bottom: 3px;
            }
            .top-categories-search .form-control {
                min-width: auto;
            }
            .top-category .owl-prev {
                left: 0;
            }
            .top-category .owl-next {
                right: 0px;
            }
            .owl-carousel-featured .owl-prev {
                left: 0;
            }
            .owl-carousel-featured .owl-next {
                right: 0px;
            }
            .feature-box {
                margin-bottom: 6px;
                overflow: hidden;
            }
            .top-categories-search .form-control-select, .top-categories-search .select2-container {
                width: 138px !important;
            }
            .osahan-menu .navbar-brand {
                padding: 20px 15px;
            }
        }
        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) and (max-width: 1199.98px) {
            .osahan-menu-2 .nav-link {
                font-size: 13px;
                padding: 13px 10px !important;
            }
            .main-nav-right .osahan-top-dropdown img {
                left: auto;
                position: relative;
                top: 0;
            }
            .main-nav-right .osahan-top-dropdown .dropdown-toggle {
                padding: 18px 16px !important;
            }
            .main-nav-right .btn {
                font-size: 0;
                padding: 21px 15px;
            }
            .main-nav-right .btn .mdi {
                font-size: 19px !important;
                margin: 0;
            }
            .cart-btn .cart-value {
                margin: 1px 0 0 8px;
            }
            .location-top {
                display:none;
            }
            .top-categories-search .form-control {
                min-width: auto;
            }
            .top-category .owl-prev {
                left: 0;
            }
            .top-category .owl-next {
                right: 0px;
            }
            .owl-carousel-featured .owl-prev {
                left: 0;
            }
            .owl-carousel-featured .owl-next {
                right: 0px;
            }
            .top-categories-search {
                left: 0;
                margin: auto;
                position: absolute;
                right: 0;
                top: 16px;
                width: 45%;
            }
            .top-categories-search .form-control-select, .top-categories-search .select2-container {
                width: 138px !important;
            }
            .container {
                max-width: 100%;
            }
        }
        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            .top-categories-search .form-control {
                min-width: auto;
            }
        }
        .btn.style1 i {
            font-size: 18px;
            margin-left: 7px;
            position: relative;
            top: 4px;
        }
        .btn i, .header-wrap .header-top .header-top-left .contact-item {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .btn i, .header-wrap .header-top .header-top-left .contact-item {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .btn i {
            position: relative;
            height: auto;
            line-height: 1;
            font-size: 16px;
            -webkit-transition: .5s;
            transition: .5s;
        }
        .btn i, .header-wrap .header-top .header-top-left .contact-item {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .btn-style01 {
            border-radius:20px;
            background-color: #0cc5b7;
            width: 20%;
        }
        .img-fluid {
            margin-top: 20px;
            max-width: 100%;
            height: 500px;
            width: 600px;
        }
        .section-padding-t{
            padding-bottom: 50px;
        }
        .section-padding-d{
            padding-bottom: 50px;
        }
        .main-nav .t-abouts {
            border-bottom: 4px solid #00c6d7;
            color: #00c6d7;
        }
    </style>
@endsection

@section('banner')

@endsection


@section('content')
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row">
                <div class="pl-4 col-lg-5 col-md-5 pr-4">
                    <img class="rounded img-fluid" src="https://hoigi.net/images/cachlam/monngon/cach-lam-ga-nuong-nguyen-con.jpg" width="732px" height="600px" alt="Card image cap">
                </div>
                <div class="col-lg-6 col-md-6 pl-5 pr-5">
                    <h2 class="mt-5 mb-5 text-secondary">Save more with GO! We give you the lowest prices on all your
                        grocery needs.</h2>
                    <h5 class="mt-2">Our Vision</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here,</p>
                    <h5 class="mt-4">Our Goal</h5>
                    <p>When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                        distribution of letters, as opposed to using 'Content here, Lorem Ipsum has been the industry's
                        standard dummy text ever since.</p>
                    <div class="btn-style01">
                        <a href="about.html" class="btn style1">Đọc thêm<i class="flaticon-right-arrow-2"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <section class="section-padding-t">
        <div class="section-title text-center mb-5">
            <h2>Chúng tôi cung cấp những gì?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-shopping mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">Giá và ưu đãi tốt nhất</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-earth mdi-48px"></i></div>
                    <h5 class="mb-3 text-secondary">Phân loại</h5>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text eve.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-refresh mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">Trả hàng dễ dàng</h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-truck-fast mdi-48px"></i></div>
                    <h5 class="mb-3 text-secondary">Giao hàng miễn phí</h5>
                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                        classical Latin literature from 45 BC.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi-basket mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">Đảm bảo 100% sự hài lòng</h5>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                        alteration in some form, by injected humour.</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mt-4 mb-4"><i class="text-success mdi mdi mdi-tag-heart mdi-48px"></i></div>
                    <h5 class="mt-3 mb-3 text-secondary">Giảm giá ưu đãi hàng ngày</h5>
                    <p>Một thực tế đã có từ lâu rằng người đọc sẽ bị phân tâm bởi nội dung có thể đọc được của một trang khi
                        nhìn vào cách bố trí của nó. Các quan điểm của việc sử dụng.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="section-padding-d bg-white">
        <div class="section-title text-center mb-5">
            <h2>Nhóm của chúng tôi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="team-card text-center">
                        <img class="img-fluid mb-4" src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.6435-9/73504746_525317411622483_8760334498891038720_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=DhaFrk5l9TUAX9k38Bu&_nc_ht=scontent-sin6-3.xx&oh=ca60ba35782df14152a9492f3a51ecc5&oe=615A5800" alt="">
                        <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been.</p>
                        <h6 class="mb-0 text-success">- Phạm Đức Thắng</h6>
                        <small>Manager</small>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="team-card text-center">
                        <img class="img-fluid mb-4" src="https://scontent-sin6-1.xx.fbcdn.net/v/t1.6435-9/184351179_2870905003147692_8902101709393573265_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=_GKL1e6tm9gAX8jgbVu&_nc_ht=scontent-sin6-1.xx&oh=ed1d5257bfb83671a2d206c9c56bc1c9&oe=615964CF" alt="">
                        <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been.</p>
                        <h6 class="mb-0 text-success">- Hoàng Đắc Phương</h6>
                        <small>Designer</small>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="team-card text-center">
                        <img class="img-fluid mb-4" src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.6435-9/132201829_386303379129171_9004750516161688930_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=kPREAvvPILMAX_qlxpD&_nc_ht=scontent-sin6-3.xx&oh=6d26ffa78b717c8f8ebc54d278e83885&oe=615C1F2D" alt="">
                        <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been.</p>
                        <h6 class="mb-0 text-success">- Đặng Văn Tiến</h6>
                        <small>Marketing</small>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection



@section('custom_js')
@endsection
