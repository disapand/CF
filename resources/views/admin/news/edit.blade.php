@extends('layouts.header')

@section('css')
    @parent
    <link href="https://cdn.bootcss.com/bootstrap-switch/4.0.0-alpha.1/css/bootstrap-switch.css" rel="stylesheet">
@endsection()

@section('yjdh')
    <li>
        <a href="{{ url('/admin/news') }}" class="active">新闻管理</a>
    </li>
@endsection
@section('ejdh')
    <li>
        <a href="{{ url('/admin/news') }}">新闻列表</a>
    </li>
    <li>
        <a href="{{ url('/admin/news/create') }}">添加新闻</a>
    </li>
    <li>
        <a href="javascript:void(0);"  class="active">编辑新闻</a>
    </li>
@endsection


@section('contents')
    @include('vendor.ueditor.assets')

    <div class="container-fluid">

        <ul class="nav navbar-nav navbar-right" style="margin-right: 15px;">
            <!-- Authentication Links -->
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                注销
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endguest
        </ul>

        <div class="row" style="margin-top: 30px;">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                <form action="{{ route('news.update', ['id' => $new['id']]) }}" method="POST" role="form">
                    {!! csrf_field() !!}
                    {{ method_field('PUT') }}
                    <legend>编辑新闻</legend>

                    <div class="form-con">
                        <label for="title" class="control-label">新闻标题</label>
                        <input type="text" class="form-control" id="title" placeholder="请输入标题" name="title"
                               value="{{ $new['title']}}">
                    </div>

                    <div class="form-con">
                        <label for="url" class="control-label">外部链接</label>
                        <input type="text" class="form-control" id="url" placeholder="请输入标题" name="url"
                               value="{{ $new['url']}}">
                    </div>

                    <div class="form-group">
                        <label for="sort" class="control-label">新闻类别</label>

                        <select class="form-control" id="sort" name="sort">
                            @foreach($sort as $s)
                                @if($s == $new['sort'])
                                    <option value="{{ $s }}" selected>{{ $s }}</option>
                                @else
                                    <option value="{{ $s }}">{{ $s }}</option>
                                @endif
                            @endforeach

                        </select>

                    </div>

                    <div class="form-group">
                        <label for="count" class="control-label">浏览量</label>
                        <input type="number" class="form-control" id="count" placeholder="" name="count"
                               value="{{ $new['count'] }}">
                    </div>

                    <script id="ueditor" name="content" type="text/plain"></script>

                    <div class="form-group">
                        <label for="zrbj" class="control-label">责任编辑</label>
                        <input type="text" class="form-control" id="zrbj" placeholder="请输入责任编辑" name="zrbj" value="{{ $new['zrbj'] }}">
                    </div>

                    <button type="submit" class="btn btn-primary" style="margin:20px 0;" id="submint">修改</button>
                </form>
            </div>
        </div>

    </div>


@endsection()

@section('script')
    @parent
    <script src="https://cdn.bootcss.com/bootstrap-switch/4.0.0-alpha.1/js/bootstrap-switch.js"></script>
    <script type="text/javascript">
        var ue = UE.getEditor('ueditor', {
            //一些参数
            elementPathEnabled: false,
            wordCount: false,
        });

        ue.ready(function () {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
            ue.setContent('{!! $new['content'] !!}')
        });

        $('#submit').click(function () {
            if ($('#title').val() != null && $('#title').val() != '' && $('#title').val() != undefined
                && ue.getContent() != '' && ue.getContent() != null) {
            } else {
                alert('标题、作者和新闻内容都不能为空！请确认填写后再次提交');
                return false;
            }
        })

    </script>
@endsection()