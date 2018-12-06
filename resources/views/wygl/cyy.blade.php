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
    <li><a href="{{ url('/wygl/cyy') }}" class="active">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_cyy.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyy_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 5%;width:100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-md-offset-3 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 25px;">茯茶展示基地项目位于泾河新城茶源二路以南，高泾大道以北，茶香大道以东，茶坊四路以西。项目占地20.15亩，总建筑面积约16000㎡。由生产区、研发办公区、茯茶众创空间、茶文化展示区、销售展示区、手筑体验区六大版块组成，并积极致力于成为行业标杆、区域典范。</p>
            <p style="margin-top: 25px;text-indent: 2em;margin-bottom: 50px;">服务范围：茯茶展示基地是泾河茯茶展示的对外窗口，项目管理服务包括前台接待工作、公共区域日常保洁养护、垃圾收集及清运、秩序维护管理。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/cyy1.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
            <img src=" {{ asset('images/cyy2.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
            <img src=" {{ asset('images/cyy3.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row" style="margin-top: 4px;margin-bottom: 50px;">
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/cyy4.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
            <img src=" {{ asset('images/cyy5.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
            <img src=" {{ asset('images/cyy6.jpg') }}" alt="" class="img-100">
        </div>
    </div>

@endsection
