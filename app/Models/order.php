<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['id','client_id','price','order_status','seat_id', 'order_id'];
    public function orders()
    {
        return $this->belongsTo(Workers::class,'workers_id','id');
    }

    public function clients()
    {
        return $this->belongsTo(Dispatchers::class,'client_id','id');
    }

    public function seats()
    {
        return $this->belongsTo(Dispatchers::class,'seat_id','id');
    }
}
