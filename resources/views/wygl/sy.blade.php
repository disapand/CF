@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}" class="active">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}"  class="active">商业</a></li>
@endsection

@section('contents')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_sy.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/sy_z.png') }}" alt="" class="center-block" style="margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 99%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">泾合热力位于泾河新城西南位置，由一座6层综合办公楼及独立餐厅组成。项目配备项目经理1名，项目主管1名，保洁员5名，前台接待1名。日常服务包含办公楼清洁、餐厅清洁、客房服务、前台接待、户外道路清扫等工作。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 150px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/sy1.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/sy2.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/sy3.jpg') }}" alt="" style="width: 99%;">
        </div>
    </div>

@endsection