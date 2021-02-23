<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Component\Criteria;

use GrizzIt\Search\Common\FilterGroupInterface;
use GrizzIt\Search\Common\LimiterInterface;
use GrizzIt\Search\Common\PagerInterface;
use GrizzIt\Search\Common\SearchCriteriaInterface;
use GrizzIt\Search\Common\SorterInterface;

class SearchCriteria implements SearchCriteriaInterface
{
    /** @var FilterGroupInterface[] */
    private array $filterGroups = [];

    /** @var LimiterInterface[] */
    private array $limiters = [];

    /** @var PagerInterface[] */
    private array $pagers = [];

    /** @var SorterInterface[] */
    private array $sorters = [];

    /**
     * Adds a filter group to the criteria.
     *
     * @param FilterGroupInterface $filter
     *
     * @return void
     */
    public function addFilterGroup(FilterGroupInterface $filterGroup): void
    {
        $this->filterGroups[] = $filterGroup;
    }

    /**
     * Retrieves the filter groups from the criteria.
     *
     * @return FilterGroupInterface[]
     */
    public function getFilterGroups(): array
    {
        return $this->filterGroups;
    }

    /**
     * Adds a sorter to the criteria.
     *
     * @param SorterInterface $sorter
     *
     * @return void
     */
    public function addSorter(SorterInterface $sorter): void
    {
        $this->sorters[] = $sorter;
    }

    /**
     * Retrieves the sorters from the criteria.
     *
     * @return SorterInterface[]
     */
    public function getSorters(): array
    {
        return $this->sorters;
    }

    /**
     * Adds a pager to the criteria.
     *
     * @param PagerInterface $pager
     *
     * @return void
     */
    public function addPager(PagerInterface $pager): void
    {
        $this->pagers[] = $pager;
    }

    /**
     * Retrieves the pagers from the criteria.
     *
     * @return PagerInterface[]
     */
    public function getPagers(): array
    {
        return $this->pagers;
    }

    /**
     * Adds a limiter to the criteria.
     *
     * @param LimiterInterface $limiter
     *
     * @return void
     */
    public function addLimiter(LimiterInterface $limiter): void
    {
        $this->limiters[] = $limiter;
    }

    /**
     * Retrieves the limiters from the criteria.
     *
     * @return LimiterInterface[]
     */
    public function getLimiters(): array
    {
        return $this->limiters;
    }
}
