@extends('layouts.header')

@section('css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/swiper.custom.css') }}">
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4 {
            padding-left: 7.5px;
            padding-right: 7.5px;
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

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/zbjq.png') }}" alt="" class="img-100"
                 style="margin-top: 60px;margin-bottom: 50px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 wzys col-md-offset-2 col-xs-offset-1 com-sm-offset-1">
        	<p>泾河新城作为现代化大西安新中心文化旅游新高地，区域内建设了多个文化旅游项目，如乐华城、茯茶镇、崇文塔景区、泾河智慧农业园、寿平民宿小镇、崇文湖风景区等。致力于营造全新的文化氛围，促进新城精神文明建设，加强交流，打造大西安北部新中心旅游高地。</p>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;margin-bottom: 100px;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="{{ url('/wljl/fcz') }}"><img src="{{ asset('images/wyjl/fcz.jpg') }}" alt="" class="img-100"></a>
                    <a href="{{ url('/wljl/lhc') }}"><img src="{{ asset('images/wyjl/lhc.jpg') }}" alt="" class="img-100"  style="margin-top: 4%;"></a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="{{ url('/wljl/spmsxz') }}"><img src="{{ asset('images/wyjl/spmsxz.jpg') }}" alt="" class="img-100"></a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="{{ url('/wljl/jhzhnyy') }}"><img src="{{ asset('images/wyjl/jhzhnyy.jpg') }}" alt="" class="img-100"></a>
                    <a href="{{ url('/wljl/ddyd') }}"><img src="{{ asset('images/wyjl/ddyd.jpg') }}" alt="" class="img-100"  style="margin-top: 4%;"></a>
                </div>
            </div>
        </div>
    </div>
@endsection
