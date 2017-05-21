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
                <th>时间</th>
                <th>点击需求量</th>
                <th>曝光需求量</th>
                <th>创建时间</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $detail)
                @foreach($detail['orderHour'] as $value)
            <tr class="list-users">
                <td>{{$detail['id']}}</td>
                <td>{{$detail['title']}}</td>
                <td>{{$value['hour']}}</td>
                <td>{{$value['click']}}</td>
                <td>{{$value['flow']}}</td>
                <td>{{$detail['created']}}</td>
                <td>
                    <div class="btn-group">
                        <a class="btn btn-mini dropdown-toggle" data-toggle="dropdown" href="#">操作<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">编辑</li>
                            <li><a href="/order/edit/hour/{{$value['id']}}"><i class="icon-pencil"></i> 编辑<strong>小时需求</strong></a></li>
                        </ul>
                    </div>
                </td>
            </tr>
            @endforeach
            @endforeach
            </tbody>
        </table>
        <div class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
        <a href="/order/edit/hour/(:num)" class="btn btn-success">增加小时需求</a>
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
