<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Subject extends Enum
{
    const SALES = 1;
    const CUSTOMER_SUPPORT = 2;
    const PARTNERSHIPS = 3;
}
