@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}"  class="active">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/zsyy/cyfh') }}">产业孵化中心</a></li>
    <li><a href="{{ url('/zsyy/cwt') }}"  class="active">崇文塔景区</a></li>
    <li><a href="{{ url('/zsyy/cwjy') }}">崇文佳苑</a></li>
    <li><a href="{{ url('/zsyy/cwsx') }}">崇文·尚学</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/zsyy/zsyy_cwt.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-top: 150px;margin-bottom: 50px;">
            <img src=" {{ asset('images/zsyy/cwt_z.png') }}" alt="" style="width: 99%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 150px;">
            <p style="text-indent: 2em;text-align: justify">崇文塔景区占地面积300余亩。景区以高87.218米的中国第一高砖塔-----崇文塔为核心,拥有2.48万㎡综合商业区、3000㎡运动健身区域；其中综合商业区分为4个区域，位于崇文塔的四个方向，崇文塔文化商业广场，一期以优质餐饮、休闲娱乐、办公服务、地方特色展馆为四大业态，缔造全新消费体验以及高端感官视觉盛宴，形成以“吃、住、行、旅、娱、购、体验”等功能来满足和丰富消费者的需求。</p>
        </div>
    </div>

@endsection
