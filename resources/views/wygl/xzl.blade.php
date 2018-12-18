@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>{{--还没有开发--}}
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}" class="active">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
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
            <img src="{{ asset('images/wygl_xzl.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block img-100"
                 style="margin-top: 50px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;margin-bottom: 50px;">泾河新城产业孵化中心以写字楼、公寓为主，项目位于高泾中路以南，高泾南路以北，崇文塔四街以北，北大街以西。总规划占地面积7.58公顷，总建筑面积63725㎡，容积率0.74，实际建筑收费面积49995.53㎡（实测数据），绿化覆盖面积约34110㎡（含屋面绿化面积），地面车位113个，地下停车位286个。入驻企业目前达22家，物业管理人员十余人，一线工作人员一百余人。</p>
            <p style="margin-top: 25px;margin-bottom: 25px;">服务范围：房屋建筑主体的管理、房屋设备管理、设施设备的管理、环境卫生的管理、绿化管理、保安管理、消防管理、车辆道路管理、公众代办性服务、委托性特约服务。</p>
            <p style="margin-top: 25px;margin-bottom: 25px;">服务标准：凡推出的服务项目，保证服务质量，对每一项服务实行投诉反馈制度，以行业服务要求为质量标准。</p>
            <p style="margin-top: 25px;margin-bottom: 50px;">服务理念：奉行“规范管理、致诚服务、精益求精、追求卓越”的质量方针，建立健全机制，发挥“党建引领、金牌服务”做到“管理无盲点、服务无挑剔”、“事不过夜、立刻就办”实现“精而更精、特而更特”的企业精神。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/xzl_1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/xzl_2.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/xzl_3.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 4px;margin-bottom: 50px;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/xzl_4.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/xzl_5.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/xzl_6.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

@endsection
