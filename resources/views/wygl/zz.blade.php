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
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}"  class="active">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
@endsection

@section('contents')
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_zz.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/zz_z.png') }}" alt="" class="center-block" style="margin-top: 150px;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 99%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">崇文佳苑坐落于西咸新区泾河新城崇文镇二路，占地约为：600余亩，总共可容纳12000余户居民。目前主要分为四大区域，崇文佳苑一区（已建成）、二区（在建）、三区（已建成，已居住人口大约20％）、八区（在建），该项目属于公租房、廉租房及周边区域居民回迁安置房集一体的大型社区，周边有完善的商业配套设施，商场、中学、小学幼、儿园。</p>
            <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 50px;">该社区的物业服务工作由泾河新城城服公司提供，截至目前在岗一线服务人员70余人，其中管理人员10人，公司一直本着于“诚信实现双赢，服务泾河新城”理念为新城居民提供优质的物业服务。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 150px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src=" {{ asset('images/zz1.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/zz2.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src=" {{ asset('images/zz3.jpg') }}" alt="" style="width: 99%;">
        </div>
    </div>

@endsection