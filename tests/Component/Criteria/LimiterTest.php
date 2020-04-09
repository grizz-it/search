<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Tests\Component\Criteria;

use PHPUnit\Framework\TestCase;
use GrizzIt\Search\Component\Criteria\Limiter;

/**
 * @coversDefaultClass \GrizzIt\Search\Component\Criteria\Limiter
 */
class LimiterTest extends TestCase
{
    /**
     * @return void
     *
     * @covers ::__construct
     * @covers ::getFields
     */
    public function testLimiter(): void
    {
        $subject = new Limiter('foo', 'bar');
        $this->assertInstanceOf(Limiter::class, $subject);
        $this->assertEquals(['foo', 'bar'], $subject->getFields());
    }
}
