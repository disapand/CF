@extends('layouts.header')

@section('css')
    @parent
    <style>
        .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2{
            padding-left: 2px;
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
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}"  class="active">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wyjl/xfb_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-md-offset-2">
            <img src="{{ asset('images/wyjl/xfb_z.png') }}" alt="" class="img-100" style="margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-md-offset-2 wzys">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">该项目位于泾河新城崇文佳苑三区西南角，办公区域分为2层，面积约为800多平米，项目配备项目主管1名，保安4名，保洁2名。日常服务包含24小时安保服务、办公室以及公共区域内部精细化保洁、户外道路清扫工作。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/xfb_t1.jpg') }}" alt="" class="img-100">
        </div>
    </div>

@endsection
