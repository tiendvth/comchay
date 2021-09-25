<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Status extends Enum
{
    const WAITING = 1;
    const PAID = 2;
    const DELIVERY = 3;
    const COMPLETE = 4;
}
