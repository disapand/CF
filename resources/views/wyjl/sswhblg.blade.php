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
            width: 280px;
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
            margin: 50px 0;
            margin-left: 50%;
            transform: translateX(-50%);
            font-size: 1.6em;
            color: #fff;
            background-color: #008cd5;
            border: #008cd5 solid 1px;
            border-radius: 10px;
            padding: 10px 50px;
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
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}"  class="active">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
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
                <li class="li-active"><a href="{{ url('/wljl/sswhblg') }}">陕商文化博览馆</a></li>
                <li><a href="{{ url('/wljl/gyqqg') }}">国艺秦腔馆</a></li>
            </ul>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/sswhblg1.jpg') }}" alt="" class="img-100">
            <div class="bt">陕商文化博览馆</div>
            <p style="margin-bottom: 50px">陕商文化博览馆位于崇文塔景区东北侧，展陈面积1000平方米，是中国第一个以 “陕商文化”为主题的博览馆。展馆分为“抢抓机遇、商帮诞生”、“天下第一商帮”、“敢为人先，勇创第一”、“西商大贾，富甲天下”、“厚重质直，忠义仁勇”、“泾河之阳，省市商都”等主题展区，以小空间、大历史，以景叙史，忆陕商、塑文化，再现历史的理念，达到一步一景一体验，一闻一学一收获的目的，通过地景浮雕、门楼照壁、幻影成像等元素呈现出陕商庞大的经营规模与创业的艰辛，激励后人发扬陕商精神，响应国家号召建设"丝绸之路经济带"， 为促进亚欧经济文化交流贡献一份力量。</p>
            <img src="{{ asset('images/wyjl/sswhblg2.jpg') }}" alt="" class="img-100">
            <img src="{{ asset('images/wyjl/sswhblg3.jpg') }}" alt="" class="img-100" style="margin-top: 10px;margin-bottom: 100px">
        </div>
    </div>

@endsection
