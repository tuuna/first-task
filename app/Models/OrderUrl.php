<?php
use Illuminate\Database\Eloquent\Model as Model;

class OrderUrl extends Model
{
    public $table = 'order_urls';
    public $timestamps = false;

    public $fillable = [
        'title','type','state','start','end','click','flow','remark','created'
    ];
}