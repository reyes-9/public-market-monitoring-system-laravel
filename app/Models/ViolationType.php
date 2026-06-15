<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ViolationType extends Model
{
    use HasFactory;

    protected $fillable = [
        'violation_name',
        'fine_amount',
        'escalation_fee',
        'criticality',
        'escalation_status',
    ];

    public function violations()
    {
        return $this->hasMany(Violation::class);
    }
}
