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

        .tab-content .active {
            display: inline-block;
        }

        .yqlj span{
            line-height: 2.5em;
            padding: 0 25px;
            border-right: #333 solid 1px;
        }

        .yqlj a:hover, .yqlj a:focus {
            text-decoration: none;
            color: #008cd5;
        }

        .caption li, .xwlb li {
            white-space: nowrap;
            -ms-text-overflow: ellipsis;
            text-overflow: ellipsis;
            overflow: hidden;
        }

        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4{
            padding-left: 0;
            padding-right: 0;
        }

        .caption ul {
            padding-left: 0;
        }

    </style>

@endsection

@section('contents')

    <div class="row" style="margin-right: 0;margin-left: 0;width: 100%;">
        <div class="col-md-12" style="padding-left: 0;padding-right: 0;">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="images/banner1.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/banner2.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="images/banner3.jpg" alt="">
                    </div>
                </div>
                <!-- 如果需要分页器 -->
                <div class="swiper-pagination visible-md-block visible-lg-block"></div>

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev visible-md-block visible-lg-block"></div>
                <div class="swiper-button-next visible-md-block visible-lg-block"></div>

            </div>
        </div>
    </div>

    {{-- 特色党建、企业扶贫、团队建设 --}}
    <div class="row" style="margin-top: 3%; margin-bottom: 3%;margin-left: 0;margin-right: 0">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-xs-offset-1 col-sm-offset-1">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/tp1.png" alt="..." style="width: 100%;">
                        <div class="caption text-center">
                            <h3><a href="{{ url('/tsdj') }}">特色党建</a></h3>
                            <p>围绕业务抓党建 <br /> 抓好党建促发展</p>
                        </div>
                    </div>

                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/tp2.jpg" alt="..." style="width: 100%;">
                        <div class="caption text-center">
                            <h3><a href="{{ url('/qyfp') }}">企业扶贫</a></h3>
                            <p>践行精准扶贫政策 <br /> 加快城乡统筹发展</p>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/tp3.jpg" alt="..." style="width: 100%;">
                        <div class="caption text-center">
                            <h3><a href="{{ url('/tdjs') }}">团队建设</a></h3>
                            <p>科技创新服务<br />专业成就精品</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row"
         style="padding-top: 3%; padding-bottom: 3%;background-color: #eeeeee;margin-right: 0;margin-left:0 ">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <img src="images/xwzx.png" alt="" class="center-block img-100">
                </div>
            </div>

            <div class="row" style="margin-top: 3%;">
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="margin-bottom: 50px;">
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
                    <div class="swiper-pagination fyq2 visible-md-block visible-lg-block"></div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="padding-right: 15px;padding-left: 15px;">

                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#xxxq" aria-controls="xxxq" role="tab"
                                                                  data-toggle="tab">西咸新区新闻</a></li>
                        <li role="presentation"><a href="#jhxc" aria-controls="jhxc" role="tab"
                                                   data-toggle="tab">泾河新城新闻</a>
                        </li>
                        <li role="presentation"><a href="#jhcf" aria-controls="jhcf" role="tab"
                                                   data-toggle="tab">泾河城服新闻</a>
                        </li>
                    </ul>

                    <div class="tab-content xwlb">
                        <div role="tabpanel" class="tab-pane active" id="xxxq" style="width: 100%;">
                            <ul>
                                @foreach($xxxq as $xx)
                                    <li><a href="{{ url('/admin/news/'.$xx['id'])}}">{{ $xx['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="jhxc" style="width: 100%;">
                            <ul>
                                @foreach($jhxq as $xq)
                                    <li><a href="{{ url('/admin/news/'.$xq['id'])}}">{{ $xq['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="jhcf" style="width: 100%;">
                            <ul>
                                @foreach($jhcf as $cf)
                                    <li><a href="{{ url('/admin/news/'.$cf['id'])}}">{{ $cf['title'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 0;margin-right: 0;width: 100%;">
        <div class="col-md-12" style="padding-right: 0;padding-left: 0;">
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
                <div class="swiper-pagination visible-md-block visible-lg-block"></div>

                <!-- 如果需要导航按钮 -->
                <div class="swiper-button-prev visible-md-block visible-lg-block"></div>
                <div class="swiper-button-next visible-md-block visible-lg-block"></div>

            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 0;margin-right: 0;width: 100%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-4 col-lg-4">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4"
                     style="margin-top: 6%;margin-bottom: 1%;">
                    <img src="images/fwdt.png" alt="" class="center-block img-100">
                </div>
            </div>

            <div class="row fwdt" style="margin-top: 3%; margin-bottom: 3%;">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/fw2.jpg" alt="..." style="width: 100%;">
                        <hr>
                        <div class="caption text-center">
                            <h3><a href="{{ url('/yxhd') }}">研学活动动态</a></h3>
                            <ul class="visible-md-block visible-lg-block">
                                <li><a href="{{ url('/yxhd/jqld/blhx') }}">博览华夏</a></li>
                                <li><a href="{{ url('/yxhd/jqld/ddyd') }}">大地原点</a></li>
                                <li><a href="{{ url('yxhd/jqld/hsjy2') }}">红色大地</a></li>
                                <li><a href="{{ url('yxhd/jqld/ngty') }}">农耕体验</a></li>
                                <li><a href="{{ url('yxhd/jqld/spgd') }}">寿平古渡</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/fw1.jpg" style="width: 100%;">
                        <hr>
                        <div class="caption text-center">
                            <h3><a href="{{ url('/szgc/lmwx') }}">市政工程动态</a></h3>
                            <ul class="visible-md-block visible-lg-block">
                                <li><a href="{{ url('/szgc/lmwx') }}">路面维修</a></li>
                                <li><a href="{{ url('/szgc/ldwx') }}">路灯维修</a></li>
                                <li><a href="{{ url('/szgc/ldlh') }}">路灯亮化</a></li>
                                <li><a href="{{ url('/szgc/fwts') }}">氛围提升</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="thumbnail center-block djtp">
                        <img src="images/fw3.jpg" alt="..." style="width: 100%;">
                        <hr>
                        <div class="caption text-center">
                            <h3><a href="{{ url('/zhfw/zhcs') }}">综合服务动态</a></h3>
                            <ul class="visible-md-block visible-lg-block">
                                <li><a href="{{ url('/dzfw/zwpx') }}">政务服务</a></li>
                                <li><a href="{{ url('/zhfw/jjny') }}">洁净能源</a></li>
                                <li><a href="{{ url('/dzfw') }}">回迁安置</a></li>
                                <li><a href="{{ url('/zhfw/ggjt') }}">公共交通</a></li>
                                <li><a href="{{ url('/zhfw/zhcs') }}">智慧城市</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-left: 0;margin-right: 0;width: 100%;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 vibg" style="padding-top: 3%;padding-bottom: 3%;">
            <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-xs-offset-1 col-sm-offset-1">
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
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
                        <div class="swiper-pagination visible-md-block visible-lg-block"></div>

                        <!-- 如果需要导航按钮 -->
                        <div class="swiper-button-prev visible-md-block visible-lg-block"></div>
                        <div class="swiper-button-next visible-md-block visible-lg-block"></div>

                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <a href="{{ url('/wygl') }}"><img src="{{ asset('images/wyfuzn.png') }}" alt=""
                                                              class="img-100 btm"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <a href="{{ url('/yxhd/jqld') }}"><img src="{{ asset('images/jqfwzn.png') }}" alt=""
                                                                   class="img-100 btm"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                            <a href="{{ url('/zsyy') }}"><img src="{{ asset('images/zsyzzn.png') }}" alt=""
                                                              class="img-100 btm"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 3%;margin-bottom: 3%">
        <div class="col-md-8 col-md-offset-2" style="margin-top: 3%;margin-bottom: 3%;">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#qsy" aria-controls="qsy" role="tab"
                                                                      data-toggle="tab">相关链接</a>
                            </li>
                            <li role="presentation"><a href="#hzhb" aria-controls="hzhb" role="tab"
                                                       data-toggle="tab">新闻媒体网站</a></li>
                            <li role="presentation"><a href="#hywz" aria-controls="hywz" role="tab"
                                                       data-toggle="tab">合作伙伴</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row yqlj" style="margin-top: 30px;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tab-content" id="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="qsy">
                                <span><a href="http://www.xixianxinqu.gov.cn/" target="_blank">西咸新区</a></span>
                                <span><a href="http://www.jinghenewcity.gov.cn/" target="_blank">泾河新城</a></span>
                                <span><a href="http://www.xxanc.gov.cn/" target="_blank">空港新城</a></span>
                                <span><a href="http://www.qhxc.gov.cn/" target="_blank">秦汉新城</a></span>
                                <span><a href="http://www.fcfx.gov.cn/" target="_blank">沣西新城</a></span>
                                <span><a href="http://www.xxfd.gov.cn/" target="_blank">沣东新城</a></span>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="hzhb">
                                <span><a href="http://www.xinhuanet.com/" target="_blank">新华网</a></span>
                                <span><a href="http://www.people.com.cn/" target="_blank">人民网</a></span>
                                <span><a href="http://www.sxdaily.com.cn/" target="_blank">陕西传媒网</a></span>
                                <span><a href="http://www.hsw.cn/" target="_blank">华商网</a></span>
                                <span><a href="http://hsb.hsw.cn/" target="_blank">华商报</a></span>
                                <span><a href="http://esb.sxdaily.com.cn/sxrb/20180306/html/index.htm" target="_blank">陕西日报</a></span>
                                <span><a href="http://epaper.xiancn.com/" target="_blank">西安报业</a></span>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="hywz">
                                <span><a href="http://www.jxftea.cn" target="_blank">茯茶镇</a></span>
                                <span><a href="http://www.jingheshiye.cn/" target="_blank">泾河实业</a></span>
                                <span><a href="http://www.jinghefucha.com/" target="_blank">泾河茯茶</a></span>
                                <span><a href="http://t.cn/REYQjhY" target="_blank">寿平民宿</a></span>
                                <span><a href="http://xa.lehuacheng.com/index.php" target="_blank">乐华城</a></span>
                                <span><a href="http://t.cn/REYQNvz" target="_blank">泾河智慧农业园</a></span>
                                <span><a href="" target="_blank">添丽茶事</a></span>
                                <span><a href="" target="_blank">煜恒国际教育旅行社</a></span>
                                <span><a href="http://www.spg.com.cn/" target="_blank">地电（SPG）</a></span>
                                <span><a href="http://www.raising.net.cn/" target="_blank">泾河热力（启迪控股|瑞行集团）</a></span>
                            </div>
                        </div>
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

            // window.location.href = /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent) ? '/wap' : ' ' ;

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

            /*Tabs内容居中*/
        })
    </script>

@endsection