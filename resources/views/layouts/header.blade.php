<!doctype html>
<html lang="{{ app() -> getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/favicon.ico">
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

        a:hover {
            background-color: transparent !important;
        }

        .footer {
            background-color: #eee;
        }

        .footer .row {
            margin-left: 0;
            margin-right: 0;
        }

        .ewm {
            margin-top: 15%;
            margin-bottom: 3%;
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
                <li><a href="{{ url('/wygl') }}">物业管理</a></li>
                <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
                <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
                <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
                <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
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
            <div class="col-md-4 col-md-offset-4">
                <img src="{{ asset('images/ewm.jpg') }}" alt="" class="center-block ewm">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <p class="text-center">咨询热线</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <img src="{{ asset('images/lxdh.png') }}" alt="" class="center-block">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="text-center" style="margin: 5% 0;">
                    <span class="glyphicon glyphicon-map-marker dtbz"></span>
                    <span style=" font-family: FZLT;font-size: 1.2em;">陕西省西咸新区泾河新城城市综合服务有限公司</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <p class="text-center" style="font-size: 0.8em; color: #434343; margin-top: 5%; margin-bottom: 5%">
                    泾河城服版权所有&nbsp;&nbsp;&nbsp;JINGHE CITY SERVICE &copy; All Right Reserve</p>
            </div>
        </div>

    </div>

</div>


</body>
@section('script')
@show

</html>