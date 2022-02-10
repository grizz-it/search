<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Component\Criteria;

use GrizzIt\Search\Common\LimiterInterface;

class Limiter implements LimiterInterface
{
    /** @var array */
    private array $fields;

    /**
     * Constructor
     *
     * @param string ...$fields
     */
    public function __construct(string ...$fields)
    {
        $this->fields = $fields;
    }

    /**
     * Retrieves the fields for limiting the output.
     *
     * @return string[]
     */
    public function getFields(): array
    {
        return $this->fields;
    }
}
