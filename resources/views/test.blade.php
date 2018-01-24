@extends('layouts.header')

@section('css')
    @parent
    <link rel="stylesheet" href="css/swiper.custom.css">

    <style>
        .swiper-slide img {
            width: 100%;
        }

        .djtp {
            border: none;
        }

        .djtp h3 a:hover {
            color: #429edc;
            text-decoration: none;
        }

        .fyq2 {
            margin: 10px 0;
            width: 100%;
            text-align: center;
        }

        .fyq2 span {
            margin-right: 15px;
        }

        hr {
            border-bottom: 3px #008cd6 solid;
            margin-top: 30px;
            margin-bottom: -10px;
        }

        .fwdt ul li {
            margin-left: -20px;
            margin-top: 10px;
        }

        .tab-pane ul li {
            margin: 10px 0;
        }

        .vibg {
            background-image: url("{{ url('images/vi.jpg') }}");
            background-size: cover;
        }

        .vibg .swiper-pagination-bullet-active {
            background-color: #8ec322;
        }

    </style>

@endsection

@section('contents')

    <div class="row">
        <div class="col-md-12">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </div>

    {{-- 特色党建、企业扶贫、团队建设 --}}
    <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/tp1.jpg" alt="..." style="width: 100%;">
                        <div class="caption text-center">
                            <h3><a href="{{ url('/tsdj') }}">特色党建</a></h3>
                            <p>围绕业务抓党建 抓好党建促发展</p>
                        </div>
                    </div>

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/tp2.jpg" alt="..." style="width: 100%;">
                        <div class="caption text-center">
                            <h3><a href="{{ url('/qyfp') }}">企业扶贫</a></h3>
                            <p>践行精准扶贫政策 加快城乡统筹发展</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/tp3.jpg" alt="..." style="width: 100%;">
                        <div class="caption text-center">
                            <h3><a href="{{ url('/tdjs') }}">团队建设</a></h3>
                            <p>科技创新服务 诚信实现双赢 专业成就精品</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="padding-top: 50px; padding-bottom: 50px;background-color: #eeeeee">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="images/xwzx.png" alt="">
                </div>
            </div>

            <div class="row" style="margin-top: 50px;margin-bottom: 50px;">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#"><img src="images/xw1.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="images/xw1.jpg" alt=""></a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#"><img src="images/xw1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination fyq2"></div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#xxxq" aria-controls="#xxxq" role="tab"
                                                                  data-toggle="tab">西咸新区新闻</a></li>
                        <li role="presentation"><a href="#jhxc" aria-controls="jhxc" role="tab"
                                                   data-toggle="tab">泾河新城新闻</a>
                        </li>
                        <li role="presentation"><a href="#jhcf" aria-controls="jhcf" role="tab"
                                                   data-toggle="tab">泾河城服新闻</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="xxxq">
                            <ul>
                                <li><a href="">泾河新城2017年第45周空气质量</a></li>
                                <li><a href="">关于开展泾河新城砂石场、白灰场</a></li>
                                <li><a href="">泾河新城权责清单目录</a></li>
                                <li><a href="">陕西省西咸新区泾河新城政务服务中心</a></li>
                                <li><a href="">产为孵化基地规划公示牌</a></li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="jhxc">
                            <ul>
                                <li><a href="">泾河新城2017年第45周空气质量</a></li>
                                <li><a href="">关于开展泾河新城砂石场、白灰场</a></li>
                                <li><a href="">泾河新城权责清单目录</a></li>
                                <li><a href="">产为孵化基地规划公示牌</a></li>
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="jhcf">
                            <ul>
                                <li><a href="">关于开展泾河新城砂石场、白灰场</a></li>
                                <li><a href="">泾河新城权责清单目录</a></li>
                                <li><a href="">陕西省西咸新区泾河新城政务服务中心</a></li>
                                <li><a href="">产为孵化基地规划公示牌</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/dt1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/dt1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/dt1.jpg" alt="">
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination"></div>

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4" style="margin-top: 100px;margin-bottom: 50px;">
                    <img src="images/fwdt.png" alt="">
                </div>
            </div>
            <div class="row fwdt" style="margin-top: 50px; margin-bottom: 50px;">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/fw2.jpg" alt="..." style="width: 100%;">
                        <hr>
                        <div class="caption">
                            <h3><a href="#">研学活动动态</a></h3>
                            <ul>
                                <li>泾河新城2017年第45周空气质量</li>
                                <li>关于开展泾河新城砂石场、白灰场</li>
                                <li>泾河新城权责清单目录</li>
                                <li>陕西省西咸新区泾河新城政务服务中心</li>
                                <li>产为孵化基地规划公示牌</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/fw1.jpg" alt="..." style="width: 100%;">
                        <hr>
                        <div class="caption">
                            <h3><a href="#">定制服务动态</a></h3>
                            <ul>
                                <li>泾河新城2017年第45周空气质量</li>
                                <li>关于开展泾河新城砂石场、白灰场</li>
                                <li>泾河新城权责清单目录</li>
                                <li>陕西省西咸新区泾河新城政务服务中心</li>
                                <li>产为孵化基地规划公示牌</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/fw3.jpg" alt="..." style="width: 100%;">
                        <hr>
                        <div class="caption">
                            <h3><a href="#">综合服务动态</a></h3>
                            <ul>
                                <li>泾河新城2017年第45周空气质量</li>
                                <li>关于开展泾河新城砂石场、白灰场</li>
                                <li>泾河新城权责清单目录</li>
                                <li>陕西省西咸新区泾河新城政务服务中心</li>
                                <li>产为孵化基地规划公示牌</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 vibg">
            <div class="col-md-4 col-md-offset-3" style="margin-top: 50px;margin-bottom: 50px;">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="images/wy.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/wy.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="images/wy.jpg" alt="">
                        </div>
                    </div>
                    <!-- 如果需要分页器 -->
                    <div class="swiper-pagination"></div>

                    <!-- 如果需要导航按钮 -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                </div>
            </div>

            <div class="col-md-3 fw" style="margin-left: 20px;">
                <div class="row" style="margin-top: 110px;">
                    <img src="images/fz.png" alt="">
                    <a href="" style="margin-left: 30px;"><img src="images/fwzx.png" alt=""></a>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <img src="images/ta.png" alt="">
                    <a href="" style="margin-left: 30px;"><img src="images/jqfw.png" alt=""></a>
                </div>
                <div class="row" style="margin-top: 50px;">
                    <img src="images/zhu.png" alt="">
                    <a href="" style="margin-left: 30px;"><img src="images/zsyz.png" alt=""></a>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 50px;margin-bottom: 50px;">
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a href="#qsy" aria-controls="qsy" role="tab" data-toggle="tab">相关企事业单位</a>
                </li>
                <li role="presentation"><a href="#hzhb" aria-controls="hzhb" role="tab" data-toggle="tab">合作伙伴</a></li>
                <li role="presentation"><a href="#hywz" aria-controls="hywz" role="tab" data-toggle="tab">行业网站链接</a>
                </li>
            </ul>

            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="qsy">
                    <ul style="list-style: none;">
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_03.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_05.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_07.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_09.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_11.jpg" alt=""></li>
                    </ul>
                </div>

                <div role="tabpanel" class="tab-pane" id="hzhb">
                    <ul style="list-style: none;">
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_03.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_05.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_07.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_09.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_11.jpg" alt=""></li>
                    </ul>
                </div>

                <div role="tabpanel" class="tab-pane" id="hywz">
                    <ul style="list-style: none;">
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_03.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_05.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_07.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_09.jpg" alt=""></li>
                        <li style="float: left;margin-right: 10px;"><img src="images/hze_11.jpg" alt=""></li>
                    </ul>
                </div>
            </div>


        </div>

    </div>

@endsection

@section('script')
    @parent
    <script src="js/swiper.custom.js"></script>

    <script>
        $(document).ready(function () {
            var mySwiper = new Swiper('.swiper-container', {
                autoplay: 5000,
                speed: 1500,
                direction: 'horizontal',
                loop: true,
                autoplayDisableOnInteraction: false,

                // 如果需要分页器
                pagination: '.swiper-pagination',
                paginationClickable: true,

                // 如果需要前进后退按钮
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
            })

        })
    </script>

@endsection