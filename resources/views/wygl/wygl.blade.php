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
    <li><a href="{{ url('/wygl/xzl') }}">物业管理团队</a></li>
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/wygl/sy') }}">物业增值服务</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2 {
            padding-right: 1px;
            padding-left: 1px;
        }
    </style>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 150px;margin-bottom: 50px;">
            <img src=" {{ asset('images/wygl_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 50px;">
            <p style="text-indent: 2em;">
                泾河新城城服公司负责泾河新城内各项目的物业管理工作，已建立了一支会管理、精业务、肯奉献、高素质、服务优的物业管理队伍，目前物业管理部门有土建工程师、弱电工程师、强电工程师、市政物业运营管理、设备管理员、绿化维护以及消防安全等多专业管理人员。随着泾河新城建设步伐的加快，还将继续扩大业务，通过多种方式展现具有特色的物业管理理念，在泾河新城的发展趋势下，配合做好区域内各项目的物业管理工作。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="{{ asset('images/cyfa_z.png') }}" alt="">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
                    <p class="text-center"><a href="{{ url('/zsyy/cyfh') }}">查看详情 >></a></p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="{{ asset('images/cwt_z.png') }}" alt="">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
                    <p class="text-center"><a href="{{ url('/wygl/whjq') }}">查看详情 >></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl1.jpg') }}" alt="" style="width: 98%;">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl2.jpg') }}" alt="" style="width: 98%;">
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="{{ asset('images/spms_z.png') }}" alt="">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
                    <p class="text-center"><a href="{{ url('/wygl/whjq') }}">查看详情 >></a></p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="{{ asset('images/jhzh_z.png') }}" alt="">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
                    <p class="text-center"><a href="{{ url('/wygl/whjq') }}">查看详情 >></a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl3.jpg') }}" alt="" style="width: 98%;">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl4.jpg') }}" alt="" style="width: 98%;">
                </div>
            </div>


            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="{{ asset('images/jhrl_z.png') }}" alt="">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
                    <p class="text-center"><a href="{{ url('/wygl/sy') }}">查看详情 >></a></p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <img src="{{ asset('images/cwjy_z.png') }}" alt="">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-2">
                    <p class="text-center"><a href="{{ url('/wygl/zz') }}">查看详情 >></a></p>
                </div>
            </div>
            <div class="row" style="margin-bottom: 150px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl5.jpg') }}" alt="" style="width: 98%;">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl6.jpg') }}" alt="" style="width: 98%;">
                </div>
            </div>
        </div>
    </div>

@endsection
