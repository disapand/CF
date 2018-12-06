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
    <li><a href="{{ url('/wygl/whjq') }}" class="active">文化景区</a></li>
    <li><a href="{{ url('/wygl/cyy') }}">产业园</a></li>
    <li><a href="{{ url('/wygl/zz') }}">住宅</a></li>
    <li><a href="{{ url('/wygl/sy') }}">商业</a></li>
    <li><a href="{{ url('/wygl/shfw') }}">社会服务</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3 {
            padding-left: 2px;
            padding-right: 2px;
        }
    </style>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/whjq_dt1.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;margin-bottom: 25px;">崇文塔景区位于陕西省西咸新区泾河新城泾阳县城东南10公里处。总占地面积约394亩，分为三期开发建设。</p>
            <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：崇文塔景区物业管理工作，景区拥有一支高效、专业的安保保洁人员，开展好景区内的安保保洁工作，维护并树立景区的良好形象；景区安保日常工作主要为车辆引导、消防检查及景区安全防备等工作；景区在工程维护方面，配备专业强电、弱电、水工，日常进行对景区水、电排查处理及维护等工作，确保景区水电运行正常；我公司将用专业的物业管理队伍，认真、全面的做好景区内的物业管理工作。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_2.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_3.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 4px;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_4.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_5.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-6 col-lg-4">
                <img src=" {{ asset('images/whjq_60.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    {{--寿平民宿小镇--}}
    <div class="row" style="margin-top: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/whjq_dt2.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/whjq_z2.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;margin-bottom: 25px;">寿平民宿小镇项目位于泾河新城高庄镇寿平村正阳大道与沣泾大道十字西北角，管理面积约91000㎡（含人工湖、水系），配备专业的安保、保洁服务人员。</p>
            <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：民宿特色的精品田园小镇，项目管理服务包括游客服务中心前台接待工作、园区公共区域维修及养护、秩序维护管理、日常保洁、垃圾收集及清运。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_7.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_8.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_9.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 4px">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_10.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_11.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src=" {{ asset('images/whjq_12.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

    {{--十三、陕西茯茶文化博物馆--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
            <img src="{{ asset('images/whjq_z2.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p style="margin-top: 50px;margin-bottom: 25px;">陕西茯茶文化博物馆位于陕西省西咸新区泾河新城茶马大道与高泾中路交叉处西北角茯茶项目一期单体楼三层。占地面积约14.8亩，总建筑面积6066㎡，地上总建筑面积5923㎡，地下建筑面积143㎡，共有2栋建筑。</p>
            <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：茯茶文化博物馆的公用部分的设施设备的维修、养护和管理。公共环境的卫生清理、垃圾收集及清运、交通、车辆行驶、停泊管理、茯茶文化博物馆的安全监控和巡视工作、消防管理、接待讲解工作、其他特约服务。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 50px">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src=" {{ asset('images/fc1.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src=" {{ asset('images/fc2.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src=" {{ asset('images/fc3.jpg') }}" alt="" class="img-100">
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <img src=" {{ asset('images/fc4.jpg') }}" alt="" class="img-100">
            </div>
        </div>
    </div>

@endsection
