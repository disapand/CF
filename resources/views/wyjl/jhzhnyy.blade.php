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
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
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
                <li><a href="{{ url('/wljl/spmsxz') }}">寿平民宿小镇</a></li>
                <li class="li-active"><a href="{{ url('/wljl/jhzhnyy') }}">泾河智慧农业园</a></li>
                <li><a href="{{ url('/wljl/ddyd') }}">大地原点</a></li>
            </ul>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6">
            <img src="{{ asset('images/wyjl/jhzhnyy1.jpg') }}" alt="" class="img-100">
            <div class="bt">泾河智慧农业园</div>
            <p>花木为媒，观光立区，在城市核心留一片会呼吸的地。现代农业，科技为核，万亩都市农业形成独特的城市景观。川田，花漾泾河，花博会绚丽绽放，郁金香花海旖旎芬芳，绿色蔬菜蓬勃生长，田园美景一览无余。</p>
            <img src="{{ asset('images/wyjl/jhzhnyy2.jpg') }}" alt="" class="img-100" style="margin-top: 50px;">
            <img src="{{ asset('images/wyjl/jhzhnyy3.jpg') }}" alt="" class="img-100" style="margin-top: 10px;margin-bottom: 100px;">
        </div>
    </div>

@endsection
