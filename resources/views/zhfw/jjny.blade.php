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
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>{{--还没有开发--}}
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}" class="active">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/dzfw/zwpx') }}">政务服务</a></li>
    <li><a href="{{ url('/zhfw/jjny') }}" class="active">洁净能源</a></li>
    <li><a href="{{ url('/dzfw') }}">回迁安置</a></li>
    <li><a href="{{ url('/zhfw/ggjt') }}">汽车租赁</a></li>
    <li><a href="{{ url('/zhfw/zhcs') }}">智慧城市</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/jjny_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/jjny_z.png') }}" alt="" class="img-100" style="margin-top: 6%;margin-bottom: 50px;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 2%;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">一、泾河新城环卫中心垃圾压缩站</h3>
            <p style="text-indent: 2em;">
                泾河新城环卫中心垃圾压缩站位于泾河新城永乐镇，属于智能化生活垃圾压缩中转站，由泾河城服运营管理，被徐工集团确立为全国垃圾压缩业务重要示范点。
            </p>
            <p style="text-indent: 2em;">
                该站设计规模为日均转化垃圾300吨，采用先进的水平压缩工艺，完全封闭化作业，具备降尘、除臭、清洁功能，可有效防止二次污染。泾河城服通过优化合理的操作流程，依照各类环境标准，运用先进的信息化平台，实施大数据统计与分析，制定完善的管理制度，开创安全的运营模式。逐步实现了新城垃圾处理的无害化、减量化、智能化，也为建设泾河新城环卫一体化打下坚实的基础。
            </p>
            <p style="text-indent: 2em;">垃圾压缩站对于泾河新城生活质量及经济建设产生深远影响，有效解决了居民垃圾出路问题，整治了生活垃圾的灰色地带。大幅度提高城市垃圾处理能力，美化环境，防止污染，逐步实现垃圾处理无害化、减量化、资源化，也提高人民群众的健康水平，利于生态环境建设的可持续发展，为建设“大美泾河”树立良好的城市形象。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 2%;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">二、垃圾分类</h3>
            <p style="text-indent: 2em;">
                泾河城服开展“垃圾分类，变废为宝”主题活动，通过普及环保知识、张贴宣传海报、完善工具设施、落实责任制等方式，提高废品回收利用率，全面推进落实节能环保，建设文明物业服务单位。
            </p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/jjny_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/jjny_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/jjny_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>
@endsection
