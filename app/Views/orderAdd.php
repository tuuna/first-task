@extends('layouts.app')
@section('content')
<!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen"
      href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">-->
<div class="span9">
            <div class="row-fluid">
                <div class="page-header">
                    <h1>订单 <small>添加</small></h1>
                </div>
                <form class="form-horizontal" method="post" action="/order/add/complete">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="title">广告名称</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="title" name="title"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="start">开始时间</label>
                            <div class="controls">
                                <input type="datetime" class="input-xlarge" id="start" name="start" placeholder="2017-5-21 11:15:10"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="end">结束时间</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="end" name="end" placeholder="2017-5-21 11:16:10"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="click">点击需求量</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="click" name="click"/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="flow">曝光需求量</label>
                            <div class="controls">
                                <input type="text" class="input-xlarge" id="flow" name="flow" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="state">状态</label>
                            <div class="controls">
                                <select id="status" name="state">
                                    <option value="0">未开启</option>
                                    <option value="1" selected>正常开启</option>
                                    <option value="2">已暂停</option>
                                    <option value="3">已关闭</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="active">类型</label>
                            <div class="controls">
                                <label>
                                    <input type="radio" name="type" value="0" checked> 不替换(默认)
                                </label>
                                <label>
                                    <input type="radio" name="type" value="1"> 替换
                                </label>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="remark">其他说明</label>
                            <div class="controls">
                                <textarea name="remark"></textarea>
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
<!--<script type="text/javascript"
        src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
</script>
<script type="text/javascript"
        src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
</script>
<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
</script>
<script type="text/javascript"
        src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
</script>
<script type="text/javascript">
    $('.datepicker').datepicker({
        startDate: '-3d'
    });
</script>-->
</body>
</html>
@endsection