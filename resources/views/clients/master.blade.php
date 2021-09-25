<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @yield('custom_css')
    <title>@yield('title')</title>

</head>
<body id="reponsive-font-size">
<div class="main">
    <!-- Header -->
    <header id="myHeader" class="header-main">

        <div class="container">
            <div class="row header-height">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 align-self-center">
                    <!--icon-bars-->
                    <label for="nav-mobile-input" class="nav-mobil-bars"><i class="fas fa-bars"></i></label>
                    <div class="logo">
                        <a href="{{route('index')}}">
                            <img style="width: 90%;height: 87px" src="/assets/images/logo2.png">
                        </a>
                    </div>
                </div>
                <div class="logo-none-lap col-sm-6 col-6">
                    <div class="logo-mb-header d-flex justify-content-center">
                        <div style="width: 90px">
                            <a href="{{route('index')}}">
                                <img style="height: 48px" src="/assets/images/logo2.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-3 col-3 order-lg-3 align-self-center">

                    <div class="d-flex justify-content-end">
                        <div class="main-nav col d-lex align-self-center menu-header-lap">
                            <a class="nav-item active t-home" href="{{ route('index') }}">Trang chủ</a>
                            <div class="dropdown d-inline">
                                <a class="nav-item t-product" href="{{route('products')}}">Product</a>
                                <div class="dropdown-menu p-0" style="border-radius: 0;top:55px;left: 0"
                                     aria-labelledby="dropdownMenuButton">
                                    @foreach(\App\Models\Category::all() as $item)
                                        <a class="dropdown-item dropdown-link" href="/products?category={{$item->id}}">{{$item->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                            <a class="nav-item t-blog" href="{{route('blog')}}">Blog Chay</a>
                            <a class="nav-item t-abouts" href="{{route('abouts')}}">Về comchay</a>
                            <a class="nav-item t-contact" href="{{route('contact')}}">Liên hệ</a>
                        </div>
                        {{---------------------------------------------------nav mobile-----------------------------------------}}
                        <input type="checkbox" class="nav__input" id="nav-mobile-input">
                        <label for="nav-mobile-input" class="nav__overlay"></label>
                        <div class="nav-mobile" id="nav-mobile-respon">
                            <label for="nav-mobile-input" class="nav-mobile-close">
                                <i class="fas fa-times" style="margin: 7px 0;"></i>
                            </label>
                            <div class="nav-mobile-list" data-spy="scroll" data-target="#myScrollspy" data-offset="1">
                                <div class="pd-menu-mb" id="myScrollspy">
                                    <div class="wrap-logo-mb">
                                        <a href="{{route('index')}}" class="logo-mobile">
                                            <img style="width: 100%;" src="/assets/images/logo2.png">
                                        </a>
                                    </div>
                                    <div class="pd-top-nav-mn">
                                        <div class="wrap-mobile-link">
                                            <i class="fas fa-home"></i>
                                            <a class="nav-mobile-link" href="{{ route('index') }}">Trang chủ</a>
                                        </div>
                                        <div class="wrap-mobile-link" style="position: relative">
                                            <i class="fas fa-hamburger" style="position: absolute;"></i>
                                            <div class="dropdown transition-drop" style="margin-left: 35px;position: static;width: 86%;">
                                                <a class="nav-mobile-link" href="{{route('products')}}">Sản phẩm</a>
                                                <ul class="dropdown-menu position-static" style="border-radius: 0;border: 0;padding: 0;">
                                                    @foreach(\App\Models\Category::all() as $item)
                                                        <li><a href="{{$item->id}}">{{$item->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wrap-mobile-link">
                                            <i class="fas fa-blog"></i>
                                            <a class="nav-mobile-link" href="{{route('blog')}}">Blog Chay</a>
                                        </div>
                                        <div class="wrap-mobile-link">
                                            <i class="fas fa-address-card"></i>
                                            <a class="nav-mobile-link" href="{{route('abouts')}}">Về com chay</a>
                                        </div>
                                        <div class="wrap-mobile-link">
                                            <i class="fas fa-shopping-cart"></i>
                                            <a class="nav-mobile-link" href="{{route('listCart')}}">Giỏ hàng</a>
                                        </div>
                                        <div class="wrap-mobile-link">
                                            <i class="fas fa-comment-alt"></i>
                                            <a class="nav-mobile-link" href="{{route('contact')}}">Gửi phản hồi</a>
                                        </div>
                                        @if(\Illuminate\Support\Facades\Auth::check())
                                            <div class="wrap-mobile-link">
                                                <i class="fas fa-user-circle"></i>
                                                <a class="nav-mobile-link"
                                                   href="{{route('detail-profile',\Illuminate\Support\Facades\Auth::user()->id)}}">{{\Illuminate\Support\Facades\Auth::user()->username}}</a>
                                            </div>
                                            <div class="wrap-mobile-link border-0">
                                                <i class="fas fa-power-off"></i>
                                                <a class="nav-mobile-link" href="{{route('logout')}}">Đăng xuất</a>
                                            </div>
                                        @else
                                            <div class="wrap-mobile-link border-0">
                                                <i class="fas fa-power-off"></i>
                                                <button type="submit" style="background: none;border: none;padding: 0"
                                                        class="btn-account" data-bs-toggle="modal" data-bs-target="#modal-mobile">
                                                    <a class="nav-mobile-link">Đăng nhập</a>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="shopping-cart d-flex justify-content-center">
                            <div class="align-self-center">
                                <a class="color-cart" href="{{route('listCart')}}"><i
                                        class="fas fa-shopping-cart"> {{\Gloudemans\Shoppingcart\Facades\Cart::content()->count()}}</i></a>
                            </div>
                        </div>
                        <div class="wrap-log-in">
                            <div class="log-in align-self-center">
                                @if(\Illuminate\Support\Facades\Auth::check())
                                    <button class="dropdown-toggle"
                                            style="background: none;border: none; padding: 10px 14px;" type="button"
                                            role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                        <a class="color-cart">
                                            <b style="font-size: 14px">{{\Illuminate\Support\Facades\Auth::user()->username}}</b>
                                        </a>
                                    </button>
                                    <div id="dropd-menu" class="dropdown-menu p-0" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item"
                                           href="{{route('detail-profile',\Illuminate\Support\Facades\Auth::user()->id)}}"><i
                                                class="far fa-user ic-user mr-2"></i>Tài
                                            khoản</a>
                                        <a class="dropdown-item border-0" style="border-radius: 0 0 4px 4px;"
                                           href="{{route('logout')}}"><i
                                                class="fas fa-power-off mr-2 ic-logout"></i>Đăng xuất</a>
                                    </div>
                                @else
                                    <button type="submit" style="background: none;border: none; padding: 10px 14px;"
                                            class="btn-account" data-bs-toggle="modal" data-bs-target="#modal-mobile">
                                        <a class="color-cart"><b style="font-size: 14px;display: flex">Đăng nhập</b></a>
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="banner">
        @yield('banner')
    </div>

    <div class="modal fade" id="modal-mobile" tabindex="10" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="border: none;padding: 0;position: relative">
                    <button style="font-size:30px; background: none;border: none; color: #8c8c8c" type="button"
                            class="close d-flex align-items-center justify-content-center" data-bs-dismiss="modal"
                            aria-label="Close">
                        &times;
                    </button>
                </div>
                <div class="form-login form-account-mb" id="form-account">
                    @if(session('error-login'))
                        <div id="error-invalid-acc" class="text-danger" style="margin-bottom: 5px;">
                            {{session('error-login')}}
                        </div>
                    @endif
                    <div class="heading text-center pb-3">
                        <span id="login" class="mb-lg-2 mb-md-2 mb-1">Đăng nhập</span>
                        <span id="regis" class="mb-lg-2 mb-md-2 mb-1">Đăng kí</span>
                        <hr id="indicator" class="indicator-mb">
                    </div>
                    <form name="login" id="log-form" action="{{route('login')}}" class="log-form-mb" method="post">
                        @csrf
                        <div class="input-user-name mb-lg-4 mb-md-3 mb-sm-3 mb-3 validate">
                            <input class="user-name" type="text" placeholder="Tên người dùng" name="username">
                            <div class="icon-w3">
                                <i class="fa fa-user" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="input-pass mb-lg-4 mb-md-3 mb-sm-3 mb-3 validate">
                            <input class="pass" type="password" placeholder="Mật khẩu" name="password">
                            <div class="icon-w3">
                                <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                            </div>
                        </div>
                        <button class="btn-login mt-lg-2 mt-md-2 mt-sm-2 mt-0"><b>Đăng nhập</b></button>
                    </form>
                    <form id="reg-form" action="{{ route('register') }}" class="reg-form-mb" method="post">
                        @csrf
                        <div class="input-user-name d-flex mb-lg-4 mb-md-3 mb-sm-3 mb-3 justify-content-sm-between div-2-input">
                            <div style="width: 48%">
                                <input class="user-name input-form-reg d-inline-block"
                                       type="text" placeholder="First Name" name="first_name"/>
                            </div>
                            <div style="width: 48%">
                                <input type="text" class="justify-content-end pass d-inline-block input-form-reg"
                                       placeholder="Last Name" name="last_name"/>
                            </div>
                        </div>
                        <div class="input-pass mb-lg-4 mb-md-3 mb-sm-3 mb-3">
                            <input class="pass" type="text" placeholder="Address" name="address"/>
                        </div>
                        <div class="input-user-name d-flex m-0 mb-lg-4 mb-md-3 mb-sm-3 mb-3 justify-content-sm-between div-2-input">
                            <div style="width: 48%">
                                <input class="input-form-reg user-name d-inline-block"
                                       type="text"
                                       placeholder="User name" name="username"/>
                            </div>
                            <div style="width: 48%">
                                <input type="text" class="input-form-reg justify-content-end pass d-inline-block"
                                       placeholder="Phone" name="phone"/>
                            </div>
                        </div>
                        <div class="input-pass mb-lg-4 mb-md-3 mb-sm-3 mb-3">
                            <input class="pass" type="text" placeholder="Email" name="email"/>

                        </div>
                        <div class="input-user-name d-flex mb-lg-4 mb-md-3 mb-sm-3 mb-3 justify-content-sm-between div-2-input">
                            <div style="width: 48%">
                                <input class="input-form-reg user-name d-inline-block"
                                       type="password" placeholder="Password" name="password"/>
                            </div>

                            <div style="width: 48%">
                                <input class="input-form-reg justify-content-end pass d-inline-block" type="password"
                                       placeholder="Re-password" name="password_confirmation"/>
                            </div>

                        </div>
                        <button class="btn-login mt-lg-2 mt-md-2 mt-sm-2 mt-0"><b>Đăng ký</b></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <footer class="text-left" style="background-color: #0b0c10;color: #c5c6c7">
        <section class="">
            <div class="container text-sm-left text-md-start mt-5">
                <div class="row pt-5 wrap-footer">
                    <div class="col-md-3 col-sm-4 col-lg-4 col-xl-3 col-8 mx-auto mb-lg-4 mb-md-4 mb-sm-3 img-nd">
                        <h5 class="wrap-img-footer">
                            <a href="{{route('index')}}" class="d-inline-block">
                                <img style="width: 86%;height:80px;margin-right: 20px" src="/assets/images/logo1.png">
                            </a>
                        </h5>
                        <p>Thực phẩm chay, sạch, ngon, thuần chay.</p>
                        <p>Đảm bảo vệ sinh an toàn thực phẩm.</p>
                        <p>Dịch vụ tốt nhất.</p>
                    </div>
                    <div class="col-md-2 col-sm-2 col-lg-2 col-xl-2 col-4 mx-auto mb-lg-4 mb-md-4 mb-sm-3 menu-footer">
                        <h5 class="fw-bold mb-4" style="color: #c5c6c7">
                            Danh sách
                        </h5>
                        <p>
                            <a href="#" class="text-reset">Đồ chay hàng ngày</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Bánh chay</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Rau củ</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Giả mặn</a>
                        </p>
                    </div>
                    <div id="contact-mobile" class="col-md-4  col-sm-4 col-lg-3 col-xl-3 col-8 mx-auto mb-md-0 mb-lg-4 mb-sm-3 color-icon">
                        <h5 class="fw-bold mb-4" style="color: #c5c6c7">
                            Liên hệ
                        </h5>
                        <p><i class="fas fa-home me-3"></i>Số 8 Tôn Thất Thuyết, HN</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            comchay@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 84 567 999 999</p>
                        <p><i class="fas fa-print me-3"></i> + 84 345 686 868</p>
                    </div>
                    <div class="col-md-3 col-sm-2 col-lg-2 col-xl-2 col-4 mx-auto mb-lg-4 mb-md-4 mb-sm-3 support-link">
                        <h5 class="fw-bold mb-4" style="color: #c5c6c7">
                            Hỗ trợ
                        </h5>
                        <p>
                            <a href="{{route('abouts')}}" class="text-reset">Về comchay</a>
                        </p>
                        <p>
                            <a href="{{route('contact')}}" class="text-reset">Liên hệ</a>
                        </p>
                    </div>
                    <div id="contact-auto" class="col-md-4  col-sm-4 col-lg-3 col-xl-3 col-8 mx-auto mb-md-0 mb-lg-4 mb-sm-3 color-icon">
                        <h5 class="fw-bold mb-4" style="color: #c5c6c7">
                            Liên hệ
                        </h5>
                        <p><i class="fas fa-home me-3"></i>Số 8 Tôn Thất Thuyết, HN</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            comchay@gmail.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 84 567 999 999</p>
                        <p><i class="fas fa-print me-3"></i> + 84 345 686 868</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="text-center copy-respon" style="padding:20px;background-color: #1f2833;color: #45A29E">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="{{route('index')}}">Comchay</a>
        </div>
    </footer>
</div>
<script type="text/javascript" src="/assets/scripts/jquery.min.js"></script>
{{--<script type="text/javascript" src="/assets/scripts/jquery.validate.min.js"></script>--}}
@yield('custom_js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"--}}
{{--        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"--}}
{{--        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="/assets/scripts/index.js"></script>--}}
<script>
    $("#log-form").validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            username: {
                required: '* Vui lòng nhập username.',
            },
            password: {
                required: '* Vui lòng nhập mật khẩu.',
            },
        },
        submitHandler: function (form) {
            $(form).submit();
        }
    });
    $("#reg-form").validate({
        rules: {
            first_name: {
                required: true
            },
            last_name: {
                required: true
            },
            address: {
                required: true
            },
            username: {
                required: true
            },
            phone: {
                required: true,
                number: true,
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            password_confirmation: {
                required: true,
                minlength: 8
            }
        },
        messages: {
            first_name: {
                required: "* Vui lòng nhập first name"
            },
            last_name: {
                required: '* Vui lòng nhâp last name'
            },
            address: {
                required: '* Vui lòng nhập địa chỉ'
            },
            username: {
                required: '* Vui lòng nhập user name'
            },
            phone: {
                required: '* Vui lòng nhập số điện thoại',
                number: '* Vui lòng nhập đúng số điện thoại',
            },
            email: {
                required: '* Vui lòng nhập địa chỉ email',
                email: '* Vui lòng nhập đúng định dạng email'
            },
            password: {
                required: '* Vui lòng nhập mật khẩu',
                minlength: '* Vui lòng nhập ít nhất 8 kí tự'
            },
            password_confirmation: {
                required: '* Vui lòng nhập mật khẩu',
                minlength: '* Vui lòng nhập ít nhất 8 kí tự'
            }
        },
        submitHandler: function (form) {
            $(form).submit();
        }
    });

</script>
</body>
</html>
