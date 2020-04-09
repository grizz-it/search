<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use GrizzIt\Search\Common\OperatorEnum;
use GrizzIt\Search\Common\FilterInterface;
use GrizzIt\Search\Common\FilterGroupInterface;
use GrizzIt\Search\Component\Criteria\FilterGroup;

/**
 * @coversDefaultClass \GrizzIt\Search\Component\Criteria\FilterGroup
 */
class FilterGroupTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getFilters
     * @covers ::addFilter
     * @covers ::addFilterGroup
     * @covers ::getOperator
     */
    public function testFilter(): void
    {
        $subject = new FilterGroup();

        $filterGroupMock = $this->createMock(FilterGroupInterface::class);
        $filterMock = $this->createMock(FilterInterface::class);
        $subject->addFilter($filterMock);
        $subject->addFilterGroup($filterGroupMock);
        $this->assertEquals(OperatorEnum::AND(), $subject->getOperator());
        $this->assertEquals(
            [$filterMock, $filterGroupMock],
            $subject->getFilters()
        );
    }
}
