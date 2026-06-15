<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_number',
        'user_id',
        'stall_id',
        'section_id',
        'market_id',
        'application_type',
        'products',
        'helper_id',
        'extension_id',
        'status',
        'rejection_reason',
        'reviewing_admin_id',
        'reviewed_by',
        'reviewed_at',
        'inspector_id',
        'inspection_date',
        'inspection_status',
    ];

    protected $casts = [
        'reviewed_at' => 'datetime',
        'inspection_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stall()
    {
        return $this->belongsTo(Stall::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function market()
    {
        return $this->belongsTo(MarketLocation::class, 'market_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function extension()
    {
        return $this->belongsTo(Extension::class);
    }

    public function helper()
    {
        return $this->belongsTo(Helper::class);
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }

    public function stallTransfer()
    {
        return $this->hasOne(StallTransfer::class);
    }

    public function reviewingAdmin()
    {
        return $this->belongsTo(User::class, 'reviewing_admin_id');
    }

    public function reviewedBy()
    {
        return $this->belongsTo(User::class, 'reviewed_by');
    }

    public function inspector()
    {
        return $this->belongsTo(User::class, 'inspector_id');
    }
}
