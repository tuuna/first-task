<!DOCTYPE html>
<html lang="zh_CN">
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../resources/css/bootstrap.css" rel="stylesheet">
    <link href="../resources/css/site.css" rel="stylesheet">
    <link href="../resources/css/bootstrap-responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="brand" href="#">主页</a>
            <div class="btn-group pull-right">
                <a class="btn" href="my-profile.html"><i class="icon-user"></i> Admin</a>
                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span3">
            <div class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header"><i class="icon-wrench"></i>订单管理</li>
                    <li><a href="order">订单列表</a></li>
                    <li><a href="hour">订单小时需求量</a></li>
                    <li><a href="url-manage">订单链接管理</a></li>
                    <li class="nav-header"><i class="icon-signal"></i>数据统计</li>
                    <li><a href="day-statistic">订单每日数据统计</a></li>
                    <li><a href="hour-statistic">订单小时数据统计</a></li>
                    <li><a href="all-statistic">全量数据统计</a></li>
                </ul>
            </div>
        </div>
        @yield("content")
