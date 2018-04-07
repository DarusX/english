<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetail extends Model
{
    protected $fillable = [
        'payment_id', 'course_id', 'item_id', 'discount'
    ];
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    public function getPriceDiscountAttribute()
    {
        $disc=1-($this->discount/100);
        if($this->course_id!=NULL)
        {
            return $this->course->price*$disc;
        }
        else
        {
            return $this->item->price*$disc; 
        }
    }
}
