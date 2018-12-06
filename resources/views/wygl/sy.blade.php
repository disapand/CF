@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}" class="active">商业</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4 {
            padding-left: 2px;
            padding-right: 2px;
        }
    </style>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_sy.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/sy_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">泾河热力项目位于西咸新区泾河新城泾河大道西段。建筑面积约5000㎡。项目服务包括办公楼、餐厅、园区的保洁、前台服务工作，主要对产业孵化中心进行供暖工作。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/sy1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/sy2.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/sy3.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    {{--泾河实业--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/jhsydt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/sy_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 25px;">泾河实业办公楼及销售案场位于泾河新城正阳大道西侧，东临崇文塔景区。建筑面积约2683.15㎡。</p>
            <p style="margin-top: 25px;text-indent: 2em;margin-bottom: 50px;">服务范围：前台接待，销售案场、办公区域及会议室、茶水间、会客室、员工餐厅、接待用餐场所的保洁服务等。</p>
        </div>
    </div>

    {{--茯茶集团办公楼--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/sy_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">茯茶集团办公楼项目位于陕西省西咸新区泾河新城华晨大道与高泾大道交叉处西北角，建筑面积共为3100㎡。</p>
            <p style="margin-top: 25px;text-indent: 2em;margin-bottom: 50px;">服务范围：一层招商中心、二、三层办公区域、员工餐厅、员工宿舍室、卫生间等楼内区域内及门口区域环境卫生的保洁、垃圾清理。室内花卉、家具、家电的清洁。客户咨询、业务指引、来访登记、会客服务、会议服务。楼内秩序维护，安全巡检工作。餐厅饭菜制作供应，不包含食材采购。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/fcjt1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/fcjt2.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/fcjt3.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    {{--政务大厅--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/sy_z.png') }}" alt="" class="center-block">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 25px;">政务大厅（西区）办公楼项目位于泾阳县西大街西段，临近吉元大街交汇处。大楼共9层，建筑面积约5022㎡。</p>
            <p style="margin-top: 25px;text-indent: 2em;margin-bottom: 50px;">服务范围：接待大厅、隔断办公区、独立办公室、楼梯间、电梯间、卫生间及门外区域的环境卫生保洁、垃圾清理清运，室内花卉、家具、家电的清洁保养。客户咨询、业务指引、来访登记、会客服务、会议服务。楼内外秩序、停车秩序维护，巡检工作。楼内外供水、强弱电、照明设施及相关设施设备维护保养。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/zwdt1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/zwdt2.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

@endsection
