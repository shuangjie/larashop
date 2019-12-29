<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Model UserAddress
 *
 * @property string $province 省
 * @property string $city 市
 * @property string $district 区
 * @property string $address 具体地址
 *
 */
class UserAddress extends Model
{
    protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];
    protected $dates = ['last_used_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
