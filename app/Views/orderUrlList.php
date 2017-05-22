@extends('layouts.app')
@section('content')
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>地址 <small>列表</small></h1>
        </div>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
                <th>订单ID</th>
                <th>广告名称</th>
                <th>所属链接</th>
                <th>链接地址</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            @foreach($order['orderUrl'] as $v)
            <tr class="list-users">
                <td>{{$order->id}}</td>
                <td>{{$order->title}}</td>
                <td>
                    @if($v->flag == 0)
                    <span class="label label-warning">常规跳转链接</span>
                    @elseif($v->flag == 1)
                    <span class="label label-success">点击链接</span>
                    @else
                    <span class="label label-important">曝光链接</span>
                    @endif
                </td>
                <td>{{$v->url}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">操作<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">编辑</li>
                            <li><a href="/url-manage/edit/{{$order->id}}"><i class="icon-pencil"></i> 编辑<strong>地址情况</strong></a></li>
<!--                            <li><a href="/order/delete/{{$order->id}}"><i class="icon-trash"></i> 删除</a></li>-->
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            <!--<ul>
                <li><a href="#">Prev</a></li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>-->
        </div>
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
