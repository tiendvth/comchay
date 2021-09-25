@extends('clients.master')
@section('title')
    404
@endsection
@section('custom_css')
    <style>
        @media (max-width: 767px){}
        #error_page {
            padding: 60px 0 0 0;
            height: 500px;
        }
        #error_page p {
            font-size: 21px;
            font-size: 1.3125rem;
        }
        h4 {
            margin-bottom: 20px;
            color: #0A0C10;
        }
        #error_page {
            width: 100%;
            height: 650px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #FFFFFF repeat;
            color: #fff;
        }
        .search_bar input[type='submit'] {
            position: absolute;
            right: -1px;
            color: #fff;
            font-weight: 600;
            top: 0;
            border: 0;
            padding: 0 25px;
            height: 50px;
            cursor: pointer;
            -webkit-border-radius: 0 3px 3px 0;
            -moz-border-radius: 0 3px 3px 0;
            -ms-border-radius: 0 3px 3px 0;
            border-radius: 0 3px 3px 0;
            background-color: #00c6d7;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -webkit-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }
        .search_bar {
            position: relative;
            margin-bottom: 60px;
        }
        .search_bar input[type='text'] {
            border: 1px solid #00c6d7;
            height: 50px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            border-radius: 3px;
            padding-left: 15px;
            /*-webkit-box-shadow: 0px 0px 50px 0px rgb(0 0 0 / 15%);*/
            /*-moz-box-shadow: 0px 0px 50px 0px rgba(0,0,0,0.15);*/
            /*box-shadow: 0px 0px 50px 0px rgb(0 0 0 / 15%);*/
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

    </style>
@endsection

@section('banner')
@endsection


@section('content')
    <main>
        <div id="error_page">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-7 col-lg-9">
                        <figure><img src="https://bashooka.com/wp-content/uploads/2015/10/404-errrrr-page-11.jpg" alt="" class="img-fluid"></figure>
                        <h4>We're sorry, but the page you were looking for doesn't exist.</h4>
                        <form>
                            <div class="search_bar">
                                <input type="text" class="form-control" placeholder="What are you looking for?">
                                <input type="submit" value="Search">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /error -->
    </main>
    </body>
@endsection
@section('custom_js')
@endsection
