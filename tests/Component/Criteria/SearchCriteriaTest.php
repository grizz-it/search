<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use GrizzIt\Search\Component\Criteria\SearchCriteria;
use GrizzIt\Search\Common\SearchCriteriaInterface;
use GrizzIt\Search\Common\FilterGroupInterface;
use GrizzIt\Search\Common\SorterInterface;
use GrizzIt\Search\Common\PagerInterface;
use GrizzIt\Search\Common\LimiterInterface;

/**
 * @coversDefaultClass \GrizzIt\Search\Component\Criteria\SearchCriteria
 */
class SearchCriteriaTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::addFilterGroup
     * @covers ::getFilterGroups
     * @covers ::addSorter
     * @covers ::getSorters
     * @covers ::addPager
     * @covers ::getPagers
     * @covers ::addLimiter
     * @covers ::getLimiters
     */
    public function testSearchCriteria(): void
    {
        $subject = new SearchCriteria();

        $filterGroupMock = $this->createMock(FilterGroupInterface::class);
        $subject->addFilterGroup($filterGroupMock);
        $this->assertEquals([$filterGroupMock], $subject->getFilterGroups());

        $sorterMock = $this->createMock(SorterInterface::class);
        $subject->addSorter($sorterMock);
        $this->assertEquals([$sorterMock], $subject->getSorters());

        $pagerMock = $this->createMock(PagerInterface::class);
        $subject->addPager($pagerMock);
        $this->assertEquals([$pagerMock], $subject->getPagers());

        $limiterMock = $this->createMock(LimiterInterface::class);
        $subject->addLimiter($limiterMock);
        $this->assertEquals([$limiterMock], $subject->getLimiters());
    }
}
