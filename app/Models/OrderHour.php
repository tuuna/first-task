<?php
use Illuminate\Database\Eloquent\Model as Model;

class OrderHour extends Model
{
    public $table = 'order_hour';
    public $timestamps = false;

    public $fillable = [
        'o_id','hour','click','flow'
    ];
}