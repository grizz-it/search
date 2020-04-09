<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Component\Criteria;

use GrizzIt\Search\Common\OperatorEnum;
use GrizzIt\Search\Common\FilterInterface;
use GrizzIt\Search\Common\FilterGroupInterface;

class FilterGroup implements FilterGroupInterface
{
    /** @var FilterInterface[]|FilterGroupInterface[] */
    private $filters;

    /** @var OperatorEnum */
    private $operator;

    /**
     * Constructor.
     *
     * @param OperatorEnum $operator
     */
    public function __construct(OperatorEnum $operator = null)
    {
        $this->operator = $operator ?? OperatorEnum::AND();
    }

    /**
     * Retrieves the operator for the filter group.
     *
     * @return OperatorEnum
     */
    public function getOperator(): OperatorEnum
    {
        return $this->operator;
    }

    /**
     * Retrieves all filters.
     *
     * @return FilterInterface[]|FilterGroupInterface[]
     */
    public function getFilters(): array
    {
        return $this->filters;
    }

    /**
     * Add a filter group to the group.
     *
     * @param FilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(FilterGroupInterface $filterGroup): void
    {
        $this->filters[] = $filterGroup;
    }

    /**
     * Add a filter to the group.
     *
     * @param FilterInterface $filter
     *
     * @return void
     */
    public function addFilter(FilterInterface $filter): void
    {
        $this->filters[] = $filter;
    }
}
