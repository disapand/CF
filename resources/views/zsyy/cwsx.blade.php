@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}" class="active">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/zsyy/cyfh') }}">产业孵化中心</a></li>
    <li><a href="{{ url('/zsyy/cwt') }}">崇文塔景区</a></li>
    <li><a href="{{ url('/zsyy/cwjy') }}">崇文佳苑</a></li>
    <li><a href="{{ url('/zsyy/cwsx') }}" class="active">崇文·尚学</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/zsyy/zsyy_cwsx.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 6%;margin-bottom: 50px;">
            <img src=" {{ asset('images/zsyy/cwsx_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 50px;">
            <p>崇文尚学住宅项目位于中国著名的第一高砖塔“崇文塔”的东侧，地处泾河新城正阳西一路，三面公园环绕，自然资源优越，整体环境优雅宜人。一、二期总建筑面积114816.32㎡。</p>
            <p style="margin-top: 50px">服务范围：崇文尚学为泾河新区高档住宅小区，项目管理服务包括物业中心前台接待工作、公共区域日常保洁、绿植养护、垃圾收集及清运、工程设施设备保养维护，秩序维护管理、增值服务等物业服务。</p>
        </div>
    </div>

@endsection
