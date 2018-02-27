@extends('layouts.header')

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
    <li><a href="{{ url('/wygl/whjq') }}"  class="active">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
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
            <img src="{{ asset('images/whjq_dt1.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_z.png') }}" alt="" class="center-block" style="margin-top: 100px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p style="margin-top: 50px;margin-bottom: 50px;">崇文塔景区属泾河新城范围内的文化景区，占地面积约300余亩，城服公司主要负责崇文塔景区物业管理工作，景区拥有一支高效、专业的安保保洁人员，开展好景区内的安保保洁工作，维护并树立景区的良好形象；景区安保日常工作主要为车辆引导、消防检查及景区安全防备等工作；景区在工程维护方面，配备专业强电、弱电、水工，日常进行对景区水、电排查处理及维护等工作，确保景区水电运行正常；我公司将用专业的物业管理队伍，认真、全面的做好景区内的物业管理工作。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_2.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_3.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 4px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_4.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_5.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
                <img src=" {{ asset('images/whjq_3.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    {{--寿平民宿小镇--}}
    <div class="row" style="margin-top: 100px;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/whjq_dt2.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/whjq_z2.png') }}" alt="" class="center-block" style="margin-top: 100px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p style="margin-top: 50px;margin-bottom: 50px;">城服公司负责寿平民宿小镇的物业管理工作，管理面积：约91000㎡，配备专业的安保保洁队伍。主要负责：寿平民宿的维修、养护和管理；包括：游服中心、公共卫生间、公共设施、设备等。负责环境卫生、通道、公共卫生间、道路、停车场、水域的清洁，垃圾的收集、清运等。安保服务、车场管理、维持公共秩序，做好安全监控、消防设施、巡查。合理布置花卉、绿植，并提供花卉、绿植的养护服务。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_7.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_8.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_9.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 4px;margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_10.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_11.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_12.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

@endsection