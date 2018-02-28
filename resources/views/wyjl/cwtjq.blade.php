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

    <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/cwtjq_z.png') }}" alt="" class="img-100"
                 style="margin-top: 60px;margin-bottom: 60px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 wzys col-md-offset-2">
        	<p>崇文塔景区为国家AAA级旅游景区，位于西咸新区泾河新城崇文镇，景区占地面积300余亩。景区以高87.218米的中国第一高砖塔——崇文塔为核心，聚集陕商文化博览馆、国艺秦腔馆、崇文国学馆、三秦非遗博览馆、太极馆、文化雕塑园，设有综合商业区、活动健身区，形成内容丰富、规模集中的文化旅游景区。</p>
        </div>
    </div>

    <div class="row" style="margin-top: 30px">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="{{ url('/wljl/cwgxg') }}"><img src="{{ asset('images/wyjl/cwgxg.jpg') }}" alt="" class="img-100"></a>
                    <a href="{{ url('/wljl/sqfybwg') }}"><img src="{{ asset('images/wyjl/sqfybwg.jpg') }}" alt="" class="img-100"  style="margin-top: 15px;"></a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="{{ url('/wljl/cwbt') }}"><img src="{{ asset('images/wyjl/cwt.jpg') }}" alt="" class="img-100"></a>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <a href="{{ url('/wljl/sswhblg') }}"><img src="{{ asset('images/wyjl/sswhblg.jpg') }}" alt="" class="img-100"></a>
                    <a href="{{ url('/wljl/gyqqg') }}"><img src="{{ asset('images/wyjl/gyqqg.jpg') }}" alt="" class="img-100"  style="margin-top: 15px;"></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row" style="margin-top: 30px;margin-bottom: 100px">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/jqwz.jpg') }}" alt="" class="img-100" style="padding: 0 7.5px;">
        </div>
    </div>

@endsection
