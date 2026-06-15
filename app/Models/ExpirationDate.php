<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExpirationDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'reference_id',
        'type',
        'expiration_date',
        'status',
    ];

    protected $casts = [
        'expiration_date' => 'date',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}