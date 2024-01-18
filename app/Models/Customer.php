<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'account',
        'balance'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($customer) {
            $customer->account = uniqid(Str::random(8) . rand(0000, 9999));
        });
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }

    public function transfares()
    {
        return $this->hasMany(Transfare::class, 'from', 'account');
    }
}