@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-6,.col-sm-6,.col-md-6,.col-lg-6,.col-xs-2,.col-sm-2,.col-md-2,.col-lg-2 {
            padding-right: 5px;
            padding-left: 5px;
        }

        .tpbt{
            margin-bottom: -30px;
        }

        .tpbt span {
            color: #fff;
            font-size: 1.5em;
            display: inline-block;
            margin-left: -15px;
            padding-left: 15px;
            padding-right: 75px;
            background-image:url('{{ asset('images/tpbt_bg.png') }}');
            background-position: top;
            background-repeat: no-repeat;
        }

        .tpbt a {
            line-height: 2.5em;
            padding-left: 50px;
        }

        .tpbt:hover>div>a {
            text-decoration: none;
            color: #008cd6;
        }

        .tpbt:hover div span {
            cursor: pointer;
            background-image: url("{{ asset('images/tpbt_bg_hv.png') }}");
        }

    </style>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wygl_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 6%;margin-bottom: 50px;">
            <img src=" {{ asset('images/wygl_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">一、概况</h3>
            <p style="text-indent: 2em;">
                泾河城服物业管理服务工作，主要承接高端住宅区、商业写字楼、政府办公楼、商业综合体、旅游综合体等项目的物业管理。服务内容涵盖前期规划、高级会议服务、餐厅运营服务、安保服务、环境卫生服务、园区绿化养护、房屋设施设备维修保养、停车场管理等综合物业服务。目前累计承接项目18个，管理面积达170万平方米。物业管理服务中心现有高级管理人员52人，基层服务人员300余人。
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">二、物业项目</h3>
            <p style="text-indent: 2em;">
                前期承接产业孵化中心、崇文塔景区商建、崇文佳苑住宅、寿平民宿小镇、陕西泾合热力办公楼、泾河实业办公楼、泾河新城永乐国税所、公安局泾河新城分局、泾河新城群众工作中心、泾河新城消防大队、泾河新城茯茶镇集团办公楼物业项目。2018年以来，泾河城服新增陕西茯茶文化博物馆、泾河新城茯茶展示基地、政务大厅（西区）办公楼、崇文尚学住宅、泾河新城学校安保服务（33所中小学）、综合执法大队、智慧农业园等7个物业项目，新增管理面积2.7万平方米。
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">三、服务理念</h3>
            <p style="text-indent: 2em;">
                泾河城服在物业管理中，围绕“标准化、规范化、智慧化”目标，从多个维度下功夫提升服务水平：一是自2018年开始在各物业服务管理工作中全面推行ISO9000标准化管理体系和人性化管理的模式，做到高标准、高起点，科学管理、规范服务、智能管理；二是着重把握两个环节，严把“引进关”保证引进的人才具有较高的专业技能、较好的综合素质和较强的服务意识，重视“培训关”，针对不同岗位人员分别制订培训计划，达到员工一专多能；三是所有对外服务工作均采用限时工作制，以满足客户的办公需要和心理需要为目标，在对客户承诺的时限内完成各项工作，按照客户的工作生活节奏设计服务内容；四是建立人性化的服务标识系统（CIS），各项目设立服务标识，如公司标识、服装标识、工作牌、办公标识等；五是在物业项目设24小时热线服务电话及投诉电话，建立项目经理垂直管理机制，定期以“月报”形式向业主单位汇报项目的运作情况，加强与业主的沟通。
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1" style="margin-bottom: 3%;">
            <h3 style="color: #008cd6;">四、管理队伍</h3>
            <p style="text-indent: 2em;">
                泾河城服物业管理服务中心自成立之日起，为泾河新城辖区提供了“亲和、严谨、安全、方便”的物业环境。全方位强化物业管理，不断提高专业技术素养和现代服务素养。现拥有一支技术精良、服务热忱、爱岗敬业的高素质管理队伍。
            </p>
            <p style="text-indent: 2em;">
                物业管理服务工作倡导红色物业管理，按照党的优良作风引领服务方向，坚持“五个”服务特色，着力打造高素质的服务铁军。 以“打造宜居新城”为使命，以“创建红色物业示范点”为目标，当好“五星级店小二”，推进服务型党组织建设，充分展现“开放、活力、阳光、高效、包容”的泾河新形象！
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row visible-md-block visible-lg-block" style="margin-top: 20px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                	<div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        	<span>产业孵化中心</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/zsyy/cyfh') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>崇文塔景区</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/whjq') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/zsyy/cyfh') }}"><img src=" {{ asset('images/wygl1.jpg') }}" alt="" class="img-100"></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/whjq') }}"><img src=" {{ asset('images/wygl2.jpg') }}" alt="" class="img-100"></a>
                </div>
            </div>

            <div class="row visible-md-block visible-lg-block" style="margin-top: 20px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>崇文·尚学</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/zsyy/cwsx') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>崇文佳苑</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/zz') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/zsyy/cwsx') }}"><img src=" {{ asset('images/wygl3.jpg') }}" alt="" class="img-100"></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/zz') }}"><img src=" {{ asset('images/wygl4.jpg') }}" alt="" class="img-100"></a>
                </div>
            </div>

            <div class="row visible-md-block visible-lg-block" style="margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>泾河公安分局</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/shfw') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>泾河消防</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/shfw') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/shfw') }}"><img src=" {{ asset('images/wygl5.jpg') }}" alt="" class="img-100"></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/shfw') }}"><img src=" {{ asset('images/wygl6.jpg') }}" alt="" class="img-100"></a>
                </div>
            </div>

            <div class="row visible-md-block visible-lg-block" style="margin-top: 20px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>信访办</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/shfw') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>泾河热力物业</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/sy') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/shfw') }}"><img src=" {{ asset('images/wygl7.jpg') }}" alt="" class="img-100"></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/sy') }}"><img src=" {{ asset('images/wygl8.jpg') }}" alt="" class="img-100"></a>
                </div>
            </div>

            <div class="row visible-md-block visible-lg-block" style="margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>寿平民宿小镇</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/whjq') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span style="margin-left: -25px">泾河智慧农业园</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/cyy') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/whjq') }}"><img src=" {{ asset('images/wygl9.jpg') }}" alt="" class="img-100"></a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/wygl/cyy') }}"><img src=" {{ asset('images/wygl10.jpg') }}" alt="" class="img-100"></a>
                </div>
            </div>

            <div class="row visible-md-block visible-lg-block" style="margin-top: 20px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>餐饮管理</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/whjq') }}">查看更多 >></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 6%;margin-top: 2%;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="{{ url('/zhfw/cygn') }}"><img src=" {{ asset('images/wygl11.jpg') }}" alt="" class="img-100"></a>
                </div>
            </div>
        </div>
    </div>

@endsection
