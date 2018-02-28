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
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}"  class="active">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
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
                <li><a href="{{ url('wljl/fcz') }}">伏茶镇</a></li>
                <li><a href="{{ url('/wljl/lhc') }}">乐华城</a></li>
                <li><a href="{{ url('/wljl/spmsxz') }}">寿平民宿小镇</a></li>
                <li><a href="{{ url('/wljl/jhzhnyy') }}">泾河智慧农业园</a></li>
                <li class="li-active"><a href="{{ url('/wljl/ddyd') }}">大地原点</a></li>
            </ul>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/ddyd1.jpg') }}" alt="" class="img-100">
            <div class="bt">大地原点</div>
            <p>亦称大地基准点，是国家地理坐标——经纬度的起算点和基准点。大地原点是人为界定的一个点，是利用高斯平面直角坐标的方法建立全国统一坐标系。20世纪70年代，中国决定建立自己独立的大地坐标系统。通过实地考察、综合分析，最后将中国的大地原点，确定在陕西省泾阳县永乐镇北横流村，具体位置在：北纬34°32′27.00″东经108°55′25.00″。</p>
            <div class="row" style="margin-bottom: 100px;margin-top: 50px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="{{ asset('images/wyjl/ddyd2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="{{ asset('images/wyjl/ddyd3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
