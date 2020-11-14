<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Component\Criteria;

use GrizzIt\Search\Common\ComparatorEnum;
use GrizzIt\Search\Common\FilterInterface;

class Filter implements FilterInterface
{
    /** @var string */
    private $field;

    /** @var ComparatorEnum */
    private $comparator;

    /** @var mixed */
    private $value;

    /**
     * Constructor
     *
     * @param string $field
     * @param ComparatorEnum $comparator
     * @param mixed  $value
     */
    public function __construct(
        string $field,
        ComparatorEnum $comparator,
        $value
    ) {
        $this->field = $field;
        $this->comparator = $comparator;
        $this->value = $value;
    }

    /**
     * Retrieves the field which should be compared.
     *
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * Retrieves the comparator used in the comparison of field and value.
     *
     * @return ComparatorEnum
     */
    public function getComparator(): ComparatorEnum
    {
        return $this->comparator;
    }

    /**
     * Retrieves the value which should be compared against.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}
