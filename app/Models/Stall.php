<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stall extends Model
{
    use HasFactory;

    protected $fillable = [
        'market_id',
        'section_id',
        'user_id',
        'stall_number',
        'rental_fee',
        'stall_size',
        'payment_status',
        'status',
        'product',
    ];

    public function market()
    {
        return $this->belongsTo(MarketLocation::class, 'market_id');
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function extensions()
    {
        return $this->hasMany(Extension::class);
    }

    public function violations()
    {
        return $this->hasMany(Violation::class);
    }

    public function reviews()
    {
        return $this->hasMany(StallReview::class);
    }

    public function helpers()
    {
        return $this->hasMany(Helper::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function transfers()
    {
        return $this->hasMany(StallTransfer::class, 'application_id');
    }
}
