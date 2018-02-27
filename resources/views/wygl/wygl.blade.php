@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}"  class="active">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>{{--还没有开发--}}
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/wygl/xzl') }}">写字楼</a></li>
    <li><a href="{{ url('/wygl/whjq') }}">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
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
            margin-bottom: -2px;
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
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 150px;margin-bottom: 50px;">
            <img src=" {{ asset('images/wygl_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <h3 style="color: #008cd6;">一、概况</h3>
            <p style="text-indent: 2em;">
                泾河城服物业管理团队是一支会管理、精业务、肯奉献、高素质、服务优的队伍。公司在管物业项目10余个，服务人员120余人，管理面积超过30余万平方米，项目涵盖高端住宅区、商业写字楼、政府办公楼、商业综合体、旅游综合体等。业务范围涉及项目前期规划、高级会议服务、星级酒店服务、环境卫生服务、安全秩序维护、园林绿化养护、设备维护保养、配套设施管理、资产委托管理等。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <h3 style="color: #008cd6;">二、服务理念</h3>
            <p style="text-indent: 2em;">
                践行“物有所依，业有所托”的服务承诺，发扬“精细、专业、诚信、和谐”的物业管理理念，以物业管理服务、增值服务为主要业务，达到物业管理精细化、专业服务标准化、管理手段现代化。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
            <h3 style="color: #008cd6;">三、发展愿景</h3>
            <p style="text-indent: 2em;">
                打造泾河新城乃至西咸新区管理服务的标杆企业，不断强化标准，成为全国物业管理服务行业标准。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 50px;">
            <h3 style="color: #008cd6;">四、发展优势</h3>
            <p style="text-indent: 2em;">
                本土化网络布局，聚焦行业终端的服务战略定位，优秀的管理团队和人才梯队建设，完善的管理体系保障，为物业保值增值的全方位贴心服务。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row" style="margin-top: 20px;">
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
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl2.jpg') }}" alt="" class="img-100">
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
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
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl3.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl4.jpg') }}" alt="" class="img-100">
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>泾河公安分局</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/zsyy/cwsx') }}">查看更多 >></a>{{--没加链接--}}
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>泾河消防</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/zz') }}">查看更多 >></a>{{--没加链接--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl5.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl6.jpg') }}" alt="" class="img-100">
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>信访办</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/zsyy/cwsx') }}">查看更多 >></a>{{--没加链接--}}
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
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl7.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl8.jpg') }}" alt="" class="img-100">
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
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
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl9.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl10.jpg') }}" alt="" class="img-100">
                </div>
            </div>

            <div class="row" style="margin-top: 20px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="row tpbt">
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                            <span>餐饮管理</span>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            <a href="{{ url('/wygl/whjq') }}">查看更多 >></a>{{--没加链接--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-bottom: 100px;">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <img src=" {{ asset('images/wygl11.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

@endsection
