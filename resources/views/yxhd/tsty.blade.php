@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">一塔五馆</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}" class="active">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/yxhd/yxhd_tsty.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 100px;margin-bottom: 50px;">
            <img src=" {{ asset('images/yxhd/tsty_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>“耳闻之不如目见之，目见之不如足践之”，研学旅行就是将书本知识和生活经验深度融合,在活动中做到寓学于乐，知行合一。学生们在老师的指导下自己动手绘制马勺脸谱，提笔感受书法艺术，体验面塑文化，在崇文塔广场领略腰鼓魅力。从听、看到动手实践，研学旅行使同学们在享受互动体验的同时，更深入了解了中华民族的传统艺术知识，使其得以更好的传承。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/yxhd/tsty_bg.png') }}" alt="" style="width: 100%;margin-bottom: 100px;">
        </div>
    </div>
    
@endsection
