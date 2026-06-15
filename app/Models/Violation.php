<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Violation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'stall_id',
        'violation_type_id',
        'violation_description',
        'evidence_image_path',
        'violation_date',
        'status',
        'suspension_started',
        'suspension_end',
        'payment_status',
        'appeal_text',
        'appeal_document_path',
        'appeal_submitted_at',
    ];

    protected $casts = [
        'violation_date' => 'date',
        'suspension_started' => 'datetime',
        'suspension_end' => 'datetime',
        'appeal_submitted_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stall()
    {
        return $this->belongsTo(Stall::class);
    }

    public function violationType()
    {
        return $this->belongsTo(ViolationType::class);
    }

    public function expirationDate()
    {
        return $this->hasOne(ExpirationDate::class, 'reference_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
