<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

interface FilterInterface
{
    /**
     * Retrieves the field which should be compared.
     *
     * @return string
     */
    public function getField(): string;

    /**
     * Retrieves the comparator used in the comparison of field and value.
     *
     * @return ComparatorEnum
     */
    public function getComparator(): ComparatorEnum;

    /**
     * Retrieves the value which should be compared against.
     *
     * @return mixed
     */
    public function getValue(): mixed;
}
