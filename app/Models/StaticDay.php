<?php
use Illuminate\Database\Eloquent\Model as Model;

class StaticDay extends Model
{
    public $table = 'static_day';
    public $timestamps = false;

    public $fillable = [
        'o_id','day','click_ip','click_pv','flow_ip','flow_pv'
    ];
}