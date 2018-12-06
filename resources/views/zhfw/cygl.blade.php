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
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}" class="active">餐饮管理</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/cygl_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/cygl_z.png') }}" alt="" class="img-100" style="margin-top: 6%;margin-bottom: 50px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p>产业孵化中心4#、7#餐厅包括厨房、售卖区、就餐区、清洁区等共计2032.3㎡，水、电、燃气、排风、隔油池等设备设施配套齐全，餐厅共可容纳就餐人数600-700人，提供会议用餐和包间用餐，各单位内部订餐提前预定即可。餐厅每日三餐菜品丰富，价格低廉，保质保量。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;margin-top: 30px;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p>餐厅开发菜品新模式，自主研发“茯茶小吃宴”，以新颖的造型、独特的口味、合理的营养搭配获得一致好评，已成为接待用餐的重要保障，同时，在冬日还为大家准备了“抗雾霾新型健康”食谱，暖暖又贴心的汤品给员工带来了很多温暖。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;margin-top: 30px;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p>在餐厅的管理上，城服公司奉行品质与安全的原则，通过营养均衡、科学搭配、采购源头可追溯化和采购流程规范化，为每一位就餐人员提供的餐食都是营养科学和安全卫生。设立意见簿，每月开展就餐满意度调查，建立意见快速反应机制，为产业孵化中心用餐人员提供更周到、更满意的用餐服务。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/cygl_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/cygl_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/cygl_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>
@endsection
