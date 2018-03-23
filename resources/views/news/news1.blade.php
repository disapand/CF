@extends('layouts.header')

@section('css')
    @parent
    <style>
        .nr p{
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

        .share-list ul {
            list-style: none;
            float: right;
         }

        .share-list ul li{
            float: left;
            margin: 0 3px;
        }

        p img {
            margin-left: -2em;
        }

    </style>
@endsection

@section('yjdh')
    <li>
        <a href="{{ url('/') }}" class=".active">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
@endsection

@section('contents')

    <div class="container-fluid">
        <div class="row" style="margin-top: 6%;">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            	<div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 xqbt">
                        <h3 style="color: #008dd5">{{ $new['title'] }}</h3>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 4%;border-bottom: #d2d2d2 solid 1px;">
                    <div class="col-xs-10 col-sm-10 col-md-2 col-lg-2">
                        <p style="color: #d2d2d2; margin-top: 0;text-indent: 0;">{{ \Carbon\Carbon::parse($new['updated_at'])->toDateString() }}</p>
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 visible-md-block visible-lg-block">
                        <div class="text-right">
                            <span>收藏</span>
                            <span>评论</span>
                            <span>分享</span>
                        </div>
                    </div>
                </div>
                <div class="row nr" style="margin-top: 1%;">
                     {!! $new['content'] !!}
                </div>
            </div>
        </div>

        {{--责任编辑和分享--}}
        <div class="row" style="margin-top:1%;margin-bottom: 6%;">
            <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <div style="display: inline-block">责任编辑：{{ $new['zrbj'] }}</div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 share-list">
                        <ul>
                            <li><a version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=jinghechengfu.com"
                                   target="_blank"><img src="{{ asset('images/icon/rrw.png') }}" alt="" id="rrw"></a></li>
                            <li><a version="1.0" class="qzOpenerDiv" href="http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=jinghechengfu.com"
                                   target="_blank"><img src="{{ asset('images/icon/qqkj.png') }}" alt="" id="qqkj"></a></li>
                            <li><a version="1.0" class="qzOpenerDiv" href="http://connect.qq.com/widget/shareqq/index.html?url=jinghechengfu.com"
                                   target="_blank"><img src="{{ asset('images/icon/qq.png') }}" alt="" id="qq"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
