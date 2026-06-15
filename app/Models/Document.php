<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'document_name',
        'document_type',
        'document_path',
        'status',
        'rejection_reason',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
