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
            <img src="images/tb1.png" alt="" class="center-block dbsxtp" style="margin-bottom: 6%;">
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
            <p style="margin-top: 10px; margin-bottom: 30px;">陕西省西咸新区泾河新城城市综合服务有限公司（泾河城服），成立于2013年，公司注册资本金3500万元，年收入超过3000万元，是泾河新城全域内唯一一家综合性服务企业。泾河城服以党群建设为引领，以客户满意为先导，以“全方位城市服务提供商”为定位，坚持“科技创新服务，诚信实现双赢，专业成就精品”的方针，积极践行“精而更精，特而更特”的服务理念，不断实现跨越式发展。</p>
        </div>
    </div>

    <div class="row" style="margin-top: 30px;margin-bottom: 100px;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/qyjj_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>


@endsection
