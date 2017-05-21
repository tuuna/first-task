<?php
use Illuminate\Database\Eloquent\Model as Model;

class Order extends Model
{
    public $table = 'order';
    public $timestamps = false;

    public $fillable = [
        'title','type','state','start','end','click','flow','remark','created'
    ];

    public function orderHour()
    {
        return $this->hasOne(OrderHour::class);
    }

    public function orderUrl()
    {
        return $this->hasMany(OrderUrl::class);
    }

    public function staticHour()
    {
        return $this->hasOne(StaticHour::class);
    }

    public function staticDay()
    {
        return $this->hasOne(StaticDay::class);
    }
}