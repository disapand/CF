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
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>{{--还没有开发--}}
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}"  class="active">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/dzfw/zwpx') }}">政务服务</a></li>
    <li><a href="{{ url('/zhfw/jjny') }}">洁净能源</a></li>
    <li><a href="{{ url('/dzfw') }}">回迁安置</a></li>
    <li><a href="{{ url('/zhfw/ggjt') }}" class="active">汽车租赁</a></li>
    <li><a href="{{ url('/zhfw/zhcs') }}">智慧城市</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/ggjt_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/ggjt_z.png') }}" alt="" class="img-100" style="margin-top: 6%;margin-bottom: 50px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 2%;">
            <p>汽车租赁公司负责公务车辆信息化平台的运行维护、数据采集；负责公务车辆采购，车辆日常维修（保养）、燃油、保险、年审等管理，车辆安全管理；负责制定、完善公务车辆管理相关制度及规范；负责司勤人员调度管理及安全培训；通过信息化平台，负责泾河新城管委会的公务用车管理和服务保障任务。</p>
        </div>
    </div>

@endsection
