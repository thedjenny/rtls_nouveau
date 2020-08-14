<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PersonTypes extends Enum
{
    const USER = 'USER';
    const EMPLOYEE = 'EMPLOYEE';
    const ADMIN = 'ADMIN';

    public static function getDescription($value): string
    {
        if($value == self::USER) {
            return 'User';
        }
        else if($value == self::EMPLOYEE) {
            return 'Employé';
        }
        else if($value == self::ADMIN) {
            return 'Admin';
        }

        return $value;
    }


}
