<?php
use Illuminate\Database\Eloquent\Model as Model;

class StaticTotal extends Model
{
    public $table = 'static_total';
    public $timestamps = false;

    public $fillable = [
        'day',
        'click_ip', 'click_pv', 'click_ip_use', 'click_pv_use',
        'flow_ip', 'flow_pv', 'flow_ip_use', 'flow_pv_use'
    ];
}