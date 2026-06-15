<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'first_name',
        'middle_name',
        'last_name',
        'alt_email',
        'contact_no',
        'sex',
        'civil_status',
        'nationality',
        'address',
        'status',
    ];

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function stall()
    {
        return $this->hasOne(Stall::class);
    }

    public function violations()
    {
        return $this->hasMany(Violation::class);
    }

    public function stallReviews()
    {
        return $this->hasMany(StallReview::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function helpers()
    {
        return $this->hasMany(Helper::class, 'stall_owner_user_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }

    public function adminLogs()
    {
        return $this->hasMany(AdminLog::class);
    }

    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    public function vendorApplication()
    {
        return $this->hasOne(VendorApplication::class);
    }

    public function supportTickets()
    {
        return $this->hasMany(CustomerSupportTicket::class);
    }

    public function applicants()
    {
        return $this->hasMany(Applicant::class);
    }
}
