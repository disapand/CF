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
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4{
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
            <img src=" {{ asset('images/tdjs/tdjs_dt.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2"  style="margin-top: 100px;margin-bottom: 60px;">
            <img src="{{ asset('images/tdjs/tdjs_z.png') }}" alt="" class="center-block img-100">
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 50px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <p>为丰富广大员工的业余生活，完善公司团队建设制度，增强员工之间的沟通与交流，丰富员工的业余文化生活，增进各部门之间的合作与凝聚力，营造积极向上、团结奋进的企业文化氛围，根据公司实际，我们定期制定团建方案、丰富团建内容，力求通过团建活动的开展，为公司打造一支团结、民主、高效、务实的队伍。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 100px;">
        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt1.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2014.3.12植树活动</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt2.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2014.2前往安吴青训班进行学习交流</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt3.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2015.6.4.篮球友谊赛</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt4.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2014.3.12植树活动</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt5.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2014.2前往安吴青训班进行学习交流</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt6.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2015.6.4.篮球友谊赛</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt7.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2014.3.12植树活动</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt8.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2014.2前往安吴青训班进行学习交流</p>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tdjs/tdjs_xt9.jpg') }}" alt="" style="width: 99%;">
                    <p class="text-center" style="margin-top: 10px;">2015.6.4.篮球友谊赛</p>
                </div>
            </div>
        </div>
    </div>

@endsection
