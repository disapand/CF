@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}" class="active">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('ejdh')
    <li><a href="{{ url('/zsyy/cyfh') }}">产业孵化中心</a></li>
    <li><a href="{{ url('/zsyy/cwt') }}">崇文塔景区</a></li>
    <li><a href="{{ url('/zsyy/cwjy') }}">崇文佳苑</a></li>
    <li><a href="{{ url('/zsyy/cwsx') }}">崇文·尚学</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="{{ asset('images/zsyy/zsyy.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 6%;margin-bottom: 50px;">
            <img src=" {{ asset('images/zsyy/zsyy_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-sm-offset-1 col-xs-offset-1" style="margin-bottom: 6%;">
            <h3 style="color:#008cd5;font-size: 1.6em;" class="text-center">招商理念</h3>
            <h4 style="color:#999;" class="text-center">洞悉根本 前瞻未来</h4>
            <p>一支能力强、讲奉献、品德好的招商团队，是保证招商工作顺利进行的重要因素。</p>
            <p>我们以“诚信”“拼搏”“共赢”为原则，汇聚一批具备良好心理素质、拥有前瞻灵活判断能力的招商营销人员，打造了一支充满工作积极性、团队凝聚力、核心竞争力及专业招商能力的优秀团队。2017年，我们的招商团队已承接10个招商项目，共计完成近30万平方米的招商业绩。在未来，我们将走出泾河新城，与“绿地”“恒大”等大品牌开发商合作，承接更多新的招商项目，创造更优秀的成绩。</p>
        </div>
    </div>

    
@endsection
