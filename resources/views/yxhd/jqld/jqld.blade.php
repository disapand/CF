@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">合作交流</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}" class="active">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
            <a href=" {{ url('/yxhd/jqld/blhx') }}"><img src="{{ asset('images/yxhd/jqld/jqld_blhx.jpg') }}" alt="" style="width: 100%;margin-bottom: 30px;margin-top: 100px;"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
            <a href="{{ url('/yxhd/jqld/ddyd') }}"><img src="{{ asset('images/yxhd/jqld/jqld_ddyd.jpg') }}" alt="" style="width: 100%;margin-bottom: 30px;"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
            <a href="{{ url('/yxhd/jqld/hsjy2') }}"><img src="{{ asset('images/yxhd/jqld/jqld_hsjy2.jpg') }}" alt="" style="width: 100%;margin-bottom: 30px;"></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
            <a href="{{ url('/yxhd/jqld/ngty') }}"><img src="{{ asset('images/yxhd/jqld/jqld_ngty.jpg') }}" alt="" style="width: 100%;margin-bottom: 30px;"></a>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 col-sm-offset-1 col-xs-offset-1">
            <a href="{{ url('/yxhd/jqld/spgd') }}"><img src="{{ asset('images/yxhd/jqld/jqld_spgd.jpg') }}" alt="" style="width: 100%;margin-bottom: 30px;"></a>
        </div>
    </div>

@endsection
