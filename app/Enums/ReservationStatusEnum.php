<?php

namespace App\Enums;

enum ReservationStatusEnum: string
{
    public const PENDING = 'pending';

    public const PROCESSING = 'processing';

    public const COMPLETED = 'completed';

    public const CANCELED = 'canceled';
}
