@extends('layouts.header')

@section('css')
    @parent
    <style>
        .nr p {
            text-align: justify;
            text-indent: 2em;
            line-height: 2.5em;
            margin-top: 30px;
        }

        .nr span {
            border-radius: 5px;
            padding: 10px 20px;
            margin: 0 5px;
        }

        p img {
            max-width: 100%;
        }

        span {
            border-radius: 5px;
            border: 1px solid #eee;
            padding: 10px 20px;
            margin: 0 5px;
        }

        .share-list ul {
            list-style: none;
            float: right;
        }

        .share-list ul li {
            float: left;
            margin: 0 3px;
        }

        p img {
            margin-left: 50%;
            transform: translateX(-50%);
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
                        <p style="color: #d2d2d2; margin-top: 0;text-indent: 0;">{{ \Carbon\Carbon::parse($new['created_at'])->toDateString() }}</p>
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 visible-md-block visible-lg-block">
                        <div class="text-right">
                            <span class="border-span">浏览<span class="badge">{{ $new['count'] }}</span></span>
                            <span class="border-span">分享<span class="badge">{{ $new['share'] }}</span></span>
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
                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                        <div class="bdsharebuttonbox" style="float: right;">
                            <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                            <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                            <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                            <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                            <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                            <a href="#" class="bds_more" data-cmd="more"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">


        </div>

    </div>

@endsection

@section('script')
    <script>window._bd_share_config = {
            "common": {
                "bdSnsKey": {},
                "bdText": "",
                "bdMini": "2",
                "bdMiniList": false,
                "bdPic": "",
                "bdStyle": "1",
                "bdSize": "24"
            }, "share": {}
        };
        with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
@endsection