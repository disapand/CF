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

        .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6{
            padding: 0 7.5px;
        }

        h3{
            font-size: 1.6em;
            color: #018cd4;
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
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wljl/cwtjq') }}">崇文塔景区</a></li>
    <li><a href="{{ url('/wljl/zbjq') }}"  class="active">周边景区</a></li>
@endsection

@section('contents')

    <div class="row" style="margin-bottom: 30px;margin-top: 30px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <a href="{{ url('/wljl/zbjq') }}" class="bak"><< 返回</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
        	<ul class="sider-bar">
                <li><a href="{{ url('wljl/fcz') }}">茯茶镇</a></li>
                <li><a href="{{ url('/wljl/lhc') }}">乐华城</a></li>
                <li class="li-active"><a href="{{ url('/wljl/spmsxz') }}">寿平民宿小镇</a></li>
                <li><a href="{{ url('/wljl/jhzhnyy') }}">泾河智慧农业园</a></li>
                <li><a href="{{ url('/wljl/ddyd') }}">大地原点</a></li>
            </ul>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/spmsxz1.jpg') }}" alt="" class="img-100">
            <div class="bt">寿平民宿小镇</div>
            <p>寿平民宿小镇项目以泾河边的院子为设计思想，打造生态精品院落及民宿温泉度假主题公园，集生态旅游、温泉度假、养生休闲、生态农业为一体的精品民宿。</p>
            <p>项目位于西咸新区泾河新城正阳大道与沣泾大道十字西北角,毗邻乐华国际旅游度假区，地理位置优越。项目一期占地约224亩,由生态农业示范区、主题文化广场区、民宿区三部分组成。其中主题文化广场区占地约82亩，由古渡船作为广场的标志，体现出寿平民宿小镇独特的古渡文化；生态农业示范区占地约80亩，包括开心农场菜地认耕、畜园奶牛、山羊认养及小矮马骑行等体验式互动项目；乡村民宿居住区占地约 62亩，有工业主题、亲子主题、茶禅主题等不同的装修风格，可为游客提供不同的住宿体验。</p>
            <p>园区内设施配套齐全，景色宜人，田园气息浓厚，特色餐饮区包括小吃街坊、闲坐火锅等；娱乐功能区域包括素质拓展区、大巴露营区、星空帐篷、畜园矮马、体验种植农作物等活动。</p>
            <div class="row" style="margin-top: 50px;margin-bottom: 100px">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0;">
                    <img src="{{ asset('images/wyjl/spmsxz2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0">
                    <img src="{{ asset('images/wyjl/spmsxz3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
