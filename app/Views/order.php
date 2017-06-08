@extends('layouts.app')
@section('content')
        <div class="span9">
            <div class="row-fluid">
                <div class="page-header">
                    <h1>订单 <small>列表</small></h1>
                    <div style="float: left; margin-top: 10px;">
                        <form name="search_form" method="post" action="/order/find/all">
                            订单ID：<input type="text" name="id" class="input-mini"/> &nbsp;&nbsp;
                            广告名称：<input type="text" name="name" class="input-small" />&nbsp;&nbsp;
                            时间范围：
                            <input type="datetime" name="start-date" class="input-small"/>
                            -
                            <input type="datetime" name="end-date" class="input-small"/>
                            <input type="submit" name="searchbtn" value="开始查询" />
                        </form>
                    </div>
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
                                <div class="btn-group">
                                    <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">操作<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-header">编辑</li>
                                        <li><a href="/order/edit/{{$order->id}}"><i class="icon-pencil"></i> 编辑<strong>订单详情</strong></a></li>
<!--                                        <li><a href="/order/delete/{{$order->id}}"><i class="icon-trash"></i> 删除</a></li>-->
                                        <li class="nav-header">图表</li>
                                        <li><a href="/hour/{{$order->id}}"><i class="icon-eye-open"></i>小时需求量<strong>统计图表</strong></a></li>
                                        <li class="nav-header">状态改变</li>
                                        @if($order->state == 0)
                                        <li><a href="/order/start/{{$order->id}}"><i class="icon-headphones"></i>正常开启</a></li>
                                        <li><a href="/order/stop/{{$order->id}}"><i class="icon-headphones"></i>暂停</a></li>
                                        <li><a href="/order/shutdown/{{$order->id}}"><i class="icon-headphones"></i>关闭</a></li>
                                        @elseif($order->state == 1)
                                        <li><a href="/order/default/{{$order->id}}"><i class="icon-headphones"></i>未开启</a></li>
                                        <li><a href="/order/stop/{{$order->id}}"><i class="icon-headphones"></i>暂停</a></li>
                                        <li><a href="/order/shutdown/{{$order->id}}"><i class="icon-headphones"></i>关闭</a></li>
                                        @elseif($order->state == 2)
                                        <li><a href="/order/default/{{$order->id}}"><i class="icon-headphones"></i>未开启</a></li>
                                        <li><a href="/order/start/{{$order->id}}"><i class="icon-headphones"></i>正常开启</a></li>
                                        <li><a href="/order/shutdown/{{$order->id}}"><i class="icon-headphones"></i>关闭</a></li>
                                        @else
                                        <li><a href="/order/default/{{$order->id}}"><i class="icon-headphones"></i>开启</a></li>
                                        <li><a href="/order/start/{{$order->id}}"><i class="icon-headphones"></i>正常开启</a></li>
                                        <li style="background-color: #0e90d2"><a href="/order/shutdown/{{$order->id}}"><i class="icon-headphones"></i>关闭</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="pagination">
                </div>
            </div>
        </div>
    </div>

    <hr>
</div>

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
