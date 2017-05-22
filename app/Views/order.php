@extends('layouts.app')
@section('content')
        <div class="span9">
            <div class="row-fluid">
                <div class="page-header">
                    <h1>订单 <small>列表</small></h1>
                </div>
                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th>订单ID</th>
                        <th>广告名称</th>
                        <th>开始时间</th>
                        <th>结束时间</th>
                        <th>点击需求量</th>
                        <th>曝光需求量</th>
                        <th>状态</th>
                        <th>类型</th>
                        <th>创建时间</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr class="list-users">
                            <td>{{$order->id}}</td>
                            <td>{{$order->title}}</td>
                            <td>{{$order->start}}</td>
                            <td>{{$order->end}}</td>
                            <td>{{$order->click}}</td>
                            <td>{{$order->flow}}</td>
                            <td>
                                @if($order->state == 0)
                                    <span class="label label-warning">未开启</span>
                                @elseif($order->state == 1)
                                    <span class="label label-warning">正常开启</span>
                                @elseif($order->state == 2)
                                    <span class="label label-warning">已暂停</span>
                                @else
                                    <span class="label label-warning">已关闭</span>
                                @endif
                            </td>
                            <td>
                                @if($order->type)
                                    <span class="label label-important">可替换</span>
                                @else
                                    <span class="label label-success">不可替换</span>
                                @endif
                            </td>
                            <td>{{$order->created}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">操作<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-header">编辑</li>
                                        <li><a href="/order/edit/{{$order->id}}"><i class="icon-pencil"></i> 编辑<strong>订单详情</strong></a></li>
                                        <li><a href="/url-manage/add/{{$order->id}}"><i class="icon-pencil"></i> 添加<strong>友链</strong></a></li>
<!--                                        <li><a href="/order/delete/{{$order->id}}"><i class="icon-trash"></i> 删除</a></li>-->
                                        <li class="nav-header">统计</li>
                                        <li><a href="/hour/{{$order->id}}"><i class="icon-eye-open"></i>小时需求量<strong>统计图表</strong></a></li>
                                        <li><a href="/hour-static/{{$order->id}}"><i class="icon-eye-open"></i>小时数据<strong>统计图表</strong></a></li>
                                        <li><a href="/day-static/{{$order->id}}"><i class="icon-eye-open"></i>每日数据<strong>统计图表</strong></a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                </div>
                <a href="/order/add" class="btn btn-success">增加订单</a>
            </div>
        </div>
    </div>

    <hr>
</div>

<script src="/../resources/js/jquery.js"></script>
<script src="/../resources/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('.dropdown-menu li a').hover(
            function() {
                $(this).children('i').addClass('icon-white');
            },
            function() {
                $(this).children('i').removeClass('icon-white');
            });

        if($(window).width() > 760)
        {
            $('tr.list-users td div ul').addClass('pull-right');
        }
    });
</script>
</body>
</html>
@endsection
