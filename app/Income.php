<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'payment_id', 'amount'
    ];
    public function payment()
    {
    return $this->belongsTo(Payment::class);
    }
}
