@extends('layouts.app')
@section('content')
<!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" media="screen"
      href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">-->
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>订单 <small>修改</small></h1>
        </div>
        <form class="form-horizontal" method="post" action="/order/edit/complete">
            <fieldset>
                <input name="id" type="hidden" value="{{$order->id}}">
                <div class="control-group">
                    <label class="control-label" for="name">广告名称</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="name" name="title" value="{{$order->title}}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="start">开始时间</label>
                    <div class="controls">
                        <input type="datetime" class="input-xlarge" id="start" name="start" value="{{$order->start}}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="end">结束时间</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="end" name="end" value="{{$order->end}}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="click">点击需求量</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="click" name="click" value="{{$order->click}}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="flow">曝光需求量</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="flow" name="flow" value="{{$order->flow}}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="state">状态</label>
                    <div class="controls">
                        <select id="status" name="state">
                            @if($order->state == 0)
                                <option value="0" selected>未开启</option>
                                <option value="1" >正常开启</option>
                                <option value="2">已暂停</option>
                                <option value="3">已关闭</option>
                            @elseif($order->state == 1)
                                <option value="0">未开启</option>
                                <option value="1" selected>正常开启</option>
                                <option value="2">已暂停</option>
                                <option value="3">已关闭</option>
                            @elseif($order->state == 2)
                                <option value="0">未开启</option>
                                <option value="1" >正常开启</option>
                                <option value="2" selected>已暂停</option>
                                <option value="3">已关闭</option>
                            @else
                                <option value="0">未开启</option>
                                <option value="1">正常开启</option>
                                <option value="2">已暂停</option>
                                <option value="3" selected>已关闭</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="active">类型</label>
                    <div class="controls">
                        @if($order->type == 0)
                            <input type="radio" name="type" value="0" checked/>不替换(默认)
                            <input type="radio" name="type" value="1" />替换
                        @else
                            <input type="radio" name="type" value="0" />不替换(默认)
                            <input type="radio" name="type" value="1" checked/>替换
                        @endif
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="city">其他说明</label>
                    <div class="controls">
                        <textarea name="remark">{!! $order->remark !!}</textarea>
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