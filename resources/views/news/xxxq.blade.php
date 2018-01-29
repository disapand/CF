@extends('layouts.header')

@section('css')
    @parent
    <style>
        .news_list {
            border-bottom: #d2d2d2 solid 2px;
            margin-bottom: 20px;
        }

        .news_list p:hover {
            color: #008dd5;
        }

        .page {
            list-style: none;
            display: inline-block;
            margin-left: 50%;
            transform: translateX(-50%);
            margin-top: 80px;
        }

        .page li {
            float: left;
            padding: 5px 15px;
            margin: 0 5px;
            color: #f1f1f1;
            background-color: #c9c9c9;
            cursor: pointer;
        }

        .page li:hover, .page .active {
            background-color: #008dd5;
            color: #fff;
        }

    </style>
@endsection

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

@section('ejdh')
@endsection

@section('contents')

    <div class="container-fluid">
        <div class="row" style="margin-top: 100px;">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <img src=" {{ asset('images/news/news_xxxq_t.png') }}" alt="" class="center-block img-100">
            </div>
        </div>
        <div class="row" style="margin-top: 60px;margin-bottom: 80px;">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <a href="{{ url('/news/1') }}"><p>泾河新城2017年第45周空气质量</p></a>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.12.03</p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>关于开展泾河新城砂石场、白灰场 </p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.11.24 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>泾河新城权责清单目录</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.11.14 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>陕西省西咸新区泾河新城政务服务中心</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.11.13 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>产为孵化基地规划公示牌</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.11.05 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>泾河新城2017年第45周空气质量</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.10.26 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>关于开展泾河新城砂石场、白灰场</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.10.22 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>泾河新城权责清单目录</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.10.18 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>陕西省西咸新区泾河新城政务服务中心</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.10.09 </p>
                            </div>
                        </div>
                        <div class="row news_list">
                            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                                <p>产为孵化基地规划公示牌</p>
                            </div>
                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <p>2017.10.04</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <ul class="page">
                        <li>
                            <上一页
                        </li>
                        <li class="active">1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>上一页></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection