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
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}" class="active">住宅</a></li>
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
            <img src="{{ asset('images/wygl_zz.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zz_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 5%;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;margin-bottom: 25px;">崇文佳苑坐落于西咸新区泾河新城崇文镇二路，占地约为600余亩，建筑面积58.2万㎡，总共可容纳12000余户居民。目前主要分为四大区域，崇文佳苑一区、二区（在建）、三区、八区（楼宇已建成，正在建造围墙），该项目属于公租房、廉租房及周边区域居民回迁安置房集一体的大型社区，周边有完善的商业配套设施，商场、中学、小学幼、儿园。</p>
            <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：客服咨询、工程维修、秩序维护、环境保洁、水电代收缴等项目。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/zz1.jpg') }}" alt=""  class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/zz2.jpg') }}" alt=""  class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/zz3.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>
{{--崇文尚学--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/zsyy/zsyy_cwsx.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cwsx_z.png') }}" alt="" class="center-block" style="margin-top: 6%;height: 45px">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 5%;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 50px;">
            <p style="margin-top: 50px;margin-bottom: 25px;">崇文尚学住宅项目位于中国著名的第一高砖塔“崇文塔”的东侧，地处泾河新城正阳西一路，三面公园环绕，自然资源优越，整体环境优雅宜人。一、二期总建筑面积114816.32㎡。</p>
            <p style="margin-top: 25px;margin-bottom: 25px;">服务范围：崇文尚学为泾河新区高档住宅小区，项目管理服务包括物业中心前台接待工作、公共区域日常保洁、绿植养护、垃圾收集及清运、工程设施设备保养维护，秩序维护管理、增值服务等物业服务。</p>
        </div>
    </div>

@endsection
