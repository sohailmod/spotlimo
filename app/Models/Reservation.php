<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function getStatusColorAttribute()
    {
        return [
            'pending' => 'primary',
            'processing' => 'warning',
            'completed' => 'success',
            'canceled' => 'danger',
        ][$this->status] ?? 'info';
    }

    public function mainPassenger()
    {
        return $this->hasOne(MainPassenger::class);
    }

    public function detail()
    {
        return $this->hasOne(ReservationDetail::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(VehicleType::class, 'vehicle_type_id');
    }

    public function service()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }

    public function bookingContact()
    {
        return $this->hasOne(BookingContact::class);
    }
}
