@extends('layouts.app')
@section('content')
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>友链 <small>修改</small></h1>
        </div>
        <form class="form-horizontal" method="post" action="/url-manage/edit/complete">
            <fieldset>
                <input name="id" value="{{$url->id}}" type="hidden">
                <div class="control-group">
                    <label class="control-label" for="flag">标志</label>
                    <div class="controls">
                        <select id="flag" name="flag">
                            @if($url->flag == 0)
                                <option value="0" selected>常规跳转链接</option>
                                <option value="1">点击链接</option>
                                <option value="2">曝光链接</option>
                            @elseif($url->flag == 1)
                                <option value="0">常规跳转链接</option>
                                <option value="1" selected>点击链接</option>
                                <option value="2">曝光链接</option>
                            @else
                                <option value="0">常规跳转链接</option>
                                <option value="1">点击链接</option>
                                <option value="2" selected>曝光链接</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="url">链接</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="url" name="url" value="{{$url->url}}"/>
                    </div>
                </div>
                <div class="form-actions">
                    <input type="submit" class="btn btn-success" value="修改" /> <a class="btn" href="/order">Cancel</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</div>

<hr>
</div>

<script src="/../resources/js/jquery.js"></script>
<script src="/../resources/js/bootstrap.min.js"></script>
</body>
</html>
@endsection