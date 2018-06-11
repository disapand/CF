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
    <li><a href="{{ url('/zhfw/szgc') }}" class="active">市政工程</a></li>{{--还没有开发--}}
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/szgc/lmwx') }}">路面维修</a></li>
    <li><a href="{{ url('/szgc/ldwx') }}" class="active">路灯维修</a></li>
    <li><a href="{{ url('/szgc/ldlh') }}">路灯亮化</a></li>
    <li><a href="{{ url('/szgc/fwts') }}">氛围提升</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/ldwx.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 3%;width: 100%;margin-bottom: 3%;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/ldwx_1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/ldwx_2.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>
@endsection
