@extends('layouts.header')

@section('yjdh')
    <li>
        <a href="{{ url('/admin/news') }}" class="active">新闻管理</a>
    </li>
@endsection

@section('ejdh')
    <li>
        <a href="{{ url('/admin/news') }}" class="active">新闻列表</a>
    </li>
    <li>
        <a href="{{ url('/admin/news/create') }}">添加新闻</a>
    </li>
@endsection

@section('contents')

    <div class="container-fluid">
        <div class="row" style="margin-top: 30px">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>标题</th>
                        <th>新闻类别</th>
                        <th>浏览次数</th>
                        <th>分享次数</th>
                        <th>最后更新时间</th>
                        <th>作者</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($news as $new)
                        <tr>
                            <td>{{ $new['id'] }}</td>
                            <td><a href="{{ url('/admin/news/' . $new['id']) }}">{{ $new['title'] }}</a></td>
                            <td>{{ $new['sort'] }}</td>
                            <td>{{ $new['count'] }}</td>
                            <td>{{ $new['share'] }}</td>
                            <td>{{ $new['updated_at'] }}</td>
                            <td>{{ $new['author'] }}</td>
                            <td>
                                <a href="{{ route('news.edit', ['id' => $new['id']]) }}" class="btn btn-primary btn-sm"><i
                                            class="glyphicon glyphicon-edit"></i>编辑</a>
                                <form action="{{ route('news.destroy', ['id' => $new['id']]) }}"
                                      style="display: inline-block" method="post">
                                    {{ method_field('delete') }} {!! csrf_field() !!}
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="glyphicon glyphicon-trash"></i>删除
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $news->links() }}
            </div>
        </div>
    </div>

@endsection()