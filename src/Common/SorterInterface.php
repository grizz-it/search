<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

interface SorterInterface
{
    /**
     * Retrieves the direction of the sorting.
     *
     * @return DirectionEnum
     */
    public function getDirection(): DirectionEnum;

    /**
     * Retrieves the field on which should be sorted.
     *
     * @return string
     */
    public function getField(): string;
}
