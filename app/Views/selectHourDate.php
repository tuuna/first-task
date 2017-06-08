@extends('layouts.app')
@section('content')
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>选择 <small>日期</small></h1>
        </div>
        <form class="form-horizontal" method="post" action="/hour-static/complete">
            <fieldset>
                <input type="hidden" name="o_id" id="o_id" value="{{$o_id}}">
                <div class="control-group">
                    <label class="control-label" for="date">日期</label>
                    <div class="controls">
                        <select id="date" name="date">
                            @foreach($dates as $date)
                            <option value="{{$date}}">{{$date}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-actions">
                    <input type="submit" class="btn btn-success" value="查询" /> <a class="btn" href="/order">Cancel</a>
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