<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VendorApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'alt_email',
        'contact_no',
        'sex',
        'civil_status',
        'nationality',
        'address',
        'application_status',
        'application_date',
        'rejection_reason',
        'status_date',
    ];

    protected $casts = [
        'application_date' => 'datetime',
        'status_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
