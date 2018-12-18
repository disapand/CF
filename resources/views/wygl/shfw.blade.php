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
    <li><a href="{{ url('/wygl/shfw') }}" class="active">社会服务</a></li>
    <li><a href="{{ url('/zhfw/cygn') }}">餐饮管理</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4 {
            padding-left: 2px;
            padding-right: 2px;
        }
    </style>
@endsection

@section('contents')
{{--永乐国税--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/lygs.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/ylgs.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 5%;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-md-offset-1">
            <p style="margin-top: 50px;margin-bottom: 25px">永乐国税所项目为位于泾河新城永乐镇街道。主要以政府事业单位为主，属老旧办公大院，总面积约800㎡。</p>
            <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：24小时安保管控、外来人员及车辆出入登记、巡视园内各隐患点；周一至周六对大门外侧及院内公共区域、办公楼走廊、卫生间等区域进行保洁服务；周一至周五提供员工餐服务。</p>
        </div>
    </div>
    {{--公安--}}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/wyjl/jhgafj_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/wyjl/gafj_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 5%;width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-md-offset-1">
            <p style="margin-top: 50px;margin-bottom: 25px">公安局泾河新城分局项目位于泾河新城崇文佳苑三区西南角。面积约为1300多平米，办公区域分为2层。在人员配置上借鉴成熟物业服务项目的成功经验，按照精干高效的原则，合理配备项目所需人员，为泾河新城公安分局保一方平安提供优质服务。</p>
            <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：24小时安保服务、办公室以及公共区域内部精细化保洁、户外道路清扫工作。</p>
        </div>
    </div>

{{--泾河消防--}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="{{ asset('images/wyjl/jhxf_dt.jpg') }}" alt="" class="img-100">
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
        <img src="{{ asset('images/wyjl/jhxf_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
    </div>
</div>

<div class="row">
    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
        <p style="margin-top: 50px;margin-bottom: 25px;">泾河新城消防大队项目位于乐华城西门向西200米（瀛洲一街），营区建筑面积约6800㎡，配备保洁3人。</p>
        <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：负责区域包括咸阳市泾阳县永乐镇、崇文镇、泾干镇三镇的全部和高庄镇的一部；做好办公楼公共区域精细化保洁服务，提升物业服务质量，做好后勤保障工作。</p>
    </div>
</div>

<div class="row" style="margin-bottom: 6%;">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <img src="{{ asset('images/wyjl/jhxf_t1.jpg') }}" alt="" class="img-100">
    </div>
</div>

{{--信访办--}}
{{--<div class="row" style="margin-top: 6%;">--}}
    {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
        {{--<img src="{{ asset('images/wyjl/xfb_dt.jpg') }}" alt="" class="img-100">--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="row">--}}
    {{--<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">--}}
        {{--<img src="{{ asset('images/wyjl/xfb_z.png') }}" alt="" class="center-block" style="margin-top: 6%;">--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="row">--}}
    {{--<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">--}}
        {{--<img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="row">--}}
    {{--<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">--}}
        {{--<p style="margin-top: 50px;margin-bottom: 50px;">该项目位于泾河新城崇文佳苑三区西南角，办公区域分为2层，面积约为800多平米，项目配备项目主管1名，保安4名，保洁2名。日常服务包含24小时安保服务、办公室以及公共区域内部精细化保洁、户外道路清扫工作。</p>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="row" style="margin-bottom: 6%;">--}}
    {{--<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">--}}
        {{--<img src="{{ asset('images/wyjl/xfb_t1.jpg') }}" alt="" class="img-100">--}}
    {{--</div>--}}
{{--</div>--}}

{{--综合执法局--}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <img src="{{ asset('images/zhzf.jpg') }}" alt="" class="img-100">
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3">
        <img src="{{ asset('images/zhzfdd.png') }}" alt="" class="center-block" style="margin-top: 6%;">
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <img src="{{ asset('images/whjq_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
    </div>
</div>

<div class="row">
    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
        <p style="margin-top: 50px;margin-bottom: 25px;">泾河新城综合行政执法局项目属于开放式办公物业服务类型，经委托方提供测算结果，项目占地面积约25700平方米，其中办公区面积约10200平方米，绿化面积约2800平方米，公共区域约12700平方米。</p>
        <p style="margin-top: 25px;margin-bottom: 50px;">服务范围：办公区、公共部分、走廊、卫生间、会议室的室内外清洁卫生、生活垃圾收集清运，门岗安全秩序维护工作，来访人员登记工作，餐厅运营服务管理，客服会议及接待室服务。</p>
    </div>
</div>

{{--群众中心--}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <img src="{{ asset('images/qzgzzx.png') }}" alt="" class="center-block" style="height: 45px">
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
    </div>
</div>

<div class="row">
    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
        <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 25px;">泾河新城群众工作中心办公楼位于泾河新城正阳大道西北侧崇文佳苑三区A段商铺，建筑面积约800平米。项目主管1人，保安2人，保洁2人。</p>
        <p style="margin-top: 25px;text-indent: 2em;margin-bottom: 50px;">服务范围：办公楼内外秩序维护、办公室、公共区域内部精细化保洁、户外道路清扫。</p>
    </div>
</div>

<div class="row" style="margin-bottom: 6%;">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img src=" {{ asset('images/qzzx1.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img src=" {{ asset('images/qzzx2.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img src=" {{ asset('images/qzzx3.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            <img src=" {{ asset('images/qzzx4.jpg') }}" alt="" class="img-100">
        </div>
    </div>
</div>

{{--学校安保--}}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <img src="{{ asset('images/xxab.png') }}" alt="" class="center-block" style="height: 45px;">
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <img src="{{ asset('images/cyfhzx_xmjj.png') }}" alt="" class="center-block" style="margin-top: 50px;width: 100%;">
    </div>
</div>

<div class="row">
    <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
        <p style="margin-top: 50px;text-indent: 2em;margin-bottom: 25px;">服务位置：泾河新城现拥有学校共计33所，其中幼儿园4所、公办小学24所、公办中学5所，现配备77名安保人员。</p>
        <p style="margin-top: 25px;text-indent: 2em;margin-bottom: 25px;">服务定位：学校在狠抓教育教学管理的同时，一定要把安全工作放在重中之重的位置，并把学校安全工作提高到学校科学发展和可持续发展的战略高度来认识。安保服务进一步加强了安全校园建设，促进了学校各项工作的开展，保证了良好的教育教学秩序。</p>
        <p style="margin-top: 25px;text-indent: 2em;margin-bottom: 50px;">服务内容：校园24小时门卫管理。校园内重点部位防破坏、防事故、防盗、防外来人员私自进入等守护、守卫工作。负责外来人员车辆的登记、出入校园物资检查等执勤工作。负责组织校园巡逻，及时发现各类安全隐患，制止校园不文明举止，发现校园暴力及时为师生提供援助。维护校园的交通、安全工作。</p>
    </div>
</div>

<div class="row" style="margin-bottom: 6%;">
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src=" {{ asset('images/xxab.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src=" {{ asset('images/xxab2.jpg') }}" alt="" class="img-100">
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <img src=" {{ asset('images/xxab3.jpg') }}" alt="" class="img-100">
        </div>
    </div>
</div>

@endsection
