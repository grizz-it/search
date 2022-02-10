<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

enum OperatorEnum
{
    /**
     * All checks should return true when joined with this operator.
     */
    case AND;

    /**
     * Any check should return true when joined with this operator.
     */
    case OR;

    /**
     * One of the checks should return true when joined with this operator.
     */
    case XOR;

    /**
     * Retrieves the operator name from the enum.
     *
     * @return string
     */
    public function name(): string
    {
        return match($this) {
            OperatorEnum::AND => 'and',
            OperatorEnum::OR => 'or',
            OperatorEnum::XOR => 'xor',
        };
    }
}
