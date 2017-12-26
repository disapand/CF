@extends('layouts.header')

@section('ejdh')
    <li><a href="{{ url('/qyjj') }}">企业简介</a></li>
    <li><a href="{{ url('/fzyj') }}">发展愿景</a></li>
    <li><a href="{{ url('/zzjg') }}"  class="active">组织架构</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3" style="margin-top: 150px;margin-bottom: 150px;">
            <img src="images/zzjg.png" alt="" class="center-block">
        </div>
    </div>
    
    @endsection