<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use GrizzIt\Search\Common\ComparatorEnum;
use GrizzIt\Search\Component\Criteria\Filter;

/**
 * @coversDefaultClass \GrizzIt\Search\Component\Criteria\Filter
 */
class FilterTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getField
     * @covers ::getValue
     * @covers ::getComparator
     */
    public function testFilter(): void
    {
        $subject = new Filter('foo', ComparatorEnum::EQ(), 'bar');
        $this->assertInstanceOf(Filter::class, $subject);
        $this->assertEquals('foo', $subject->getField());
        $this->assertEquals(ComparatorEnum::EQ(), $subject->getComparator());
        $this->assertEquals('bar', $subject->getValue());
    }
}
