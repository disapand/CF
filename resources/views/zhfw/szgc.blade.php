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
    <li><a href="{{ url('/zhfw/szgc') }}" class="active">城市配套维护</a></li>{{--还没有开发--}}
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
            <img src="{{ asset('images/zhfw/szgc_dt.png') }}" alt="" class="img-100" style="margin-top: 6%;margin-bottom: 50px;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p>泾河城服城市配套维护工作，主要负责泾河新城路面维护、路灯维护、管网维护、市政巡查及节日、重大活动的亮化、氛围提升等全方位的城市配套基础设施维护工作。</p>
            <p>为更好地服务泾河新城的开发建设及城市管理，加快完善泾河新城现代城市服务体系，做好城市配套维护工作，已编制并执行《城市配套基础设施维护标准化管理手册》，通过推行标准化管理，全力打造优质维护服务。同步还制订了《城市配套维护工作方案》《城市配套巡查管理办法》等各项工作方案和管理办法。从2017年起，泾河城服开始承接城市配套维护业务，与泾河新城管委会长期保持良好的沟通，并签订维护协议，按照巡查、维护、解决问题不间断，所负责的道路百分百完好的“三个不间断、一个百分百”标准，全力做好新城各项城市配套维护工作。</p>
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
