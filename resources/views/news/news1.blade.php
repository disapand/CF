@extends('layouts.header')

@section('css')
    @parent
    <style>
        p{
            text-align: justify;
            text-indent: 2em;
            line-height: 2.5em;
            margin-top: 30px;
        }

        p img{
            width: 100%;
        }

        span{
            border-radius: 5px;
            border: 1px solid #eee;
            padding: 10px 20px;
            margin: 0 5px;
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
            	<div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    	<h1 style="color: #008dd5">{{ $new['title'] }}</h1>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 60px;border-bottom: #d2d2d2 solid 1px;">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <p style="color: #d2d2d2; margin-top: 0">{{ \Carbon\Carbon::parse($new['updated_at'])->toDateString() }}</p>
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="text-right">
                            <span>收藏</span>
                            <span>评论</span>
                            <span>分享</span>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 30px;">
                    {!! $new['content'] !!}
                </div>

                <div class="row" style="margin-bottom: 100px;">
                    <img src=" {{ asset('images/news/fx.png') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection