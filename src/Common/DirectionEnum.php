<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

enum DirectionEnum
{
    /**
     * Directs the sorting in ascending order.
     */
    case ASC;

    /**
     * Directs the sorting in descending order.
     */
    case DESC;

    /**
     * Retrieves the direction name from the enum.
     *
     * @return string
     */
    public function name(): string
    {
        return match($this) {
            DirectionEnum::ASC => 'asc',
            DirectionEnum::DESC => 'desc',
        };
    }
}
