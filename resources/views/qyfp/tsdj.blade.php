@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">城市配套维护</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
@endsection

@section('css')
    @parent
    <style>
        .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4{
            padding-left: 0;
            padding-right: 0;
        }
    </style>
@endsection

@section('ejdh')
    <li><a href=""></a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src=" {{ asset('images/tsdj/tsdj_dt.jpg') }}" alt="" style="width: 100%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-8 col-lg-8 col-md-offset-2"  style="margin-top: 6%;margin-bottom: 3%;">
            <img src="{{ asset('images/tsdj/tsdj_z.png') }}" alt="" class="center-block img-100">
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 3%;">
        <div class="col-xs-10 col-sm-810 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <p>泾河城服党支部于2017年7月26日正式成立，现有正式党员13名，流动党员2名。支部从成立开始，就秉承“围绕业务抓党建，抓好党建促发展”的原则，以“落实五新战略任务，实现追赶超越目标；创新引领服务升级，专业成就品牌发展”为口号，切实加强党组织建设，不断提升党建工作水平，定制度、强管理，理思路、谋发展，推动了公司各项工作再上新台阶。</p>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 50px;">
        <div class="col-xs-10 col-sm-810 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">一、党建、业务深度融合，开展基层党建+中心工作</h3>
            <p>泾河城服党支部虽然只成立了不到一年时间，却逐步完善了深度融合—— “党建+中心工作”工作法，实现政治理论学习和业务知识学习、党建中心任务和业务重点工作、党员监督管理和日常工作任务相互融合、相互促进的良好格局，有效带动全体党员坚定理想信念、提高业务素质，推动泾河城服各项工作稳步发展。</p>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 50px;">
        <div class="col-xs-10 col-sm-810 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">二、加强服务意识，发挥党员先锋模范作用</h3>
            <p>一是开展各类主题党日、志愿者服务活动，充分发挥了党的舆论宣传作用和党员的示范带头作用；二是明确党员的服务职责，开展结对帮扶工作，帮助更多精准扶贫户的产品走向市场，早日脱贫；三是开展“党员示范岗”创建活动，增强了党员干部的责任感，及时改正了工作中存在的问题，拓宽了服务载体，充分发挥共产党员的先锋模范带头作用。</p>
        </div>
    </div>

    <div class="row" style="line-height: 2em;margin-bottom: 50px;">
        <div class="col-xs-10 col-sm-810 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">
            <h3 style="color: #008cd6;">三、成立党群服务中心，为公司注入“红色动力”</h3>
            <p>2018年5月，泾河城服在崇文塔景区游客服务中心一楼设立“党群服务中心”，于6月正式启用，该党群服务中心以推进“两学一做”制度化常态化为契机，将党建活动与企业工作相结合，把服务企业、为企业发展解忧当作活动开展的出发点，为企业注入“红色动力”，激发党员和员工的活力，助推企业发展。之后，泾河城服党支部将利用“党群服务中心”这一阵地，抓好“三会一课”“党员活动日”“党员示范岗”等规范化建设，与此同时，更要深入开展各项服务提升工作，为泾河新城范围内的党员群众提供一个沟通交流的平台。</p>
        </div>
    </div>

    <div class="row" style="margin-bottom: 5px;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
        	<div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tsdj/tsdj_xt1.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tsdj/tsdj_xt2.jpg') }}" alt="" class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tsdj/tsdj_xt3.jpg') }}" alt="" class="img-100">
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-bottom: 6%;">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tsdj/tsdj_xt4.jpg') }}" alt=""  class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tsdj/tsdj_xt5.jpg') }}" alt=""  class="img-100">
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <img src="{{ asset('images/tsdj/tsdj_xt6.jpg') }}" alt=""  class="img-100">
                </div>
            </div>
        </div>
    </div>

    {{--<div class="row" style="line-height: 2em;margin-bottom: 6%;">--}}
        {{--<div class="col-xs-10 col-sm-10 col-md-8 col-lg-8 col-md-offset-2 wzys col-xs-offset-1 col-sm-offset-1">--}}
            {{--<p>除以上工作外，支部还严格按照要求，深入贯彻落实中央和省委关于加强和改进企业党建工作的有关精神，有效落实“一岗双责”、廉政、教育和培训工作，每周制作党建工作简报、上报党建工作要情，严格落实“三会一课制度”，按照程序发展党员。截止9月底，已经召开党员大会3次，上党课1次，召开民主生活会1次；通过谈话、备案，已经确定2名人员为积极分子。</p>--}}
            {{--<p>我们在以后的党建工作中仍会不懈努力，不断完善组织机构,保证组织生活，加强党风廉政建设，实现党建与公司业务发展双赢得目标，真正把支部和公司做大做强。</p>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
