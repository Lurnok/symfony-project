<?php

namespace App\Enum;

enum RolesEnum: string
{
    case admin = "ROLE_ADMIN";
    case client = "ROLE_USER";
}