@extends('layouts.header')

@section('ejdh')
    <li><a href="{{ url('/qyjj') }}">企业简介</a></li>
    <li><a href="{{ url('/fzyj') }}">发展愿景</a></li>
    <li><a href="{{ url('/zzjg') }}"  class="active">组织架构</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-6 col-lg-6 col-md-offset-3 col-xs-offset-1 col-sm-offset-1" style="margin-top: 6%;margin-bottom: 6%;">
            <img src="images/zzjg.png" alt="" class="center-block img-100">
        </div>
    </div>
    
    @endsection