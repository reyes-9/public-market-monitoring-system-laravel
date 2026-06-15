<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'user_type',
        'otp_code',
        'otp_expiry',
        'otp_sent_count',
        'last_otp_sent',
        'is_verified',
    ];

    protected $hidden = ['password'];

    protected $casts = [
        'password' => 'hashed',
        'is_verified' => 'boolean',
        'otp_expiry' => 'datetime',
        'last_otp_sent' => 'datetime',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function loginAttempts()
    {
        return $this->hasMany(LoginAttempt::class);
    }
}
