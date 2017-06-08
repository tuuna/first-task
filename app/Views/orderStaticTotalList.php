@extends('layouts.app')
@section('content')
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>全量数据 <small>列表</small></h1>
        </div>
        <table class="table table-striped table-bordered table-condensed">
            <thead>
            <tr>
                <th>时间</th>
                <th>点击IP量</th>
                <th>点击流量</th>
                <th>点击IP使用量</th>
                <th>点击流量使用量</th>
                <th>曝光IP量</th>
                <th>曝光流量</th>
                <th>曝光IP使用量</th>
                <th>曝光流量使用量</th>
            </tr>
            </thead>
            <tbody>
            @foreach($totals as $total)
            <tr class="list-users">
                <td>{{$total->day}}</td>
                <td>{{$total->click_ip}}</td>
                <td>{{$total->click_pv}}</td>
                <td>{{$total->click_ip_use}}</td>
                <td>{{$total->click_pv_use}}</td>
                <td>{{$total->flow_ip}}</td>
                <td>{{$total->flow_pv}}</td>
                <td>{{$total->flow_ip_use}}</td>
                <td>{{$total->flow_pv_use}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
        </div>
        <a href="/all-statistic/total" class="btn btn-inverse">查看表数据</a>
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
</div>
</body>
</html>
@endsection
