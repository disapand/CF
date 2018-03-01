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
    <li><a href="{{ url('/wygl/cyy') }}"  class="active">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('contents')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wyjl/jhgafj_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-md-offset-2">
            <img src="{{ asset('images/wyjl/jhgafj.png') }}" alt="" class="img-100" style="margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-md-offset-2 wzys">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">该项目位于泾河新城崇文佳苑三区西北角，办公区域分为2层，面积约为1300平米，项目配备项目经理一名，主管一名，保安8名，保洁6名。日常服务包含24小时监控安保服务、办公室及公共区域内部精细化保洁、户外道路清扫工作。项目管理人员经过专业培训，具有多年物业服务管理工作经验；在人员配置上借鉴成熟物业服务项目的成功经验，按照精干高效的原则，合理配备项目所需人员，为泾河新城公安分局保一方平安提供优质服务。</p>
        </div>
    </div>

@endsection