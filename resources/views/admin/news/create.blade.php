@extends('layouts.header')

@section('css')
    @parent
    <link href="https://cdn.bootcss.com/bootstrap-switch/4.0.0-alpha.1/css/bootstrap-switch.css" rel="stylesheet">
@endsection()

@section('contents')
    @include('vendor.ueditor.assets')

    <div class="container-fluid">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-md-offset-1">
                <form action="{{ route('news.store') }}" method="POST" role="form" id="news">
                    {!! csrf_field() !!}
                    <legend>添加新闻</legend>

                    <div class="form-con">
                        <label for="title" class="control-label">新闻标题</label>
                        <input type="text" class="form-control" id="title" placeholder="请输入标题" name="title">
                    </div>

                    <div class="form-group">
                        <label for="author" class="control-label">作者</label>
                        <input type="text" class="form-control" id="author" placeholder="" name="author"
                               value="{{ $author or '泾河城服' }}">
                    </div>

                    <div class="form-group">
                        <label for="sort" class="control-label">新闻类别</label>

                        <select class="form-control" id="sort" name="sort">
                            <option value="西咸新区" selected>西咸新区</option>
                            <option value="泾河新城">泾河新城</option>
                            <option value="泾河城服">泾河城服</option>

                        </select>

                    </div>


                    <script id="ueditor" name="content" type="text/plain"></script>

                    <button type="submit" class="btn btn-primary" style="margin:20px 0;" id="submit">添加</button>
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
            initialFrameHeight: 500,
        });
        ue.ready(function () {
            ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
        });

        $('#submit').click(function () {
            if ($('#title').val() != null && $('#title').val() != '' && $('#title').val() != undefined
                && $('#author').val() != null && $('#author').val() != '' && $('#author').val() != undefined
                && ue.getContent() != '' && ue.getContent() != null) {
            } else {
                alert('标题、作者和新闻内容都不能为空！请确认填写后再次提交');
                return false;
            }
        })

    </script>
@endsection()