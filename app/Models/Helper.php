<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Helper extends Model
{
    use HasFactory;

    protected $fillable = [
        'stall_id',
        'stall_owner_user_id',
        'first_name',
        'middle_name',
        'last_name',
        'sex',
        'email',
        'alt_email',
        'phone_number',
        'civil_status',
        'nationality',
        'address',
        'status',
    ];

    public function stall()
    {
        return $this->belongsTo(Stall::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class, 'stall_owner_user_id');
    }

    public function expirationDate()
    {
        return $this->hasOne(ExpirationDate::class, 'reference_id');
    }
}
