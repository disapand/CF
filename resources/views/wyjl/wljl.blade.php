@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}" class="active">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')

@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/wyjl/wljl_dt.png') }}" alt="" class="center-block" style="margin-top: 60px;margin-bottom: 60px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-md-offset-3" style="margin-bottom: 50px;">
            <img src="{{ asset('images/wyjl/wljl_t1.jpg') }}" alt="">
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        	<div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <img src="{{ asset('images/wyjl/wljl_z.png') }}" alt="" style="width: 99%;">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<p style="text-align: justify;text-indent: 2em;margin-top: 20px;line-height: 2em;">泾河新城作为现代化大西安新中心文化旅游新高地，区域内建设了多个文化旅游项目，如乐华城、茯茶镇、崇文塔景区、泾河智慧农业园、寿平民宿小镇、崇文湖风景区、丝路盛典大型实景演出等。其中崇文塔景区依托着高87.218m的中国第一高砖塔——崇文塔，建成陕商、秦腔、非遗、国学四个文化博览馆，是区域内重点文化旅游项目，致力于文化保护、文化传播、文化交流活动，营造全新的文化氛围，促进新城精神文明建设，加强交流，打造大西安北部新中心文化旅游高地。</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="background-color: #eeeeee;padding-top: 20px;padding-bottom: 20px;margin-bottom: 60px;">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/wyjl/wljl_xt1.jpg') }}" alt="" style="width: 99%;">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/wyjl/wljl_xt2.jpg') }}" alt="" style="width: 99%;">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/wyjl/wljl_xt3.jpg') }}" alt="" style="width: 99%;">
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                    <p>4.16国际古迹遗址日崇文塔景区专场</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                    <p>5.28泾河读书会</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                    <p>国际古迹遗址日崇文塔景区专场</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection
