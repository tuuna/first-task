<?php
use Illuminate\Database\Eloquent\Model as Model;

class StaticTotal extends Model
{
    public $table = 'static_total';
    public $timestamps = false;

    public $fillable = [
        'title','type','state','start','end','click','flow','remark','created'
    ];
}