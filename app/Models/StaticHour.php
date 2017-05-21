<?php
use Illuminate\Database\Eloquent\Model as Model;

class StaticHour extends Model
{
    public $table = 'static_hour';
    public $timestamps = false;

    public $fillable = [
        'title','type','state','start','end','click','flow','remark','created'
    ];
}