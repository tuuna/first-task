@extends('layouts.app')
@section('content')
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>订单 <small>统计</small></h1>
            <div style="float: left; margin-top: 10px;">
                <form name="search_form" method="post" action="/order/find/all/charts">
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
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
            <tr class="list-users">
                <td>{{$order->id}}</td>
                <td>{{$order->title}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">操作<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">图表</li>
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
