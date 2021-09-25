@extends('clients.master')
@section('title')
    Home
@endsection
@section('custom_css')
    <link rel="stylesheet" href="/assets/css/home.css">
    <link rel="stylesheet" href="/assets/css/index-content.css">
@endsection

@section('banner')
    <div class="background-img"></div>
@endsection

@section('content')
    <div class="mt-2 mt-lg-5 mt-md-4 mt-sm-3">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12">
                <div class="heading-minimal">
                    <div class="sub-title">Các món chay hàng đầu</div>
                    <h3 class="head-title">Danh mục</h3>
                </div>
            </div>
            @foreach($categories as $category)
                <div class="col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6 category-items-new">
                    <div class="category-main">
                        <a href="/products?category={{$category->id}}">
                            <img
                                loading="lazy" alt="" class="cate-images"
                                src="{{$category->image}}" style="object-fit: cover;width: 100% !important;"></a>
                        <div class="category-text-box">
                            <div class="category-text-inner">
                                <a href="#">
                                    <h3>{{$category->name}}</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="mt-1 mt-lg-3 mt-md-3 mt-sm-3">
        <div class="row">
            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <div class="sub-title">Các món chay hàng đầu</div>
                </div>
            </div>

            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <h3 class="head-title">Các món chay nổi bật</h3>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                <div class="row">
                    @foreach($featured as $featured_food)
                        <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6">
                            <div class="res-3-box ">
                                <div class="res-2-img parallex-new">
                                    <a href="#">
                                        <img style="object-fit: cover;height:200px;width:100%"
                                             src="{{explode(',',$featured_food->image)[0]}}" alt=""
                                             class="img-fluid">
                                    </a>
                                </div>
                                <div class="res-2-bg-white">
                                    <div class="res-2-inner">
                                        <div class="res-2-text">
                                            <a href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                <div class="text-s1">{{$featured_food->name}}</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="res-2-box">
                                        <ul>
                                            <li>
                                                <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                    {{number_format($featured_food->price)}} đ
                                                </span>
                                                    <span class="location-png wrap-adding">
                                                    <a href="#">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <h3 class="head-title">Các món ăn chay được bán</h3>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                <div class="row">
                    @if($selling)
                        @foreach($selling as $selling_food)
                            <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
                                <div class="res-3-box ">
                                    <div class="res-2-img parallex-new">
                                        <a href="#">
                                            <img height="200px" width="100%" style="object-fit: cover"
                                                 src="{{explode(',',$selling_food->image)[0]}}" alt="">
                                        </a>
                                    </div>
                                    <div class="res-2-bg-white">
                                        <div class="res-2-inner">
                                            <div class="res-2-text">
                                                <a href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                    <div class="text-s1">{{$selling_food->name}}</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="res-2-box">
                                            <ul>
                                                <li>
                                                    <div class="res-2-map-product d-flex justify-content-sm-between">
                                                        <span class="location-png">
                                                            <i class="fas fa-dollar-sign dollar-icon"></i>
                                                            {{number_format($selling_food->price)}} đ
                                                        </span>
                                                        <span class="location-png wrap-adding">
                                                            <a href="#">
                                                                <div class="btn-adding">+</div>
                                                            </a>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
                <div class="heading-minimal">
                    <h3 class="head-title">Các món chay mới</h3>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12 col-xxl-12 col-md-12">
                <div class="row">
                    @foreach($new as $new_food)
                        <div class="eq-height col-xl-3 col-lg-6 col-md-4 col-sm-6 col-6">
                            <div class="res-3-box">
                                <div class="res-2-img parallex-new">
                                    <a href="#">
                                        <img height="200px" width="100%" style="object-fit: cover"
                                             src="{{explode(',',$new_food->image)[0]}}" alt="">
                                    </a>
                                </div>
                                <div class="res-2-bg-white">
                                    <div class="res-2-inner">
                                        <div class="res-2-text">
                                            <a href="https://marketplace.foodotawp.com/store/arcadian-cafe/">
                                                <div class="text-s1">{{$new_food->name}}</div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="res-2-box">
                                        <ul>
                                            <li>
                                                <div class="res-2-map-product d-flex justify-content-sm-between">
                                                <span class="location-png">
                                                    <i class="fas fa-dollar-sign dollar-icon"></i>
                                                    {{number_format($new_food->price)}} đ
                                                </span>
                                                    <span class="location-png wrap-adding">
                                                    <a href="#">
                                                        <div class="btn-adding">+</div>
                                                    </a>
                                                </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="ndElDd">
            <g-more-link class="mIKy0c OSrXXb dGWpb">
                <hr class="pb5vrc">
                <div class="MXl0lf mtqGb">
                    <span class="wUrVib OSrXXb">LỢI ÍCH TẠI COM CHAY</span>
                </div>
            </g-more-link>
        </div>
    </div>

    <section>
        <div class="row my-lg-5 mt-0 my-sm-4 my-md-4">
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 div-an-toan">
                <div class="icon-box-img mb-4">
                    <i class="fas fa-hand-holding-heart fa-5x"></i>
                </div>
                <div class="icon-box-text">
                    <h4 style="text-align: center;">Sản phẩm chất lượng, an toàn</h4>
                    <p style="text-align: center;">Tất cả các mặt hàng Comchay bán đều là những sản phẩm chất lượng,an
                        toàn và có nguồn gốc xuất xứ rõ ràng.</p>
                    <p style="text-align: center;">Comchay hiểu rằng chất lượng và tốt cho sức khỏe là yếu tố hàng đầu
                        khi khách hàng lựa chọn thực phẩm chay.</p>
                    <p style="text-align: center;">Comchay có những tiêu chuẩn chất lượng nghiêm ngặt nhất để cung cấp
                        các sản phẩm chất lượng.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 div-dich-vu" style="border-left: 1px solid #ececec;">
                <div class="icon-box-img mb-4 check-img">
                    <i class="fas fa-check fa-5x"></i>
                </div>
                <div class="icon-box-text last-reset text-center">
                    <h4>Dịch vụ ưu đãi tốt nhất, đổi trả miễn phí.</h4>
                    <p>Comchay luôn nỗ lực mang đến một dịch vụ ưu đãi tốt nhất cho khách hàng.</p>
                    <p>Chúng tôi cam kết hoàn tiền đổi trả hàng miễn phí với bất kỳ lý do gì.</p>
                    <p>Comchay hỗ trợ vận chuyển tận nhà cho các khàng hàng.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 div-sale" style="border-left: 1px solid #ececec;">
                <div class="icon-box-img mb-4">
                    <i class="fas fa-piggy-bank fa-5x"></i>
                </div>
                <div class="icon-box-text last-reset text-center">
                    <h4>Khuyến mãi, tặng quà và giảm giá để tri ân</h4>
                    <p>Comchay luôn mong muốn khách hàng được thưởng thức nhiều hơn và tiết kiệm hơn khi đi mua sắm thực
                        phẩm chay.</p>
                    <p>Comchay thường xuyên khuyến mãi, tặng quà và giảm giá để tri ân tất cả khách hàng kính yêu của
                        mình.</p>
                </div>
            </div>
        </div>
    </section>

@endsection



@section('custom_js')
    <script>
        var elements = document.querySelectorAll('.ant-btn-block .ant-divider-horizontal');

        show(elements, 'inline-block'); // The second param allows you to specify a display value

        show(document.getElementById('hidden-input'));

        function show(elements, specifiedDisplay) {
            elements = elements.length ? elements : [elements];
            for (var index = 0; index < elements.length; index++) {
                elements[index].style.display = specifiedDisplay || 'block';
            }
        }
    </script>
@endsection
