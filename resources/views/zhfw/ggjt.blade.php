@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}" class="active">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/zhfw/zhcs') }}">智慧城市</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zhfw/ggjt') }}" class="active">公共交通</a></li>
    <li><a href="{{ url('/zhfw/jjny') }}">洁净能源</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/ggjt_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/zhfw/ggjt_z.png') }}" alt="" class="center-block img-100" style="margin-top: 60px;margin-bottom: 60px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 wzys">
            <p>泾河新城按照“快捷交通连接”理念，实现与西安、咸阳主城区的无缝对接，方便居民的出行。开通的西安北站至泾河新城的360路公交线路，直抵家门；315路、316路从乐华欢乐世界出发，连接泾河新城与西安城东、城西畅通；2017年3月，西成新区泾河新城旅游直通车正式启动，前期建设班线为“西安城北客运站泾河新城”和“泾阳泾河新城”两条线路，串联了乐华城。乐华欢乐世界、茯茶镇、崇文塔景区、寿平民宿小镇、智慧农业园等景区项。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 50px;">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 wzys">
            <p>未来将坐享地铁时代，地铁10号线支线穿梭于泾河新城与西安主城之间，一小时即可到达西安主城商业中心，即刻享受都市生活圈。地铁16号线起点泾阳县城，南达新西安南站，一触即达。 </p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 150px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src="{{ asset('images/zhfw/ggjt_xt1.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src="{{ asset('images/zhfw/ggjt_xt2.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src="{{ asset('images/zhfw/ggjt_xt3.jpg') }}" alt="" style="width: 99%;">
        </div>
    </div>
@endsection
