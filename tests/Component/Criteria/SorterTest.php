<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use GrizzIt\Search\Common\DirectionEnum;
use GrizzIt\Search\Component\Criteria\Sorter;

/**
 * @coversDefaultClass \GrizzIt\Search\Component\Criteria\Sorter
 */
class SorterTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getDirection
     * @covers ::getField
     */
    public function testSorter(): void
    {
        $subject = new Sorter('foo', DirectionEnum::ASC);
        $this->assertInstanceOf(Sorter::class, $subject);
        $this->assertEquals('foo', $subject->getField());
        $this->assertEquals(
            DirectionEnum::ASC,
            $subject->getDirection()
        );
    }
}
