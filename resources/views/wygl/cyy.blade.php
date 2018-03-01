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
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}" class="active">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
@endsection

@section('contents')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_cyy.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyy_z.png') }}" alt="" class="center-block" style="margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width:100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 wzys">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">泾河智慧农业园位于泾河新城高泾大道以北，茶马大道以西；日常物业管理工作由城服公司负责，面积约48987.75平方米。项目配备项目经理1名，保洁员19名，秩序维护员19名，水电维修1名。日常服务包含农业园园区道路、馆场、公共区域设施设备保洁服务、保安服务、水电的日常物业管理服务等工作。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/cyy1.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/cyy2.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/cyy3.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row" style="margin-top: 30px;margin-bottom: 150px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/cyy4.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/cyy5.jpg') }}" alt="" class="img-100">
        </div>
    </div>

@endsection