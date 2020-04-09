<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

interface FilterGroupInterface
{
    /**
     * Retrieves the operator for the filter group.
     *
     * @return OperatorEnum
     */
    public function getOperator(): OperatorEnum;

    /**
     * Retrieves all filters.
     *
     * @return FilterInterface[]|FilterGroupInterface[]
     */
    public function getFilters(): array;

    /**
     * Add a filter group to the group.
     *
     * @param FilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(FilterGroupInterface $filterGroup): void;

    /**
     * Add a filter to the group.
     *
     * @param FilterInterface $filter
     *
     * @return void
     */
    public function addFilter(FilterInterface $filter): void;
}
