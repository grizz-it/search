<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

enum DirectionEnum: string
{
    /**
     * Directs the sorting in ascending order.
     */
    case ASC = 'asc';

    /**
     * Directs the sorting in descending order.
     */
    case DESC = 'desc';

    /**
     * Retrieves the direction name from the enum.
     *
     * @return string
     */
    public function name(): string
    {
        return match ($this) {
            DirectionEnum::ASC => 'asc',
            DirectionEnum::DESC => 'desc',
        };
    }

    /**
     * Creates the enum by the string variation.
     *
     * @param string $input
     *
     * @return DirectionEnum
     */
    public function byString(string $input): DirectionEnum
    {
        return match ($input) {
            'asc' => DirectionEnum::ASC,
            'desc' => DirectionEnum::DESC,
        };
    }
}
