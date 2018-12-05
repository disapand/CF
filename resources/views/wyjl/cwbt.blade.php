@extends('layouts.header')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/swiper.custom.css') }}">
    <style>

        .bak {
            text-decoration: none;
        }

        .bak:hover {
            color: #008cd5;
            text-decoration: none;
        }

        .sider-bar {
            padding-left: 0;
        }

        .sider-bar li {
            cursor: pointer;
            list-style: none;
            width: 98%;
            background-color: #ccc;
            margin: 5px 0;
            padding: 5px 0;
            text-align: center;
        }

        li a:hover {
            text-decoration: none;
            color: #fff;
        }

        .li-active {
            color: #fff;
            background-color: #008cd5 !important;
        }

        .li-active a {
            text-decoration: none;
            color: #fff;
        }

        .sider-bar li:hover {
            color: #fff;
            background-color: #008cd5;
        }

        .bt {
            display: inline-block;
            margin: 6% 0;
            margin-left: 50%;
            transform: translateX(-50%);
            font-size: 1.6em;
            color: #fff;
            background-color: #008cd5;
            border: #008cd5 solid 1px;
            border-radius: 10px;
            padding: 1% 6%;
        }

        p{
            font-family: FZLT;
            text-indent: 2em;
            text-align: justify;
            line-height: 2em;
        }
    </style>
@endsection

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}"  class="active">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wljl/cwtjq') }}" class="active">崇文塔景区</a></li>
    <li><a href="{{ url('/wljl/zbjq') }}">周边景区</a></li>
@endsection

@section('contents')

    <div class="row" style="margin-bottom: 30px;margin-top: 30px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <a href="{{ url('/wljl/cwtjq') }}" class="bak"><< 返回</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
        	<ul class="sider-bar">
                <li class="li-active"><a href="{{ url('wljl/cwbt') }}">崇文宝塔</a></li>
                <li><a href="{{ url('/wljl/cwgxg') }}">崇文国学馆</a></li>
                <li><a href="{{ url('/wljl/sqfybwg') }}">三秦非遗博览馆</a></li>
                <li><a href="{{ url('/wljl/sswhblg') }}">陕商文化博览馆</a></li>
                <li><a href="{{ url('/wljl/gyqqg') }}">国艺秦腔馆</a></li>
            </ul>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/cwbt.jpg') }}" alt="" class="img-100">
                <div class="bt">中国第一高砖塔崇文塔</div>
            <p>崇文塔原名铁佛寺塔—我国第一高砖塔，始建于明万历1591年历时19年建成，明朝刑部尚书李世达为了倡导泾阳、三原、高陵三县学童努力向学而修建，故命名为崇文宝塔，塔高87.218米，共13层，八角形底座，塔身每层均设有四门四龛，龛中有或坐或立、形态各异、造型生动的明代石刻佛像48尊。塔内有砖砌台阶，自下而上盘旋至塔顶。</p>
            {{--<p>相传明朝之前泾阳、三原、高陵三县鲜出文人，李尚书向最有名的风水大师求教，风水大师说泾阳西北有嵯峨山，山峰俊秀形似笔架，只是有架无笔故文不盛官不兴。于是李尚书在此修建了崇文塔，寓意为笔，宝塔紧邻泾河，以水为墨，以山为架，有架有笔有墨，之后泾阳就多出文人，如政治家教育家书法家于一身的于佑任、左联创始人冯润漳，国学大师吴宓，当代作家李若冰、著名教育家雷抒雁等。</p>--}}
            <p style="margin-bottom: 100px">相传明朝之前泾阳、三原、高陵三县鲜出文人，李尚书向最有名的风水大师求教，风水大师说泾阳西北有嵯峨山，山峰俊秀形似笔架，只是有架无笔故文不盛官不兴。于是李尚书在此修建了崇文塔，寓意为笔，宝塔紧邻泾河，以水为墨，以山为架，有架有笔有墨，之后泾阳就多出文人，如政治家教育家书法家于一身的于佑任、左联创始人冯润漳，国学大师吴宓，当代作家李若冰、著名教育家雷抒雁等。</p>
        </div>
    </div>

@endsection
