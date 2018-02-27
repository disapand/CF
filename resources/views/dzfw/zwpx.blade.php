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
    <li><a href="{{ url('/zhfw') }}"  class="active">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>{{--还没有开发--}}
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/zhfw/zhcs') }}">智慧城市</a></li>
    <li><a href="{{ url('/zhfw/ggjt') }}">公共交通</a></li>
    <li><a href="{{ url('/zhfw/jjny') }}">洁净能源</a></li>
    <li><a href="{{ url('/dzfw') }}">回迁安置</a></li>
    <li><a href="{{ url('/dzfw/zwpx') }}" class="active">政务培训</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/dzfw/zwpx_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/dzfw/zwpx_z.png') }}" alt="" class="img-100" style="margin-top: 60px;margin-bottom: 60px;">
        </div>
    </div>

    <div class="row" style="margin-bottom: 30px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p>结合我公司的实际情况以及所在地区文化，依据《全国关于质量管理体系的认证要求》，对标浙江、上海等地先进做法与成功经验，聘请专家培训师对公司新老员工进行了系列培训，包括良好行为规范、公文书写、法务知识、个人行为素质提升等课程。为了使窗口工作人员在工作期间服务更加服务更加规范，树立良好的服务形象，我们定期组织工作人员对各项规章制度、政府管理章程等进行系统的学习。希望通过不断的提升和学习，增强工作人员的岗位认同感和员工服务意识。 </p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/dzfw/zwpx_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/dzfw/zwpx_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/dzfw/zwpx_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 100px;margin-top: 5px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/dzfw/zwpx_xt4.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/dzfw/zwpx_xt5.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/dzfw/zwpx_xt6.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
