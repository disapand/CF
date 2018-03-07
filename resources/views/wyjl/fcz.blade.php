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
    <li><a href="{{ url('/wljl/zbjq') }}" class="active">周边景区</a></li>
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
                <li class="li-active"><a href="{{ url('wljl/fcz') }}">伏茶镇</a></li>
                <li><a href="{{ url('/wljl/lhc') }}">乐华城</a></li>
                <li><a href="{{ url('/wljl/spmsxz') }}">寿平民宿小镇</a></li>
                <li><a href="{{ url('/wljl/jhzhnyy') }}">泾河智慧农业园</a></li>
                <li><a href="{{ url('/wljl/ddyd') }}">大地原点</a></li>
            </ul>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/fcz1.jpg') }}" alt="" class="img-100">
                <div class="bt">伏茶镇</div>
            <p style="margin-bottom: 50px">茯茶镇位于西咸新区泾河新城核心区域，占地约1300亩，总投资约30亿，其中茯茶镇商业街项目总投资约6亿。茯茶镇由茯茶镇商业街、茯茶文化产业园、茯茶文化博物馆、优美小镇、双赵民俗村五个部分组成，是中国最具特色的茯茶文化体验中心。</p>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="{{ asset('images/wyjl/fcz2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="{{ asset('images/wyjl/fcz3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
            <div class="row" style="margin-top: 15px;margin-bottom: 100px">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="{{ asset('images/wyjl/fcz4.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src="{{ asset('images/wyjl/fcz5.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
