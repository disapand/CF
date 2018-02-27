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
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
@endsection

@section('ejdh')
@endsection

@section('contents')

    <div class="container-fluid">
        <div class="row" style="margin-top: 100px;">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <img src=" {{ asset('images/news/news_jhxq_t.png') }}" alt="" class="center-block img-100">
            </div>
        </div>
        <div class="row" style="margin-top: 60px;margin-bottom: 80px;">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                        @foreach($news as $new)
                            <div class="row news_list">
                                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <a href="{{ url('/admin/news/'.$new['id']) }}"><p>{{ $new['title'] }}</p></a>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                    <p class="text-right">{{  \Carbon\Carbon::parse($new['updated_at'])->toDateString()  }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                <div class="row">
                    {{ $news->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection