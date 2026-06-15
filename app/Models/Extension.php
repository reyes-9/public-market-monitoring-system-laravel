<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Extension extends Model
{
    use HasFactory;

    protected $fillable = [
        'stall_id',
        'application_id',
        'duration',
        'extension_cost',
        'payment_status',
        'status',
    ];

    public function stall()
    {
        return $this->belongsTo(Stall::class);
    }

    public function application()
    {
        return $this->belongsTo(Application::class);
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
