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
            margin-top: 0;
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
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
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
                <li><a href="{{ url('wljl/fcz') }}">茯茶镇</a></li>
                <li class="li-active"><a href="{{ url('/wljl/lhc') }}">乐华城</a></li>
                <li><a href="{{ url('/wljl/spmsxz') }}">寿平民宿小镇</a></li>
                <li><a href="{{ url('/wljl/jhzhnyy') }}">泾河智慧农业园</a></li>
                <li><a href="{{ url('/wljl/ddyd') }}">大地原点</a></li>
            </ul>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
                <div class="bt">乐华城</div>
            <p style="margin-bottom: 50px">乐华城国际欢乐度假区是一个及文化旅游、休闲度假、娱乐购物、高端居住为一体的新都市旅游生态综合城区，旨在为人们创造一个全新的城市空间，传播一个全新的欢乐理念，营造一种全新的生活方式，分享一种全新的幸福体验。</p>
            <h3 class="text-center">乐华城·乐华欢乐世界</h3>
            <img src="{{ asset('images/wyjl/lhc1.jpg') }}" alt="" class="img-100" style="margin-top: 50px">
            <div class="row" style="margin-top: 15px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0;">
                    <img src="{{ asset('images/wyjl/lhc2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0">
                    <img src="{{ asset('images/wyjl/lhc3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
            <h3 class="text-center" style="margin: 50px 0;">乐华城·88℃温泉乐园</h3>
            <img src="{{ asset('images/wyjl/lhc4.jpg') }}" alt="" class="img-100">
            <div class="row" style="margin-top: 15px;margin-bottom: 100px">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0;">
                    <img src="{{ asset('images/wyjl/lhc5.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-right: 0">
                    <img src="{{ asset('images/wyjl/lhc6.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
