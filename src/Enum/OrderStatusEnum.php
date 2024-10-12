<?php

namespace App\Enum;

enum OrderStatusEnum: string
{
    case prep = "en preparation";
    case expedie = "expediée";
    case livre = "en cours de livraison";
    case annule = "annulée";
}
