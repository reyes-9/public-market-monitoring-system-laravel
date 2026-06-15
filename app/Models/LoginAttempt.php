<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoginAttempt extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'login_time',
        'status',
        'ip_address',
    ];

    protected $casts = [
        'login_time' => 'datetime',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
