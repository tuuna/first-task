<?php
use Illuminate\Database\Eloquent\Model as Model;

class StaticDay extends Model
{
    public $table = 'static_day';
    public $timestamps = false;

    public $fillable = [
        'title','type','state','start','end','click','flow','remark','created'
    ];
}