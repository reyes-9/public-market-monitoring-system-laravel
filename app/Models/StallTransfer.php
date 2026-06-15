<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StallTransfer extends Model
{
    use HasFactory;

    protected $fillable = [
        'current_owner_user_id',
        'deceased_owner_user_id',
        'application_id',
        'transfer_type',
        'transfer_reason',
        'recipient_user_id',
        'transfer_confirmation_status',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }

    public function currentOwner()
    {
        return $this->belongsTo(User::class, 'current_owner_user_id');
    }

    public function deceasedOwner()
    {
        return $this->belongsTo(User::class, 'deceased_owner_user_id');
    }

    public function recipient()
    {
        return $this->belongsTo(User::class, 'recipient_user_id');
    }
}
