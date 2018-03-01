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
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}" class="active">餐饮管理</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/zhfw/cygl_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/zhfw/cygl_z.png') }}" alt="" class="img-100" style="margin-top: 60px;margin-bottom: 60px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p>城服公司在11月1日正式接管产业孵化中心两个餐厅，通过对两个餐厅的调研摸底、数据分析等工作，城服公司针对存在的问题制定了一系列的提升措施，在为期10天的停业期内完成了各项餐厅管理制度的规范、餐厅土建改造工程、餐厅维护工程、厨房设备检修、充值刷卡系统建设工程、餐厅文化建设及氛围提升等工作。增设服务中心，在吧台帮助贫困户销售家中土鸡蛋、土蜂蜜等产品，还联合文化公司推出了一系列文创产品，方便了就餐人员选购。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;margin-top: 30px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p>在餐厅的管理上，城服公司奉行品质与安全的原则，通过营养均衡、科学搭配、采购源头可追溯化和采购流程规范化，为每一位就餐人员提供的餐食都是营养科学和安全卫生。建立餐厅服务人员考核制度，系统化培训餐厅服务人员。设立伙食委员会微信群，指定专人每周对员工进行就餐满意度调查，建立意见快速反应机制。截止目前，城服公司办理餐卡837张，接待6742人次就餐，得到广大就餐人员的广泛好评。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/cygl_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/cygl_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/zhfw/cygl_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>
@endsection
