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
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}" class="active">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/dzfw/zwpx') }}">政务服务</a></li>
    <li><a href="{{ url('/zhfw/jjny') }}">生态建设</a></li>
    <li><a href="{{ url('/dzfw') }}">回迁安置</a></li>
    <li><a href="{{ url('/zhfw/ggjt') }}">汽车租赁</a></li>
    <li><a href="{{ url('/zhfw/zhcs') }}" class="active">智慧城市</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/zhcs_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/zhcs_z.png') }}" alt="" class="img-100" style="margin-top: 6%;margin-bottom: 50px;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 1%;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-xs-offset-1 col-sm-offset-1 wzys">
            <p>智慧城市作为人类可持续发展的又一探索，在我国有着意义深远的影响。在西成新区建设过程中，运用信息和通信技术手段感测、分析、整合城市运行核心系统的各项关键信息，对包括民生、环保、公共安全、城市服务、工商业活动在内的各种需求做出智能响应。利用先进的信息技术，实现城市智慧式管理和运行，进而为城市中的人创造更美好的生活，促进城市的和谐、可持续成长是我们一直以来的愿望。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 2%;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-xs-offset-1 col-sm-offset-1 wzys">
            <p>智慧城市作为人类可持续发展的又一探索，在我国有着意义深远的影响。在西成新区建设过程中，运用信息和通信技术手段感测、分析、整合城市运行核心系统的各项关键信息，对包括民生、环保、公共安全、城市服务、工商业活动在内的各种需求做出智能响应。利用先进的信息技术，实现城市智慧式管理和运行，进而为城市中的人创造更美好的生活，促进城市的和谐、可持续成长是我们一直以来的愿望。</p>
            </p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 0 3px;">
                    <img src="{{ asset('images/zhfw/zhcs_xt1.jpg') }}" alt="" class="img-100" style="margin-bottom: 2%;">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 0 3px;">
                    <img src="{{ asset('images/zhfw/zhcs_xt2.jpg') }}" alt="" class="img-100" style="margin-bottom: 2%;">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding: 0 3px;">
                    <img src="{{ asset('images/zhfw/zhcs_xt3.jpg') }}" alt="" class="img-100" style="margin-bottom: 2%;">
                </div>
            </div>
        </div>
    </div>
@endsection
