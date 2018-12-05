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
                <li><a href="{{ url('wljl/cwbt') }}">崇文宝塔</a></li>
                <li><a href="{{ url('/wljl/cwgxg') }}">崇文国学馆</a></li>
                <li><a href="{{ url('/wljl/sqfybwg') }}">三秦非遗博览馆</a></li>
                <li><a href="{{ url('/wljl/sswhblg') }}">陕商文化博览馆</a></li>
                <li class="li-active"><a href="{{ url('/wljl/gyqqg') }}">国艺秦腔馆</a></li>
            </ul>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/gyqqg1.jpg') }}" alt="" class="img-100">
            <div class="bt">国艺秦腔馆</div>
            <p style="margin-bottom: 50px">国艺秦腔馆位于崇文塔东南侧，展陈面积为1000余平方米，秦腔是中国传统文化中重要的组成部分。古老的秦腔被誉为“戏曲活化石”。整个展馆设计理念突出现代与传统元素的融合，展陈方式强调当代性、鲜活性与原生性，展陈内容体现准确性、精选性、互动性和趣味性。国艺秦腔馆以大型秦腔文化浮雕拉开序幕，展现了秦腔大美大雅的艺术特点，整个展馆划分为国、艺两大区域，通过雕塑、秦腔有关实物、仿真人像、半实景、油画、多媒体体感互动等手段共展示了丝绸之路大秦腔、戏曲源流诞生地、革命戏曲先锋队、华夏五洲齐喝彩、大俗大雅美秦腔、草根艺术众秦腔等六个秦腔特色文化主题。国艺秦腔馆不仅是秦腔文化的展示馆，更是秦腔文化艺术的演艺馆、收藏馆、研究馆和体验馆。它传承秦腔艺术，普及秦腔文化，保护文化遗产；集秦腔艺术文物收藏、秦腔艺术研究、秦腔艺术交流等诸多功能，具有很强的互动性，是一个以群众参与为主的体验性文化主题场馆。</p>
            <img src="{{ asset('images/wyjl/gyqqg2.jpg') }}" alt="" class="img-100">
            <img src="{{ asset('images/wyjl/gyqqg3.jpg') }}" alt="" class="img-100" style="margin-top: 10px;margin-bottom: 100px">
        </div>
    </div>

@endsection
