<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MarketLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'google_maps_links',
    ];

    public function stalls()
    {
        return $this->hasMany(Stall::class, 'market_id');
    }

    public function applications()
    {
        return $this->hasMany(Application::class, 'market_id');
    }
}
