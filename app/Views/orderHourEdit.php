@extends('layouts.app')
@section('content')
<div class="span9">
    <div class="row-fluid">
        <div class="page-header">
            <h1>小时需求 <small>修改</small></h1>
        </div>
        <form class="form-horizontal" method="post" action="/order/edit/hour/complete">
            <fieldset>
                <input name="id" value="{{$detail->id}}" type="hidden">
                <div class="control-group">
                    <label class="control-label" for="hour">小时</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="hour" name="hour" value="{{$detail->hour}}" readonly/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="click">点击需求量</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="click" name="click" value="{{$detail->click}}"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="flow">曝光需求量</label>
                    <div class="controls">
                        <input type="text" class="input-xlarge" id="flow" name="flow" value="{{$detail->flow}}"/>
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