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
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">合作交流</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}" class="active">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/yxhd/yxyd_dt_n.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 100px;margin-bottom: 50px;">
            <img src=" {{ asset('images/yxhd/yxyd_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>泾河新城研学旅行充分挖掘区内旅游资源，形成文化＋教育、文化＋体验、文化＋农业、文化＋民俗等多种综合研学旅游产品，已经吸引了数百家学校前来研学，更有学校多次组织不同阶段的学生前来。</p>
            <p>自从研学旅行启动以来，城服公司致力于将泾河新城研学旅行资源逐渐由西安推广至周边及省内学校市场，不断扩大崇文塔景区及泾河新城的文化影响力，大力推进了全域旅游。在以后的研学接待中，崇文塔景区将保量升质，力求将泾河新城打造成为研学旅行示范区，让同学们来泾河新城就能学知识、得实践、长阅历，在“行万里路”的征途中，也能收获星辰和大海。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;margin-top: 30px;">
            <p>
                二期主要利用景区一区、四区外围规划用地作为研学活动拓展体验区，设置有（攀岩、独木桥、七巧板等项目）可同时容纳上百人活动的专业拓展体验。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                本项目为大型综合性中小学生研学旅行文化教育主题营地，此项目的建设，在较长时期都具有唯一性，先进性。研学营地的“领航者”。</p>
        </div>
    </div>

    <div class="row" style="margin-top: 5px;margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt4.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt5.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt6.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
