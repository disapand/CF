@extends('layouts.header')

@section('ejdh')
    <li><a href="{{ url('/qyjj') }}"  class="active">企业简介</a></li>
    <li><a href="{{ url('/fzyj') }}">发展愿景</a></li>
    <li><a href="{{ url('/zzjg') }}">组织架构</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="images/CFLogo.png" alt="" class="center-block" style="margin-top: 6%;margin-bottom: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="images/tb1.png" alt="" class="center-block" style="margin-bottom: 6%;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <p class="text-center">泾河城服企业标志是由“泾河城服”中的泾字中</p>
            <p class="text-center">拼音首字母“J”为外形，寓意着一把“金钥匙”，为泾河新城开启辉煌未来</p>
            <p class="text-center">同时，并通过“崇文塔”的外形，变化而来，体现企业崇尚文化自信的经营理念</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2">
            <img src="images/qyjj_z.png" alt="" class="center-block" style="margin-bottom: 50px;width: 99%">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 10px; margin-bottom: 30px;">泾河城服全称为陕西省西咸新区泾河新城城市综合服务有限公司，是西咸新区泾河集团的全资子公司。企业成立于2013年7月，注册资金3500万元，于2017年通过ISO9001国际质量管理体系认证，是泾河新城全域内唯一城市综合服务企业。泾河城服定位全能城市服务集成商，以助推城市经济发展为目标，坚持“科技创新服务，诚信实现双赢，专业成就精品”的方针，秉承“智慧城市，智能生活”的先进理念，不断引进智能服务管理系统。以客户满意为先导，以目标管理为核心，以党群建设为引领，不断凝聚团队创造力和创新力，积极扩展和延伸服务内容，努力实现企业和新区的稳步长远发展。</p>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;margin-bottom: 100px;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/qyjj_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>


@endsection