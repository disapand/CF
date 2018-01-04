@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}" class="active">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/dzfw') }}" class="active">回迁安置</a></li>
    <li><a href="{{ url('/dzfw/zwpx') }}">政务培训</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/dzfw/hqaz_dt.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/dzfw/hqaz_z.png') }}" alt="" class="center-block" style="margin-top: 60px;margin-bottom: 60px;">
        </div>
    </div>

    <div class="row" style="line-height: 2em;">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <p style="text-indent: 2em;text-align: justify;">绿色、健康、人文、和谐是泾河新城回迁安置楼盘的总体设计理念。在泾河新城开发建设项目中，陕西省西咸新区泾河新城城市综合服务有限公司负责安置迁项共三个，分别是崇文佳苑、瀛洲新苑和泾都壹号，项目累计总建筑面积约505.8万平方米，主要用于当地村民回迁安置，安居乐业。</p>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-top: 50px;margin-bottom: 50px;">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
            <p style="text-indent: 2em;text-align: justify;">在回迁安置工作中，我们物业工作涉及广泛的服务: 安置补偿制度、项目配套设施、选房流程、供气供暖等。泾河·崇文佳苑项目是泾河新城重点建设项目，项目划分有安置区、保障房、以及公共配套的政府大楼、中小学校、医院、中央广场、商业街、公园和酒店等，于2013年启动，是泾河新城成立以来规模最大的高品质安置小区。在小区空间管理及服务方面，我们力求将小区打造成为一个空间环境、物理环境和人文环境优越的高品质安置小区，通过标准化的保安保洁服务管理，绿色环保节能减排的运用，推广及发展多元化的文化活动，全面提升小区的综合环境和文化氛围，将项打造成为一个景观优美、服务便捷、居住舒适的高品质田园都市社区; 并且作为一个中国式宜居宜游田园城市示范小区进行推广。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src="{{ asset('images/dzfw/hqaz_xt1.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src="{{ asset('images/dzfw/hqaz_xt2.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src="{{ asset('images/dzfw/hqaz_xt3.jpg') }}" alt="" style="width: 99%;">
        </div>
    </div>
    <div class="row" style="margin-bottom: 150px;margin-top: 20px;">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-3">
            <img src="{{ asset('images/dzfw/hqaz_xt4.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src="{{ asset('images/dzfw/hqaz_xt5.jpg') }}" alt="" style="width: 99%;">
        </div>
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <img src="{{ asset('images/dzfw/hqaz_xt6.jpg') }}" alt="" style="width: 99%;">
        </div>
    </div>

@endsection
