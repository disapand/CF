@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/wygl/shfw') }}" class="active">社会服务</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4 {
            padding-left: 2px;
            padding-right: 2px;
        }
    </style>
@endsection

@section('contents')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wyjl/jhgafj_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/gafj_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 5%;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-md-offset-1">
            <p style="margin-top: 5%;margin-bottom: 50px;">该项目位于泾河新城崇文佳苑三区西北角，办公区域分为2层，面积约为1300平米，项目配备项目经理一名，主管一名，保安8名，保洁6名。日常服务包含24小时监控安保服务、办公室及公共区域内部精细化保洁、户外道路清扫工作。项目管理人员经过专业培训，具有多年物业服务管理工作经验；在人员配置上借鉴成熟物业服务项目的成功经验，按照精干高效的原则，合理配备项目所需人员，为泾河新城公安分局保一方平安提供优质服务。</p>
        </div>
    </div>

    {{--泾河消防--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wyjl/jhxf_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/wyjl/jhxf_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;margin-bottom: 50px;">该项目位于乐华城西门向西200米（瀛洲一街），负责区域包括咸阳市泾阳县永乐镇、崇文镇、泾干镇三镇的全部和高庄镇的一部分；行政村共计63个，人口14万人，区内主要交通干道有包茂高速、包茂高速复线、咸铜铁路；营区建筑面积约6800平方米。项目配备项目经理一名，项目主管一名，保洁10名，主要负责办公楼公共区域精细化保洁服务，提升物业服务质量，做好后勤保障工作。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/jhxf_t1.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    {{--信访办--}}
    <div class="row" style="margin-top: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wyjl/xfb_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/wyjl/xfb_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;margin-bottom: 50px;">该项目位于泾河新城崇文佳苑三区西南角，办公区域分为2层，面积约为800多平米，项目配备项目主管1名，保安4名，保洁2名。日常服务包含24小时安保服务、办公室以及公共区域内部精细化保洁、户外道路清扫工作。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/xfb_t1.jpg') }}" alt="" class="img-100">
        </div>
    </div>

@endsection