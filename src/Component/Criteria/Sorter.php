<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Component\Criteria;

use GrizzIt\Search\Common\DirectionEnum;
use GrizzIt\Search\Common\SorterInterface;

class Sorter implements SorterInterface
{
    /**
     * Constructor
     *
     * @param string $field
     * @param DirectionEnum $direction
     */
    public function __construct(
        private string $field,
        private DirectionEnum $direction
    ) {
    }

    /**
     * Retrieves the direction of the sorting.
     *
     * @return DirectionEnum
     */
    public function getDirection(): DirectionEnum
    {
        return $this->direction;
    }

    /**
     * Retrieves the field on which should be sorted.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }
}
