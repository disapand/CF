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

        span {
            border: #d2d2d2 1px solid;
            border-radius: 5px;
            padding: 5px 15px;
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
                    	<h1 style="color: #008dd5">布局网约车 东风乘用车与首汽约车达成战略合作</h1>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 60px;border-bottom: #d2d2d2 solid 1px;">
                    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <p style="color: #d2d2d2">2017-12-06</p>
                    </div>
                    <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="text-right">
                            <span>收藏</span>
                            <span>评论</span>
                            <span>分享</span>
                        </div>
                    </div>
                </div>
                <div class="row wzys" style="margin-top: 60px">
                    <p style="margin-bottom: 60px;">绿色、健康、人文、和谐是泾河新城回迁安置楼盘的总体设计理念。在泾河新城开发建设项目中，陕西省西咸新区泾河新城城市综合服务有限公司负责安置迁项共三个，分别是崇文佳苑、瀛洲新苑和泾都壹号，项目累计总建筑面积约505.8万平方米，主要用于当地村民回迁安置，安居乐业。
                    </p>
                    <p style="margin-bottom: 60px;">在回迁安置工作中，我们物业工作涉及广泛的服务: 安置补偿制度、项目配套设施、选房流程、供气供暖等。泾河·崇文佳苑项目是泾河新城重点建设项目，项目划分有安置区、保障房、以及公共配套的政府大楼、中小学校、医院、中央广场、商业街、公园和酒店等，于2013年启动，是泾河新城成立以来规模最大的高品质安置小区。在小区空间管理及服务方面，我们力求将小区打造成为一个空间环境、物理环境和人文环境优越的高品质安置小区，通过标准化的保安保洁服务管理，绿色环保节能减排的运用，推广及发展多元化的文化活动，全面提升小区的综合环境和文化氛围，将项打造成为一个景观优美、服务便捷、居住舒适的高品质田园都市社区; 并且作为一个中国式宜居宜游田园城市示范小区进行推广。</p>
                </div>
                <div class="row" style="margin-bottom: 60px;">
                    <img src=" {{ asset('images/news/news1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="row wzys" style="margin-top: 60px">
                    <p style="margin-bottom: 60px;">绿色、健康、人文、和谐是泾河新城回迁安置楼盘的总体设计理念。在泾河新城开发建设项目中，陕西省西咸新区泾河新城城市综合服务有限公司负责安置迁项共三个，分别是崇文佳苑、瀛洲新苑和泾都壹号，项目累计总建筑面积约505.8万平方米，主要用于当地村民回迁安置，安居乐业。
                    </p>
                    <p style="margin-bottom: 60px;">在回迁安置工作中，我们物业工作涉及广泛的服务: 安置补偿制度、项目配套设施、选房流程、供气供暖等。泾河·崇文佳苑项目是泾河新城重点建设项目，项目划分有安置区、保障房、以及公共配套的政府大楼、中小学校、医院、中央广场、商业街、公园和酒店等，于2013年启动，是泾河新城成立以来规模最大的高品质安置小区。在小区空间管理及服务方面，我们力求将小区打造成为一个空间环境、物理环境和人文环境优越的高品质安置小区，通过标准化的保安保洁服务管理，绿色环保节能减排的运用，推广及发展多元化的文化活动，全面提升小区的综合环境和文化氛围，将项打造成为一个景观优美、服务便捷、居住舒适的高品质田园都市社区; 并且作为一个中国式宜居宜游田园城市示范小区进行推广。</p>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <img src=" {{ asset('images/news/news1_2.jpg') }}" alt="" class="img-100">
                </div>

                <div class="row" style="margin-bottom: 100px;">
                    <img src=" {{ asset('images/news/fx.png') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection