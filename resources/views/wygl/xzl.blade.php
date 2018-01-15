@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}" class="active">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}" class="active">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
@endsection

@section('contents')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_xzl.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyfhzx_z.png') }}" alt="" class="center-block" style="margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block img-100" style="margin-top: 50px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3 wzys">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">泾河新城产业孵化中心以写字楼、公寓为主，中心位于高泾中路以南，高泾南路以北，崇文塔四街以北，北大街以西，占地面积约 70129 ㎡，建筑面积约63805㎡。入驻企业目前达三十余家。物业管理设施设备齐全，制度完善，目前由城服公司发展服务部对其进行项目管理工作，物业管理人员十余人，一线工作人员一百余人。主要包括市政公用设施的维修、养护和管理，房屋建筑本体共用设施设备的维修、养护、管理和运行服务。对房屋建筑本体共用部位的维修、养护和管理。对公共财产进行看护并配合、协助当地公安机关进行安全监控和巡视等保安工作。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/xzl_1.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/xzl_2.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/xzl_3.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row" style="margin-top: 30px;margin-bottom: 150px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/xzl_4.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/xzl_5.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/xzl_6.jpg') }}" alt="" class="img-100">
        </div>
    </div>

@endsection