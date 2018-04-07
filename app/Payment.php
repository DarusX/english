<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'folio', 'student_id'
    ];
    public function details()
    {
        return $this->hasMany(PaymentDetail::class);
    }
    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
    public function student()
    {
        return $this->BelongsTo(Student::class);
    }
    public function getTotalAttribute()
    {
    $total=0;
    foreach($this->details as $d)
    {
        $total+=$d->PriceDiscount;
    }
    return $total;
    }
    public function getDebitAttribute()
    {
    $debit=0;
    foreach($this->incomes as $i)
    {
        $debit+=$i->amount;
    }
    return $this->total-$debit;
    }
    public function getAmountTotalAttribute()
    {
    $am=0;
    foreach($this->incomes as $i)
    {
        $am+=$i->amount;
    }
    return $am;
    }
    public function getDateAttribute()
    {
        return $this->created_at->format('d-m-Y');
    }
}
