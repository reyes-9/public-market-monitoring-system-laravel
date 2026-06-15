<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stall_id',
        'extension_id',
        'violation_id',
        'source_type',
        'amount',
        'payment_status',
        'payment_date',
        'receipt_path',
    ];

    protected $casts = [
        'payment_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stall()
    {
        return $this->belongsTo(Stall::class);
    }

    public function extension()
    {
        return $this->belongsTo(Extension::class);
    }

    public function violation()
    {
        return $this->belongsTo(Violation::class);
    }
}
