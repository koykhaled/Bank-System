<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Transfare extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'from',
        'to',
        'transfared_at'
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($transfare) {
            $transfare->transfared_at = Carbon::now();
        });
    }

    public function transfares()
    {
        return $this->belongsTo(Customer::class, 'account');
    }

}