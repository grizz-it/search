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
    private string $field;

    /** @var ComparatorEnum */
    private ComparatorEnum $comparator;

    /** @var mixed */
    private mixed $value;

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
        mixed $value
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
    public function getValue(): mixed
    {
        return $this->value;
    }
}
