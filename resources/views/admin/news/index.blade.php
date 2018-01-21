@extends('layouts.header')

@section('contents')

    <div class="container-fluid">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>序号</th>
                <th>标题</th>
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
                    <td>{{ $new['title'] }}</td>
                    <td>{{ $new['count'] }}</td>
                    <td>{{ $new['share'] }}</td>
                    <td>{{ $new['updated_at'] }}</td>
                    <td>{{ $new['author'] }}</td>
                    <td>
                        <a href="{{ route('news.edit', ['id' => $new['id']]) }}" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-edit"></i>编辑</a>
                        <form action="{{ route('news.destroy', ['id' => $new['id']]) }}" style="display: inline-block" method="post">
                            {{ method_field('delete') }} {!! csrf_field() !!}
                            <button type="submit" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i>删除</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection()