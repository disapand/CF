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
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/qyfp/qyfp_dt.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 100px;margin-bottom: 60px;">
            <img src="{{ asset('images/qyfp/qyfp_z.png') }}" alt="" class="center-block img-100">
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 20px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p>为切实推进城服公司帮扶村庄——新庄村、铁孟村脱贫攻坚工作，助力泾河新城打赢脱贫攻坚战，经城服公司党支部研究决定，深入开展“党建+新庄村、铁孟村脱贫攻坚”工作，结合我公司实际，现制定具体工作方案如下：</p>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 50px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <h3 style="color: #008cd6;">一、大力扶持新庄村、铁孟村花卉苗木业</h3>
            <p style="padding-bottom: 20px;">
                城服公司将大力扶持新庄村、铁孟村发展花卉苗木业，引导带动贫困户参与到这些产业中来，脱贫致富。城服公司每年都有用大量的绿植、花卉苗木布置办公区域和景区的需求，可在符合相关条件的基础上，涉及项目优先向贫困村、贫困户安排。同时，公司还将对新庄村、铁孟村采取以下扶持措施：
            </p>
            <p style="padding-bottom: 20px;">
                1.加强技术培训。分类别开展“联合”“订单”“定向”培训；加强扶贫技术服务队伍建设，建立花卉苗木产业技术人员库；创新技术服务方式，采取“科技特派团”“结队帮扶”等形式推广苗木业新技术、新品种、新机具。</p>
            <p>
                2.做好市场信息服务。分层次建立贫困村农民专业合作社、花卉苗木手机信息或微信、QQ群服务平台，及时、精准推送产品市场信息，积极牵线搭桥，不仅保证城服公司内部的销售量，更要保证引导贫困村参与花卉苗木展会、网上销售、农超对接等各类平台，采取多种形式促进产销对接。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 50px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="{{ asset('images/qyfp/qyfp_xt1.jpg') }}" alt="" style="width: 99%;">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="{{ asset('images/qyfp/qyfp_xt2.jpg') }}" alt="" style="width: 99%;">

            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="{{ asset('images/qyfp/qyfp_xt3.jpg') }}" alt="" style="width: 99%;">

            </div>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <h3 style="color: #008cd6;">二、提供保洁保安培训、就业咨询</h3>
            <p style="margin-bottom: 20px;">
                考虑到新庄村、铁孟村依然留有劳动力的存在，而城服公司又在保洁保安用工有大量的需求，从而可以促进剩余劳动力进行就业，公司可以对其提供保洁保安的就业咨询以及相关培训。扶持措施如下：</p>
            <p style="margin-bottom: 20px;">
                新庄村、铁孟村将有意向从事保洁保安工作的人员数量统计后交由城服公司，公司将派遣专业人士对这些人员提供就业咨询并进行相关用工培训。培训结束后，公司会综合各方面的因素考虑，择优对部分人员提供就业岗位。</p>
            <p>以上是城服党支部助力新庄村、铁孟村的脱贫攻坚方案，希望此方案能够实现贫困户和城服公司的双赢。</p>
        </div>
    </div>
@endsection
