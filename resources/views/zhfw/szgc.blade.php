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
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}" class="active">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/zhfw/zhcs') }}">智慧城市</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}" class="active">市政工程</a></li>
    <li><a href="{{ url('/zhfw/ggjt') }}">公共交通</a></li>
    <li><a href="{{ url('/zhfw/jjny') }}">洁净能源</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/szgc_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/szgc_z.png') }}" alt="" class="img-100" style="margin-top: 60px;margin-bottom: 60px;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p>为服务泾河新城的发展规划，加快完善泾河新城现代城市服务体系，城服公司拟开展泾河新城市政环境工程。市政工程通过市场化运作模式全面实施泾河新城内市政养护、绿化养护业务。一方面，市政工程通过承接泾河新城内市政、绿化业务可获取良好的经营收益; 另一方面，通过拓展业务类型，将城市综合服务落到实处，提升城市管理水平，实现良好的社会效益。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
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
