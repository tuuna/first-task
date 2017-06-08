<?php
use Illuminate\Database\Eloquent\Model as Model;

class OrderUrl extends Model
{
    public $table = 'order_urls';
    public $timestamps = false;

    public $fillable = [
        'o_id','flag','sort','url'
    ];
}