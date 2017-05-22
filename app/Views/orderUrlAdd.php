@extends('layouts.app')
@section('content')
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>友链 <small>添加</small></h1>
        </div>
        <form class="form-horizontal" method="post" action="/url-manage/add/complete">
            <fieldset>
                <input type="hidden" name="o_id" id="o_id" value="{{$o_id}}">
                <div class="control-group">
                    <label class="control-label" for="flag">标志</label>
                    <div class="controls">
                        <select id="flag" name="flag">
                            <option value="0" selected>常规跳转链接</option>
                            <option value="1">点击链接</option>
                            <option value="2">曝光链接</option>
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="url">链接</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="url" name="url" placeholder="e.g.https://www.baidu.com"/>
                    </div>
                </div>
                <div class="form-actions">
                    <input type="submit" class="btn btn-success" value="添加" /> <a class="btn" href="/order">Cancel</a>
                </div>
            </fieldset>
        </form>
    </div>
</div>
</div>

<hr>
</div>

<script src="/../resources//js/jquery.js"></script>
<script src="/../resources//js/bootstrap.min.js"></script>
</body>
</html>
@endsection