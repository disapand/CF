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
            <img src="{{ asset('images/wyjl/jhxf_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-md-offset-2">
            <img src="{{ asset('images/wyjl/jhxf_z.png') }}" alt="" class="img-100" style="margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-md-offset-2 wzys">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">该项目位于乐华城西门向西200米（瀛洲一街），负责区域包括咸阳市泾阳县永乐镇、崇文镇、泾干镇三镇的全部和高庄镇的一部分；行政村共计63个，人口14万人，区内主要交通干道有包茂高速、包茂高速复线、咸铜铁路；营区建筑面积约6800平方米。项目配备项目经理一名，项目主管一名，保洁10名，主要负责办公楼公共区域精细化保洁服务，提升物业服务质量，做好后勤保障工作。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/jhxf_t1.jpg') }}" alt="" class="img-100">
        </div>
    </div>

@endsection
