<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

interface LimiterInterface
{
    /**
     * Retrieves the fields for limiting the output.
     *
     * @return string[]
     */
    public function getFields(): array;
}
