@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">合作交流</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/yxhd/yxhd_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 6%;margin-bottom: 50px;">
            <img src=" {{ asset('images/yxhd/yxhd_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-sm-offset-1 col-xs-offset-1" style="margin-bottom: 2%;">
            <p>近年来崇文塔景区依托文化特点，以“崇文尚学·博览华夏”为主题积极开展中小学文化教育社会实践活动和中小学研学旅行活动，接待西安市高新一中、西安市中铁中学、西安市第三中学、西安市曲江一小、西安大明宫小学等近百余所学校师生约10万人参观学习开展研学及体验活动。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-sm-offset-1 col-xs-offset-1" style="margin-bottom: 6%;">
            <p style="text-indent: 2em;text-align: justify">历年来崇文塔景区申报获得国家教育部颁发的“全国中小学生研学实践教育基地”；陕西省教育厅颁发的“陕西省中小学文化教育社会实践基地”、“陕西省中小学研学实践教育基地”等荣誉称号；并获得“中华优秀博物馆集群”称号，其中陕商文化博览馆、国艺秦腔馆被陕西省社科院、陕西省戏剧家协会授予“陕西丝路商旅文化发展研究基地”和“秦腔文化教育基地”称号。</p>
        </div>
    </div>


@endsection
