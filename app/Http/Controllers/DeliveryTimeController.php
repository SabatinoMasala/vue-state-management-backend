<?php

namespace App\Http\Controllers;

class DeliveryTimeController extends Controller
{
    public function index()
    {
        sleep(1);
        if (rand(0, 10) <= 5) {
            throw new \Exception('Chaos');
        }
        $dt = now();
        $preparationTime = 15;
        $rounded = $dt->copy()->startOfMinute()->addMinutes($preparationTime);
        $timeslot = 15;
        $remainder = $rounded->minute % $timeslot;

        if ($remainder !== 0 || $dt->second > 0) {
            $rounded->addMinutes($timeslot - $remainder);
        }

        return [
            'timestamp' => $rounded->timestamp,
            'iso' => $rounded->toISOString()
        ];
    }
}
