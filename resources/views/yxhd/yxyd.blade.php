@extends('layouts.header')

@section('css')
    @parent
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4{
            padding-left: 3px;
            padding-right: 2px;
        }
    </style>
@endsection

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">研学活动</a></li>
    <li><a href="{{ url('/wljl') }}">文旅交流</a></li>
    <li><a href="{{ url('/dzfw') }}">定制服务</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/yxhd/ytwg') }}">一塔五馆</a></li>
    <li><a href="{{ url('/yxhd/tsty') }}">特色体验</a></li>
    <li><a href="{{ url('/yxhd/jqld') }}">景区联动</a></li>
    <li><a href="{{ url('/yxhd/yxyd') }}">研学营地</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/yxhd/yxyd_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 100px;margin-bottom: 50px;">
            <img src=" {{ asset('images/yxhd/yxyd_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                西咸新区泾河新城崇文塔景区，是大西安北部中心首席文化景区，中华优秀传统文化博览馆集群，打造以“崇文尚学·博览华夏”为主题的综合性文化旅游度假区，近年来景区以“崇文尚学”的传统教育理念为核心，融合一塔五馆“陕商文化”、“秦腔艺术”、“非遗文化”、“国学古韵”、“太极文化”等具有特色的传统文化内涵的博览馆集群得到了省文化厅、省旅游局的充分肯定和大力支持，乐华城、寿平民宿、茯茶镇等为项目实施构成了理想的设施配套和地理环境优势。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                为贯彻“以学生发展为本”、以“改变学习方式”为特点的教育理念，依据中共中央、国务院、教育部、国家旅游局文件，有关营地建设发展的政策，结合西安市教育生态系统，陕西省西咸新区泾河新城城市综合服务有限公司建设泾河新城研学营地，通过市场化运作模式构建“快乐型学习”、“研学型课程”和“拓展型课程”及趣味性课程相结合的新型研学旅行模式。项目主要服务于来自全国各省市中小学生来景区开展研学旅行，服务于世界各国中小学生来泾河新城开展游学等教育旅游服务。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                本基地一期主要基础设施条件为泾河新城崇文塔景区。设置专业教育教室（国学礼仪、捏面塑、画马勺、拼图等，配置多媒体教学设备、音响设备和乐器），可同时进行上百人活动的专业体验，就餐、住宿，利用文化景区资源优势，实现文化与实践相结合研学模式。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;margin-top: 30px;">
            <p>
                二期主要利用景区一区、四区外围规划用地作为研学活动拓展体验区，设置有（攀岩、独木桥、七巧板等项目）可同时容纳上百人活动的专业拓展体验。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>
                本项目为大型综合性中小学生研学旅行文化教育主题营地，此项目的建设，在较长时期都具有唯一性，先进性。研学营地的“领航者”。</p>
        </div>
    </div>

    <div class="row" style="margin-top: 5px;margin-bottom: 100px;">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt4.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt5.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/yxhd/yxyd_xt6.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
