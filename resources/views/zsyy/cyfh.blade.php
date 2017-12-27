@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}"  class="active">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/zsyy/cyfh') }}" class="active">产业孵化中心</a></li>
    <li><a href="{{ url('/zsyy/cwt') }}">崇文塔景区</a></li>
    <li><a href="{{ url('/zsyy/cwjy') }}">崇文佳苑</a></li>
    <li><a href="{{ url('/zsyy/cwsx') }}">崇文·尚学</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/zsyy/zsyy_cyfh.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-top: 150px;margin-bottom: 50px;">
            <img src=" {{ asset('images/zsyy/cyfh_z.png') }}" alt="" style="width: 99%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-top: 50px;">
            <p style="text-indent: 2em;text-align: justify">泾河新城产业孵化中心是由泾河新城开发建设（集团）有限公司开发建设。项目位于西安整体区位中轴线上，高泾南路以北、包茂复线以东、崇文塔北侧，整体地块东、南两侧紧邻城市干道，高速道路位于该地块西侧，区位优势明显。占地约6.5万平方米，总建筑面积63805平方米，是陕西省西咸新区泾河新城重点项目。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-bottom: 150px;">
            <p style="text-indent: 2em;text-align: justify">产业孵化中心一号楼致力打造成为泾河新城中小企业孵化基地，其中1号、2号、4号楼对外招商，5号楼用于政务服务大厅、企业展厅，泾河税务和泾河工商办公场地；3号楼用于泾河新城管委会、泾河新城开发建设(集团)有限公司和外协单位办公使用，6号楼为公寓楼，7号楼为食堂和运动场地。</p>
        </div>
    </div>

    
@endsection
