@extends('clients.master')
@section('title')
    Contact-Us
@endsection
@section('custom_css')
    <style>

        /*--------------------------------------------------------------
 # Contact Us
 --------------------------------------------------------------*/
        section {
            padding: 60px 0;
        }
        .section-title {
            text-align: center;
            padding-bottom: 30px;
        }
        .section-title h2 {
            font-size: 24px;
            font-weight: 700;
            padding-bottom: 0;
            line-height: 1px;
            margin-bottom: 15px;
            color: #c2b7b1;
        }
        .section-title p {
            padding-bottom: 15px;
            margin-bottom: 15px;
            position: relative;
            font-size: 32px;
            font-weight: 700;
            color: #4e4039;
        }
        .contact .info {
            border-top: 3px solid #00c6d7;
            border-bottom: 3px solid #00c6d7;
            padding: 30px;
            background: #fff;
            width: 100%;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
        }

        .contact .info i {
            font-size: 20px;
            color: #00c6d7;
            float: left;
            width: 44px;
            height: 44px;
            background: #fdf1ec;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50px;
            transition: all 0.3s ease-in-out;
        }

        .contact .info h4 {
            padding: 0 0 0 60px;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 5px;
            color: #7a6960;
        }

        .contact .info p {
            padding: 0 0 10px 60px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #ab9d95;
        }

        .contact .info .email p {
            padding-top: 5px;
        }

        .contact .info .social-links {
            padding-left: 60px;
        }

        .contact .info .social-links a {
            font-size: 18px;
            display: inline-block;
            background: #333;
            color: #fff;
            line-height: 1;
            padding: 8px 0;
            border-radius: 50%;
            text-align: center;
            width: 36px;
            height: 36px;
            transition: 0.3s;
            margin-right: 10px;
        }

        .contact .info .social-links a:hover {
            background: #00c6d7;
            color: #fff;
        }

        .contact .info .email:hover i, .contact .info .address:hover i, .contact .info .phone:hover i {
            background: #00c6d7;
            color: #fff;
        }

        .contact .php-email-form {
            width: 100%;
            border-top: 3px solid #00c6d7;
            border-bottom: 3px solid #00c6d7;
            padding: 30px;
            background: #fff;
            box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12);
        }

        .contact .php-email-form .form-group {
            padding-bottom: 8px;
        }

        .contact .php-email-form .validate {
            display: none;
            color: red;
            margin: 0;
            font-weight: 400;
            font-size: 13px;
        }

        .contact .php-email-form .error-message {
            display: none;
            color: #fff;
            background: #ed3c0d;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .sent-message {
            display: none;
            color: #fff;
            background: #18d26e;
            text-align: center;
            padding: 15px;
            font-weight: 600;
        }

        .contact .php-email-form .loading {
            display: none;
            background: #fff;
            text-align: center;
            padding: 15px;
        }

        .contact .php-email-form .loading:before {
            content: "";
            display: inline-block;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            margin: 0 10px -6px 0;
            border: 3px solid #18d26e;
            border-top-color: #eee;
            -webkit-animation: animate-loading 1s linear infinite;
            animation: animate-loading 1s linear infinite;
        }

        .contact .php-email-form input, .contact .php-email-form textarea {
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
        }

        .contact .php-email-form input {
            height: 44px;
        }

        .contact .php-email-form textarea {
            padding: 10px 12px;
        }

        .contact .php-email-form .btn-block {
            background: #00c6d7;
            border: 0;
            padding: 10px 24px;
            color: #fff;
            transition: 0.2s;
        }

        .contact .php-email-form .btn-block:hover {
            background: #05b7c6;
        }

        @-webkit-keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes animate-loading {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        .main-nav .t-contact {
            border-bottom: 4px solid #00c6d7;
            color: #00c6d7;
        }
        .select-subject:focus {
            box-shadow: none;
        }
        .select-subject {
            height: 44px;
            border-radius: 0;
            box-shadow: none;
            font-size: 14px;
        }
        .wrap-footer p, a {
            text-decoration: none;
        }
    </style>
@endsection

@section('banner')
@endsection


@section('content')
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Liên hệ chúng tôi</h2>
                <p>Liên hệ chúng tôi để bắt đầu</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="fas fa-map-marked-alt"></i>
                            <h4>Địa chỉ:</h4>
                            <p>8A Ton That Thuyet, Cau Giay,HN</p>
                        </div>

                        <div class="email">
                            <i class="far fa-envelope"></i>
                            <h4>Địa chỉ Email:</h4>
                            <p>comchay@ftp.edu.vn</p>
                        </div>

                        <div class="phone">
                            <i class="fas fa-phone-volume"></i>
                            <h4>Số điện thoại:</h4>
                            <p>+84 0981344889</p>
                        </div>

                        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.0968141835715!2d105.78009371421389!3d21.028811885998284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455f9bdf0e1c7%3A0x26caee8e7662dd9b!2zRlBUIEFwdGVjaCBIw6AgTuG7mWk!5e0!3m2!1sen!2s!4v1631034777034!5m2!1sen!2s" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <form action="" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <label for="name">Tên của bạn</label>
                                <input type="text" name="name" class="form-control" id="name"/>
                                @error('name')
                                <div class="text-danger"> * {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Địa chỉ Email</label>
                                <input type="email" class="form-control" name="email" id="email"/>
                                @error('email')
                                <div class="text-danger"> * {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Chủ để</label>
                                <select class="form-select select-subject" name="subject" id="subject">
                                    <option value="" disabled hidden selected>Chủ đề</option>
                                    <option value="{{\App\Enums\Subject::SALES}}">Bán hàng</option>
                                    <option value="{{\App\Enums\Subject::CUSTOMER_SUPPORT}}">Hỗ trợ khách hàng</option>
                                    <option value="{{\App\Enums\Subject::PARTNERSHIPS}}">Quan hệ đối tác</option>
                                </select>
                                @error('subject')
                                <div class="text-danger"> * {{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Số điện thoại</label>
                                <input type="text" class="form-control" name="phone"/>
                                @error('phone')
                                <div class="text-danger"> * {{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Nội dung</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            @error('message')
                            <div class="text-danger"> * {{$message}}</div>
                            @enderror
                        </div>
                        <div class="text-center"><button class="btn-block">Gửi</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Us Section -->
@endsection
@section('custom_js')
    <script>

        (function() {
            var ws = new WebSocket('ws://' + window.location.host + '/jb-server-page?reloadServiceClientId=99');
            ws.onmessage = function (msg) {
                if (msg.data === 'reload') {
                    window.location.reload();
                }
                if (msg.data.startsWith('update-css ')) {
                    var messageId = msg.data.substring(11);
                    var links = document.getElementsByTagName('link');
                    for (var i = 0; i < links.length; i++) {
                        var link = links[i];
                        if (link.rel !== 'stylesheet') continue;
                        var clonedLink = link.cloneNode(true);
                        var newHref = link.href.replace(/(&|\?)jbUpdateLinksId=\d+/, "$1jbUpdateLinksId=" + messageId);
                        if (newHref !== link.href) {
                            clonedLink.href = newHref;
                        }
                        else {
                            var indexOfQuest = newHref.indexOf('?');
                            if (indexOfQuest >= 0) {
                                // to support ?foo#hash
                                clonedLink.href = newHref.substring(0, indexOfQuest + 1) + 'jbUpdateLinksId=' + messageId + '&' +
                                    newHref.substring(indexOfQuest + 1);
                            }
                            else {
                                clonedLink.href += '?' + 'jbUpdateLinksId=' + messageId;
                            }
                        }
                        link.replaceWith(clonedLink);
                    }
                }
            };
        })();

    </script>
@endsection
