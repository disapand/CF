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
                <li><a href="{{ url('/wljl/sswhblg') }}">陕商文化博览馆</a></li>
                <li class="li-active"><a href="{{ url('/wljl/gyqqg') }}">国艺秦腔馆</a></li>
            </ul>
        </div>

        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/gyqqg1.jpg') }}" alt="" class="img-100">
            <div class="bt">国艺秦腔馆</div>
            <p style="margin-bottom: 50px">国艺秦腔馆位于崇文塔景区东南侧，展陈面积为1020平方米，展馆以大型秦腔文化浮雕拉开序幕，展现秦腔大美大雅的艺术特点，整个展馆划分为国、艺两大区域，通过雕塑、实物、油画、多媒体体感交会互动、“唱吧”等元素和互动设备，使参观者在娱乐的同时加深印象，了解秦腔的特色魅力，发扬秦腔传统文化。</p>
            <img src="{{ asset('images/wyjl/gyqqg2.jpg') }}" alt="" class="img-100">
            <img src="{{ asset('images/wyjl/gyqqg3.jpg') }}" alt="" class="img-100" style="margin-top: 10px;margin-bottom: 100px">
        </div>
    </div>

@endsection
