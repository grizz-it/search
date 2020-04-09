<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

use GrizzIt\Enum\Enum;

/**
 * @method static OperatorEnum AND()
 * @method static OperatorEnum OR()
 * @method static OperatorEnum XOR()
 */
class OperatorEnum extends Enum
{
    /**
     * All checks should return true when joined with this operator.
     *
     * @var string
     */
    const AND = 'and';

    /**
     * Any check should return true when joined with this operator.
     *
     * @var string
     */
    const OR = 'or';

    /**
     * One of the checks should return true when joined with this operator.
     *
     * @var string
     */
    const XOR = 'xor';
}
