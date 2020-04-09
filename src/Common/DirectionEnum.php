<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

use GrizzIt\Enum\Enum;

/**
 * @method static DirectionEnum ASC()
 * @method static DirectionEnum DESC()
 */
class DirectionEnum extends Enum
{
    /**
     * Directs the sorting in ascending order.
     *
     * @var string
     */
    const ASC = 'asc';

    /**
     * Directs the sorting in descending order.
     *
     * @var string
     */
    const DESC = 'desc';
}
