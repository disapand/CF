@extends('layouts.header')

@section('css')
    @parent
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4{
            padding-left: 3px;
            padding-right: 2px;
        }
    </style>
@endsection

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}" class="active">市政工程</a></li>{{--还没有开发--}}
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/szgc/lmwx') }}">路面维修</a></li>
    <li><a href="{{ url('/szgc/ldwx') }}">路灯维修</a></li>
    <li><a href="{{ url('/szgc/ldlh') }}">路灯亮化</a></li>
    <li><a href="{{ url('/szgc/fwts') }}">氛围提升</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/szgc_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/szgc_z.png') }}" alt="" class="img-100" style="margin-top: 6%;margin-bottom: 50px;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p>为服务泾河新城的发展规划，加快完善泾河新城现代城市服务体系，城服公司拟开展泾河新城市政环境工程。市政工程通过市场化运作模式全面实施泾河新城内市政养护、绿化养护业务。一方面，市政工程通过承接泾河新城内市政、绿化业务可获取良好的经营收益; 另一方面，通过拓展业务类型，将城市综合服务落到实处，提升城市管理水平，实现良好的社会效益。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/szgc_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/szgc_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/szgc_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>
@endsection
