@extends('layouts.header')

@section('ejdh')
    <li><a href="{{ url('/qyjj') }}">企业简介</a></li>
    <li><a href="{{ url('/fzyj') }}" class="active">发展愿景</a></li>
    <li><a href="{{ url('/zzjg') }}">组织架构</a></li>
@endsection

@section('contents')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <img src="images/yj.jpg" alt="" style="width: 100%">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 150px;margin-bottom: 50px;">
            <img src="images/fzyj_z.png" alt="" style="width: 99%;">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys">
        	<p style="margin-top: 10px; margin-bottom: 30px;">作为一家成长性的综合城市服务公司，在发展的道路上，我们将紧随国家指导方针，把“创新、协调、绿色、开放、共享”五大理念深入到企业的发展和项目的服务当中去。将提升“项目附加值”服务作为一项重要工作尽心深入推广和耕耘。我们将通过自新服务和诚信工作创造出本公司的核心竞争力，并且通过不断地学习和级炼，来实现公司综合能力的提升。</p>
            <p style="margin-top: 10px; margin-bottom: 30px;">“科技仓新服务、专业成就精品”作为企业的核心精神，是我们一直以来追求的最高目标。我们将争取在五年内成为西成新区首屈一指的品牌运营服务管理企业，并在智慧城市、云数据管理等方面有所突破，将服务项目打造成为智能化、信息化的代表。</p>
            <P style="margin-top: 10px; margin-bottom: 150px;">城市发展的道路深运而责任重大，我们将在新常态的大背景下，通过结构性改革提高全要索生产率，增强企业产品和服务的核心竞争力，帮助服务项目实现从“地产业态”向“生活业态”的内生性过渡，从而适应国家大的发展趋势和市场变化，将西成新区打造成为生态文明、环境友好、设施现代、社会和谐、开放包容、彰显历史文化、产业有序集聚的西安田际化大都市的主城功能新区和生态田园新城，构建社会经济发展新的增长，打造全国区域协调发展的国家级新区。 </P>
        </div>
    </div>
    
    @endsection