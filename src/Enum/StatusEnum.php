<?php

namespace App\Enum;

enum StatusEnum: string
{
    case disponible = "disponible";
    case rupture = "rupture de stock";
    case preco = "précommande";
}
