<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

interface SearchCriteriaInterface
{
    /**
     * Adds a filter group to the criteria.
     *
     * @param FilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(FilterGroupInterface $filterGroup): void;

    /**
     * Retrieves the filter groups from the criteria.
     *
     * @return FilterGroupInterface[]
     */
    public function getFilterGroups(): array;

    /**
     * Adds a sorter to the criteria.
     *
     * @param SorterInterface $sorter
     *
     * @return void
     */
    public function addSorter(SorterInterface $sorter): void;

    /**
     * Retrieves the sorters from the criteria.
     *
     * @return SorterInterface[]
     */
    public function getSorters(): array;

    /**
     * Adds a pager to the criteria.
     *
     * @param PagerInterface $pager
     *
     * @return void
     */
    public function addPager(PagerInterface $pager): void;

    /**
     * Retrieves the pagers from the criteria.
     *
     * @return PagerInterface[]
     */
    public function getPagers(): array;

    /**
     * Adds a limiter to the criteria.
     *
     * @param LimiterInterface $limiter
     *
     * @return void
     */
    public function addLimiter(LimiterInterface $limiter): void;

    /**
     * Retrieves the limiters from the criteria.
     *
     * @return LimiterInterface[]
     */
    public function getLimiters(): array;
}
