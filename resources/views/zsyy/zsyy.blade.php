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
    <li><a href="{{ url('/zsyy/cwjy') }}">崇文佳苑</a></li>
    <li><a href="{{ url('/zsyy/cwsx') }}">崇文·尚学</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/zsyy/zsyy.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-top: 150px;margin-bottom: 50px;">
            <img src=" {{ asset('images/zsyy/zsyy_z.png') }}" alt="" style="width: 99%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 150px;">
            <p style="text-indent: 2em;text-align: justify">泾河新城城服公司负责泾河新城内各项目的招商管理工作，已建立了一支会管理、精业务、高素质、服务优的招商管理队伍，目前主要负责区域内崇文塔景区、产业孵化中心、崇文佳苑社区的招商管理工作。随着泾河新城建设步伐的加快，还将继续承接各项目的招商管理，秉承“诚信实现双赢，服务泾河新城为原则”，在泾河新城的发展趋势下，配合做好区域内各项目的招商管理工作。</p>
        </div>
    </div>

    
@endsection
