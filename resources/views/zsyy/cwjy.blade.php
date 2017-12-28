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
    <li><a href="{{ url('/zsyy/cwt') }}">崇文塔景区</a></li>
    <li><a href="{{ url('/zsyy/cwjy') }}" class="active">崇文佳苑</a></li>
    <li><a href="{{ url('/zsyy/cwsx') }}">崇文·尚学</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/zsyy/zsyy_cwjy.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-top: 150px;margin-bottom: 50px;">
            <img src=" {{ asset('images/zsyy/cwjy_z.png') }}" alt="" style="width: 99%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 150px;">
            <p style="text-indent: 2em;text-align: justify">崇文佳苑位于西咸新区泾河新城正阳大道北段，南至高泾中路，东北相邻崇环路，总占地面积约1650亩，总建筑面积约270万平方米。崇文佳苑底商以药店超市、餐饮、服务配套（公安、医院、电信等）、美容、服饰精品、生活家居和休闲等八大类业态为主，打造包容时尚、文化、休闲、娱乐、购物等综合功能的休闲生活广场，以此来满足业主休闲文化需求，从而达到满足自由、放松、交流、时尚和购物等多种生活目的。</p>
        </div>
    </div>

@endsection
