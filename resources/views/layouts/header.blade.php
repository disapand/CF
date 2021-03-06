<!doctype html>
<html lang="{{ app() -> getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--SEO优化--}}
    <meta name="keywords" content="泾河,城服,泾河城,泾河城服">
    <meta name="description" content="泾河城服官方网站">
    <meta name="sogou_site_verification" content="cGlaUgC7We"/>
    <meta name="baidu-site-verification" content="Jr1eK9uQ0J" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="bookmark" type="image/x-icon" href="favicon.ico"/>
    　　
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    　　
    <link rel="icon" href="favicon.ico">
    <script>
    </script>
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}"></script>
    @show
    <title>{{ $title or '泾河城服' }}</title>
    <style>
        .navbar-header {
            margin-left: 15%;
            margin-right: 10%;
        }

        .ejdh > li > a {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .ejdh a {
            height: 100%;
            color: #fff;
            opacity: .55;
        }

        .ejdh .active {
            color: #e9f4f4;
            border-bottom: #e9f4f4 solid 1px;
            opacity: 1;
        }

        .nav li {
            display: inline-block;
        }

        .ejdh ul a:active {
            color: #e9f4f4;
        }

        .footer {
            background-color: #eee;
        }

        .footer .row {
            margin-left: 0;
            margin-right: 0;
        }

        .dtbz {
            font-size: 1.2em;
            padding-right: 1em;
        }

        .end {
            background-image: url(" {{ asset('images/vi.jpg') }}");
            background-size: cover;
            height: 5px;
        }

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .col-md-12, .col-xs-12, .col-lg-12, .col-sm-12 {
            padding-left: 0;
            padding-right: 0;
        }

        .bq {
            font-size: .6em;
        }

        .bq p {
            color: #999;
        }

    </style>
</head>
<body>

<div class="row dhjj">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <a href="{{ url('/') }}"><img src="{{ asset('images/logo-new.png') }}" alt="" class="margin_logo" style="width: 200px;"></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8" id="yjdh">
    	<ul>
            @section('yjdh')
                <li>
                    <a href="{{ url('/') }}" class="active">走进城服</a>
                </li>
                <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
                <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
                <li><a href="{{ url('/wygl') }}">物业管理</a></li>
                <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
                <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
                <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
            @show
        </ul>
    </div>
</div>

<div class="row" style="margin: 0">
    <div class="col-md-12 navbar-bg">
        <ul class="nav navbar-nav ejdh" id="ejdh">
            @section('ejdh')
                <li><a href="{{ url('/qyjj') }}">企业简介</a></li>
                <li><a href="{{ url('/fzyj') }}">发展愿景</a></li>
                <li><a href="{{ url('/zzjg') }}">组织架构</a></li>
            @show
        </ul>
    </div>
</div>
{{--正文内容--}}
@yield('contents')

{{--页面底部--}}
<div class="container-fluid">
    <div class="footer">

        <div class="row">
            <div class="col-md-12 end"></div>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <img src="{{ asset('images/ewm.jpg') }}" alt="" class="center-block ewm">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <p class="text-center">联系我们</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 col-md-offset-5">
                <img src="{{ asset('images/lxdhn.png') }}" alt="" class="center-block lxdh">
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="text-center" style="margin: 1% 0;">
                    <span class="glyphicon glyphicon-map-marker dtbz"></span>
                    <span style=" font-family: FZLT;">陕西省西咸新区泾河新城城市综合服务有限公司</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <p class="text-center" style="font-size: 0.8em; color: #434343; margin-top: 1%; margin-bottom: 1%">
                    泾河城服版权所有&nbsp;&nbsp;&nbsp;JINGHE CITY SERVICE &copy; All Right Reserve</p>
            </div>
        </div>

        <div class="row bq" style="margin-top: 1%;">
            <div class="col-md-8 col-md-offset-2">
                <p class="text-center" style="line-height: 0.5em">主办：陕西省西咸新区泾河新城城市综合服务有限公司&nbsp;&nbsp;&nbsp;&nbsp;电话：029-36390885</p>
                <p class="text-center" style="line-height: 0.5em">地址：陕西省西咸新区泾河新城产业孵化中心3号楼C区</p>
                <p class="text-center" style="line-height: 0.5em">备案号陕ICP备18001733&nbsp;&nbsp;&nbsp;&nbsp;P.C.：713700&nbsp;&nbsp;&nbsp;&nbsp;邮箱：jinghechengfu@126.com</p>
            </div>
        </div>

    </div>

</div>


</body>
@section('script')
@show

</html>
