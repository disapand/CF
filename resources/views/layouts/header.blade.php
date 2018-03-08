<!doctype html>
<html lang="{{ app() -> getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="bookmark" type="image/x-icon" href="favicon.ico"/>
    　　
    <link rel="shortcut icon" href="favicon.ico">
    　　
    <link rel="icon" href="favicon.ico">
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

        .ejdh ul a {
            padding-top: 15px;
            padding-bottom: 0;
            height: 100%;
            color: #fff;
            opacity: .55;
        }

        .ejdh ul .active {
            color: #e9f4f4;
            border-bottom: #e9f4f4 solid 1px;
            opacity: 1;
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

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/logo_cf.png') }}" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav" id="yjdh" style="padding-top: 10px;">
            @section('yjdh')
                <li>
                    <a href="{{ url('/') }}" class="active">走进城服</a>
                </li>
                <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
                <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
                <li><a href="{{ url('/wygl') }}">物业管理</a></li>
                <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
                <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
                <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
            @show
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>

<div class="container-fluid">
    <div class="row" style="margin: 0">
        <div class="col-md-12 navbar-bg">
            <div class="col-md-12 ejdh">
                <ul class="nav navbar-nav ejdh" id="ejdh">
                    @section('ejdh')
                        <li><a href="{{ url('/qyjj') }}">企业简介</a></li>
                        <li><a href="{{ url('/fzyj') }}">发展愿景</a></li>
                        <li><a href="{{ url('/zzjg') }}">组织架构</a></li>
                    @show
                </ul>
            </div>
        </div>
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
                <img src="{{ asset('images/lxdh.png') }}" alt="" class="center-block lxdh">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="text-center" style="margin: 5% 0;">
                    <span class="glyphicon glyphicon-map-marker dtbz"></span>
                    <span style=" font-family: FZLT;">陕西省西咸新区泾河新城城市综合服务有限公司</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <p class="text-center" style="font-size: 0.8em; color: #434343; margin-top: 5%; margin-bottom: 5%">
                    泾河城服版权所有&nbsp;&nbsp;&nbsp;JINGHE CITY SERVICE &copy; All Right Reserve</p>
            </div>
        </div>

        <div class="row bq" style="margin-top: 30px;">
            <div class="col-md-6 col-md-offset-3">
                <p class="text-center">主办：陕西省西咸新区开发建设管理委员会&nbsp;&nbsp;&nbsp;&nbsp;电话：029-33186000&nbsp;&nbsp;&nbsp;&nbsp;传真：029-33186111</p>
                <p class="text-center">地址：陕西省西咸新区沣泾大道西一路1号西咸大厦&nbsp;&nbsp;&nbsp;&nbsp;邮编：712000&nbsp;&nbsp;&nbsp;&nbsp;站点地图</p>
                <p class="text-center">网站标识码：6190000001&nbsp;&nbsp;&nbsp;&nbsp;陕ICP备18001733&nbsp;&nbsp;&nbsp;&nbsp;陕公网安备6101960200052</p>
            </div>
        </div>

    </div>

</div>


</body>
@section('script')
@show

</html>