@extends('clients.master')
@section('title')
    Blog
@endsection
@section('custom_css')
    <style>
        a {
            text-decoration: none;
            outline: none;
        }



        .comments-list h3 a {
            color: #555;
            font-size: 1.25rem;
        }

        .widget ul.cats a {
            color: #555;
            text-decoration: none
        }


        .pagination_fg a.active {
            background-color: #333;
            color: white;
        }

        .pagination_fg a {
            color: #333;
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            margin: 0 2px;
        }

        .pagination_fg {
            text-align: center;
            margin-top: 15px;
        }

        .search_bar_list input[type='text'] {
            border: 0;
            height: 40px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            padding-left: 15px;
        }

        .form-control {
            padding: 10px;
            height: 40px;
            font-size: 14px;
            font-size: 0.875rem;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            border: 1px solid #d2d8dd;
        }

        .search_bar_list input[type='submit'] {
            position: absolute;
            right: -1px;
            color: #fff;
            font-weight: 600;
            top: 0;
            border: 0;
            padding: 0 15px;
            height: 40px;
            cursor: pointer;
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            -ms-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
            background-color: #589442;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .search_bar_list {
            position: relative;
        }

        @media (max-width: 767px) {
        }

        .page_header {
            padding: 15px 0;
        }

        .page_header {
            padding: 20px 0 20px 0;
            background-color: #f4f4f4;
        }

        .breadcrumbs.blog {
            padding-top: 10px
        }

        article.blog {
            margin-bottom: 30px;
            background-color: #fff;
            -webkit-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 20px 0px rgba(0, 0, 0, 0.1);
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            -ms-border-radius: 5px;
            border-radius: 5px;
            overflow: hidden;
        }

        article.blog figure {
            height: 260px;
            overflow: hidden;
            position: relative;
            margin-bottom: 0
        }

        @media (max-width: 991px) {
            article.blog figure {
                height: 210px
            }
        }

        @media (max-width: 767px) {
            article.blog figure {
                height: 220px
            }
        }

        article.blog figure .preview {
            position: absolute;
            top: 50%;
            left: 0;
            margin-top: -12px;
            -webkit-transform: translateY(10px);
            -moz-transform: translateY(10px);
            -ms-transform: translateY(10px);
            -o-transform: translateY(10px);
            transform: translateY(10px);
            text-align: center;
            opacity: 0;
            visibility: hidden;
            width: 100%;
            -webkit-transition: all 0.6s;
            transition: all 0.6s;
            z-index: 2
        }

        article.blog figure .preview span {
            background-color: #fcfcfc;
            background-color: rgba(255, 255, 255, 0.8);
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -ms-border-radius: 20px;
            border-radius: 25px;
            display: inline-block;
            color: #222;
            font-size: 1.75rem;
            padding: 5px 10px
        }

        article.blog figure:hover .preview {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0);
            -moz-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0)
        }

        article.blog figure img {
            -webkit-transform: translate(-50%, -50%) scale(1);
            -moz-transform: translate(-50%, -50%) scale(1);
            -ms-transform: translate(-50%, -50%) scale(1);
            -o-transform: translate(-50%, -50%) scale(1);
            transform: translate(-50%, -50%) scale(1);
            -moz-transition: 0.3s;
            -webkit-transition: all 0.3s ease;
            transition: all 0.3s ease;
            width: auto;
            height: 400px;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden
        }

        article.blog figure img:hover {
            -webkit-transform: translate(-50%, -50%) scale(1.1);
            -moz-transform: translate(-50%, -50%) scale(1.1);
            -ms-transform: translate(-50%, -50%) scale(1.1);
            -o-transform: translate(-50%, -50%) scale(1.1);
            transform: translate(-50%, -50%) scale(1.1)
        }

        @media (max-width: 991px) {
            article.blog figure img {
                height: inherit;
                max-width: 100%;
            }
        }

        article.blog .post_info {
            padding: 20px 30px 30px 30px;
            position: relative;
            box-sizing: border-box
        }

        article.blog .post_info small {
            font-weight: 500;
            color: #999;
            font-size: 13px;
            font-size: 0.8125rem
        }

        article.blog .post_info h2 {
            font-size: 21px;
            font-size: 1.3125rem
        }

        article.blog .post_info h2 a {
            color: #333
        }

        article.blog .post_info h2 a:hover {
            color: #589442
        }

        article.blog .post_info ul {
            margin: 0 -30px 0 -30px;
            padding: 20px 30px 0 30px;
            width: 100%;
            box-sizing: content-box;
            border-top: 1px solid #ededed
        }

        article.blog .post_info ul li {
            display: inline-block;
            position: relative;
            padding: 12px 0 0 50px;
            font-weight: 500;
            font-size: 12px;
            font-size: 0.75rem;
            color: #999
        }

        article.blog .post_info ul li .thumb {
            width: 40px;
            height: 40px;
            overflow: hidden;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            display: inline-block;
            position: absolute;
            left: 0;
            top: 0
        }

        article.blog .post_info ul li .thumb img {
            width: 40px;
            height: auto;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        article.blog .post_info ul li:last-child {
            float: right;
            padding-left: 0;
            line-height: 1
        }

        article.blog .post_info ul li:last-child i {
            font-size: 14px;
            font-size: 0.875rem;
            margin-right: 5px;
            position: relative;
            top: 3px
        }

        @media (max-width: 991px) {
            article.blog .post_info ul {
                position: static;
                width: auto
            }
        }

        .alignleft {
            float: left;
            margin: 0 15px 10px 0;
            width: 80px;
            height: 80px;
            overflow: hidden;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            position: relative
        }

        .alignleft img {
            width: auto;
            height: 80px;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .comments-list {
            padding: 0;
            list-style: none
        }

        .comments-list h3 {
            font-size: 14px;
            font-size: 0.875rem;
            padding: 0 0 0;
            margin: 0;
            text-transform: capitalize
        }

        .comments-list h3 a {
            color: #555
        }

        .comments-list h3 a:hover {
            color: #589442
        }

        .comments-list li {
            margin-bottom: 10px;
            display: table;
            width: 100%
        }

        .comments-list li:last-child {
            margin-bottom: 0
        }

        .comments-list small {
            color: #555
        }

        .widget-title {
            padding: 15px 0;
            margin-bottom: 20px;
            border-bottom: 1px solid #ededed
        }

        .widget-title h4 {
            padding: 0;
            margin: 0;
            font-weight: 500;
            line-height: 1;
            font-size: 16px;
            font-size: 1rem
        }

        .widget-title.first {
            padding-top: 0
        }

        .widget {
            position: relative;
            display: block;
            margin-bottom: 15px
        }

        .widget ul.cats {
            list-style: none;
            padding: 0
        }

        .widget ul.cats li {
            padding: 0 0 5px 2px;
            position: relative
        }

        .widget ul.cats a {
            color: #555
        }

        .widget ul.cats a:hover {
            color: #589442
        }

        .widget ul.cats a span {
            position: absolute;
            right: 0
        }

        .tags a {
            background-color: #f0f0f0;
            padding: 3px 10px;
            font-size: 13px;
            margin: 0 0 4px;
            letter-spacing: 0.4px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            display: inline-block;
            color: #333
        }

        .tags a:hover {
            background-color: #589442;
            color: #fff
        }

        .search_blog .form-group {
            position: relative
        }

        .search_blog .form-group button[type="submit"] {
            outline: none;
            color: #444;
            font-size: 21px;
            font-size: 1.3125rem;
            background: none;
            border: 0;
            position: absolute;
            top: 5px;
            right: 0
        }

        .search_blog .form-group button[type="submit"]:hover {
            color: #589442
        }

        .singlepost {
            background-color: #fff;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            padding: 30px 30px 1px 30px;
            margin-bottom: 25px;
            -webkit-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.1)
        }

        .singlepost figure {
            margin: -30px -30px 30px -30px
        }

        .singlepost h1 {
            font-size: 28px;
            font-size: 1.75rem
        }

        @media (max-width: 767px) {
            .singlepost h1 {
                font-size: 21px;
                font-size: 1.3125rem
            }
        }

        .singlepost p {
            line-height: 1.8
        }

        .postmeta {
            padding-bottom: 10px
        }

        .postmeta ul {
            padding: 0;
            margin: 0;
            margin-bottom: 10px
        }

        .postmeta ul li {
            display: inline-block;
            margin: 0 15px 5px 0;
            color: #777
        }

        .postmeta ul li i {
            margin-right: 3px
        }

        .postmeta ul li a {
            color: #777
        }

        .postmeta ul li a:hover {
            color: #589442
        }

        .postmeta ul li a i {
            margin-right: 3px
        }

        .dropcaps p:first-child::first-letter {
            color: #fff;
            background-color: #589442;
            float: left;
            font-size: 64px;
            font-size: 4rem;
            line-height: 1;
            margin: 10px 15px 0 0 !important;
            padding: 12px
        }

        #comments {
            padding: 10px 0 0px 0;
            margin-bottom: 30px
        }

        #comments ul {
            padding: 0;
            margin: 0;
            list-style: none
        }

        #comments ul li {
            padding: 25px 0 0 0;
            list-style: none
        }

        #comments .replied-to {
            margin-left: 35px
        }

        @media (max-width: 767px) {
            #comments .replied-to {
                margin-left: 20px
            }
        }

        .avatar {
            float: left;
            margin-right: 25px;
            width: 68px;
            height: 68px;
            overflow: hidden;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            -ms-border-radius: 50%;
            border-radius: 50%;
            position: relative
        }

        @media (max-width: 767px) {
            .avatar {
                float: none;
                margin: 0 0 5px 0
            }
        }

        .avatar img {
            width: 68px;
            height: auto;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%)
        }

        .comment_right {
            display: table;
            background-color: #f7f7f7;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            padding: 20px 20px 0 20px;
            position: relative
        }

        .comment_right:after, .comment_right:before {
            right: 100%;
            top: 30px;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px
        }

        .comment_right:after {
            background-color: transparent;
            border-right-color: #f7f7f7;
            border-width: 15px;
            margin-top: -15px
        }

        .comment_right:before {
            border-color: transparent;
            border-width: 16px;
            margin-top: -16px
        }

        .comment_info {
            padding-bottom: 7px
        }

        .comment_info span {
            padding: 0 10px
        }
        .page_header {
            padding: 20px 0 20px 0;
            background-color: #f4f4f4;
        }
        @media (max-width: 767px){}
            .page_header {
                padding: 15px 0;
            }
        .margin_30_40 {
            padding-top: 30px;
            padding-bottom: 40px;
        }
        /*.margin_30_40 {*/
        /*    padding-top: 30px;*/
        /*    padding-bottom: 40px;*/
        /*}*/
        .hero_single.inner_pages {
            height: 250px;
            background-position: center center;
            background-repeat: no-repeat;
            background-color: #ededed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .hero_single {
            width: 100%;
            position: relative;
            text-align: center;
            margin: 0;
            color: #fff;
        }
        .main-nav .t-blog {
            border-bottom: 4px solid #00c6d7;
            color: #00c6d7;
        }
    </style>
