<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempPayment extends Model
{
    use HasFactory;
    public function getStatusColorAttribute()
    {
        return [
            'PENDING' => 'warning',
            'APPROVED' => 'primary',
            'COMPLETED' => 'success',
            'FAILED' => 'danger',
        ][$this->status] ?? 'info';
    }

    public function reservation()
    {
        return $this->belongsTo(TempReservation::class, 'reservation_id');
    }
    
}
