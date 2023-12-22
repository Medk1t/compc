<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id','client_id','price','order_status','seat_id', 'order_id'];
    public function Orders()
    {
        return $this->belongsTo(Workers::class,'workers_id','id');
    }

    public function Clients()
    {
        return $this->belongsTo(Dispatchers::class,'client_id','id');
    }

    public function Seats()
    {
        return $this->belongsTo(Dispatchers::class,'seat_id','id');
    }
}
