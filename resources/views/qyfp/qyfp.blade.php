@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4 {
            padding-left: 0;
            padding-right: 0;
        }
    </style>
@endsection

@section('ejdh')
    <li><a href=""></a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/qyfp/qyfp_dt.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 6%;margin-bottom: 3%;">
            <img src="{{ asset('images/qyfp/qyfp_z.png') }}" alt="" class="center-block img-100">
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 20px;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p>为切实推进城服公司帮扶村庄——新庄村、铁孟村脱贫攻坚工作，助力泾河新城打赢脱贫攻坚战，经城服公司党支部研究决定，深入开展“党建+新庄村、铁孟村脱贫攻坚”工作，结合我公司实际，现制定具体工作方案如下：</p>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 50px;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">一、线上——泾河帮帮卖</h3>
            <p style="padding-bottom: 2%;">
                泾河城服以电商为手段，精准扶贫为目标，整合泾河新城内贫困农户信息，打造专业性的脱贫攻坚电商平台——泾河帮帮卖。商城通过对贫困户农副产品的收集、展示、销售，大力推广贫困家庭自产的有机农副产品，让泾河新城优良的绿色原生态农副产品走到更广阔的市场，让喜欢原生态绿色食品的市民能够找到最真诚质朴的产品。同时，也使得人人皆可在平台贡献力量，帮助贫困户改善生活。确保扶贫目的，展示扶贫成果，精准扶贫农户。
            </p>
            <p style="padding-bottom: 2%;">
                平台销售产品主要包括：一是贫困户自产或参与生产的产品，销售利润全部归贫困户所有；二是参与扶贫的爱心企业生产的产品，从营业额中计提一定比例的资金设立扶贫基金，用于区域的扶贫工作。目前平台在售产品为房老太系列产品、“新庄情”系列产品，威氏英系列洗衣液产品，冰草系列产品等。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 3%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="{{ asset('images/qyfp/qyfp_xt1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="{{ asset('images/qyfp/qyfp_xt2.jpg') }}" alt="" class="img-100">

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="{{ asset('images/qyfp/qyfp_xt3.jpg') }}" alt="" class="img-100">

            </div>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 6%;">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">二、线下——扶贫产品展销中心</h3>
            <p style="margin-bottom: 2%;">
                此前，泾河城服集聚电商力量，在茯茶镇积极部署建设“扶贫产品展销中心”，形成线上线下相融合的格局，扩大了宣传展销力度和覆盖面。</p>
            <p style="margin-bottom: 2%;">
                展销中心设立8间创业商铺，由贫困户根据自身实际情况自主开展经营，创业商铺不收取租赁费用和管理费用，物业费、水电费等由贫困户自主承担。从而快速拓展品牌销路，形成扶贫产业链，助力区域内贫困户快速脱贫。</p>
        </div>
    </div>
@endsection