@endsection

@section('banner')

@endsection

@section('content')
    <main>
        <div class="hero_single inner_pages background-image" data-background="url('http://www.ansonika.com/foogra/img/home_section_1.jpg')" style="background-image: url('http://www.ansonika.com/foogra/img/home_section_1.jpg');"></div>
        <div class="page_header element_to_stick">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 col-md-7 d-none d-md-block">

                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-5">
                        <div class="search_bar_list">
                            <input type="text" class="form-control" placeholder="Tìm kiếm trong blog...">
                            <input type="submit" value="Tìm kiếm">
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
        </div>
        <!-- /page_header -->

        <div class="container margin_30_40">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-6">
                            <article class="blog">
                                <figure>
                                    <a href="#0"><img src="http://www.ansonika.com/foogra/img/blog-1.jpg"
                                                      alt="">
                                        <div class="preview"><span>Đọc thêm</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <small>Chuyên mục - 20 Nov. 2017</small>
                                    <h2><a href="#0">Ea exerci option hendrerit</a></h2>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi,
                                        in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="http://www.ansonika.com/foogra/img/blog-2.jpg"
                                                                    alt=""></div>
                                            Admin
                                        </li>
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-6">
                            <article class="blog">
                                <figure>
                                    <a href="blog-post.html"><img src="http://www.ansonika.com/foogra/img/blog-3.jpg"
                                                                  alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <small>Chuyên mục - 20 Nov. 2017</small>
                                    <h2><a href="blog-post.html">At usu sale dolorum offendit</a></h2>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi,
                                        in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="http://www.ansonika.com/foogra/img/blog-4.jpg"
                                                                    alt=""></div>
                                            Admin
                                        </li>
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-6">
                            <article class="blog">
                                <figure>
                                    <a href="#"><img src="http://www.ansonika.com/foogra/img/blog-5.jpg"
                                                                  alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <small>Chuyên mục - 20 Nov. 2017</small>
                                    <h2><a href="blog-post.html">Iusto nominavi petentium in</a></h2>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi,
                                        in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="http://www.ansonika.com/foogra/img/blog-6.jpg"
                                                                    alt=""></div>
                                            Admin
                                        </li>
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-6">
                            <article class="blog">
                                <figure>
                                    <a href="#"><img src="http://www.ansonika.com/foogra/img/blog-1.jpg"
                                                                  alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <small>Chuyên mục - 20 Nov. 2017</small>
                                    <h2><a href="#">Assueverit concludaturque quo</a></h2>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi,
                                        in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="http://www.ansonika.com/foogra/img/blog-4.jpg"
                                                                    alt=""></div>
                                            Admin
                                        </li>
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-6">
                            <article class="blog">
                                <figure>
                                    <a href="#"><img src="http://www.ansonika.com/foogra/img/blog-6.jpg"
                                                                  alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <small>Chuyên mục - 20 Nov. 2017</small>
                                    <h2><a href="#">Nec nihil menandri appellantur</a></h2>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi,
                                        in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="http://www.ansonika.com/foogra/img/blog-5.jpg"
                                                                    alt=""></div>
                                            Admin
                                        </li>
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /col -->
                        <div class="col-md-6">
                            <article class="blog">
                                <figure>
                                    <a href="#l"><img src="http://www.ansonika.com/foogra/img/blog-4.jpg"
                                                                  alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <small>Chuyên mục - 20 Nov. 2017</small>
                                    <h2><a href="#">Te congue everti his salutandi</a></h2>
                                    <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi,
                                        in
                                        eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                                    <ul>
                                        <li>
                                            <div class="thumb"><img src="http://www.ansonika.com/foogra/img/blog-4.jpg"
                                                                    alt=""></div>
                                            Admin
                                        </li>
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                    <div class="pagination_fg">
                        <a href="#">«</a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">»</a>
                    </div>

                </div>
                <!-- /col -->

                <aside class="col-lg-3">
                    <div class="widget">
                        <div class="widget-title first">
                            <h4>Bài đăng mới nhất</h4>
                        </div>
                        <ul class="comments-list">
                            <li>
                                <div class="alignleft">
                                    <a href="#0"><img src="http://www.ansonika.com/foogra/img/blog-4.jpg" alt=""></a>
                                </div>
                                <small>Chuyên mục - 11.08.2016</small>
                                <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#0"><img src="http://www.ansonika.com/foogra/img/blog-6.jpg" alt=""></a>
                                </div>
                                <small>Chuyên mục - 11.08.2016</small>
                                <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                            </li>
                            <li>
                                <div class="alignleft">
                                    <a href="#0"><img src="http://www.ansonika.com/foogra/img/blog-4.jpg" alt=""></a>
                                </div>
                                <small>Chuyên mục - 11.08.2016</small>
                                <h3><a href="#" title="">Verear qualisque ex minimum...</a></h3>
                            </li>
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Thể loại</h4>
                        </div>
                        <ul class="cats">
                            <li><a href="#">Đồ ăn <span>(12)</span></a></li>
                            <li><a href="#">Địa điểm tham quan <span>(21)</span></a></li>
                            <li><a href="#">Địa điểm mới <span>(44)</span></a></li>
                            <li><a href="#">Gợi ý và hướng dẫn <span>(31)</span></a></li>
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Phổ biến</h4>
                        </div>
                        <div class="tags">
                            <a href="#">Đồ ăn</a>
                            <a href="#">Bars</a>
                            <a href="#">Cooktails</a>
                            <a href="#">Cửa hàng</a>
                            <a href="#">Ưu đãi tốt nhất</a>
                            <a href="#">Transports</a>
                            <a href="#">Các nhà hàng</a>
                        </div>
                    </div>
                    <!-- /widget -->
                </aside>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
@endsection



@section('custom_js')

@endsection
