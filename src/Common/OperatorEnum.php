<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

enum OperatorEnum: string
{
    /**
     * All checks should return true when joined with this operator.
     */
    case AND = 'and';

    /**
     * Any check should return true when joined with this operator.
     */
    case OR = 'or';

    /**
     * One of the checks should return true when joined with this operator.
     */
    case XOR = 'xor';

    /**
     * Retrieves the operator name from the enum.
     *
     * @return string
     */
    public function name(): string
    {
        return match ($this) {
            OperatorEnum::AND => 'and',
            OperatorEnum::OR => 'or',
            OperatorEnum::XOR => 'xor',
        };
    }

    /**
     * Creates the enum by the string variation.
     *
     * @param string $input
     *
     * @return OperatorEnum
     */
    public function byString(string $input): OperatorEnum
    {
        return match ($input) {
            'and' => OperatorEnum::AND,
            'or' => OperatorEnum::OR,
            'xor' => OperatorEnum::XOR,
        };
    }
}
