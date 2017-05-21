<?php
use Illuminate\Database\Eloquent\Model as Model;

class StaticHour extends Model
{
    public $table = 'static_hour';
    public $timestamps = false;

    public $fillable = [
        'o_id','day','hour','click_ip','click_pv','flow_ip','flow_pv'
    ];
}