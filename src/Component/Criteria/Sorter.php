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
    /** @var DirectionEnum */
    private $direction;

    /** @var string */
    private $field;

    /**
     * Constructor
     *
     * @param string $field
     * @param string $direction
     */
    public function __construct(string $field, DirectionEnum $direction)
    {
        $this->field = $field;
        $this->direction = $direction;
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
