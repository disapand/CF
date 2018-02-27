@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/') }}">走进城服</a>
    </li>
    <li><a href="{{ url('/zhfw') }}">综合服务</a></li>
    <li><a href="{{ url('/wljl') }}">全域旅游</a></li>
    <li><a href="{{ url('/yxhd') }}" class="active">文化教育</a></li>
    <li><a href="{{ url('/wygl') }}">物业管理</a></li>
    <li><a href="{{ url('/zhfw/szgc') }}">市政工程</a></li>
    <li><a href="{{ url('/zsyy') }}">招商运营</a></li>
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
            <img src="{{ asset('images/yxhd/yxhd_dt.jpg') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2" style="margin-top: 100px;margin-bottom: 50px;">
            <img src=" {{ asset('images/yxhd/yxhd_z.png') }}" alt="" class="img-100">
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 30px;">
            <p>泾河新城研学旅行充分挖掘区内旅游资源，形成文化＋教育、文化＋体验、文化＋农业、文化＋民俗等多种综合研学旅游产品，满足各阶段学生的研学需求，已经吸引了数百家学校前来研学，数家学校更是多次组织不同阶段的学生前来。现阶段研学旅行如火如荼，为了更加完善后续接待，崇文塔景区从研学教师、研学课程、研学基地、研学线路、安全管理等几个方面积极研究深化，将这种继承了中国传统儒家教育游学模式的“旅行”在泾河新城的发展日趋成熟化，让学生们体验到更丰富的学习方式。</p>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 wzys" style="margin-bottom: 100px;">
            <p style="text-indent: 2em;text-align: justify">自从研学旅行启动以来，城服公司致力于将泾河新城研学旅行资源逐渐由西安推广至周边及省内学校市场，不断扩大崇文塔景区及泾河新城的文化影响力，大力推进了全域旅游。在以后的研学接待中，崇文塔景区将保量升质，力求将泾河新城打造成为研学旅行示范区，让同学们来泾河新城就能学知识、得实践、长阅历，在“行万里路”的征途中，也能收获星辰和大海。</p>
        </div>
    </div>

    
@endsection
