<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

use GrizzIt\Enum\Enum;

/**
 * @method static ComparatorEnum EQ()
 * @method static ComparatorEnum NEQ()
 * @method static ComparatorEnum GT()
 * @method static ComparatorEnum GTEQ()
 * @method static ComparatorEnum LT()
 * @method static ComparatorEnum LTEQ()
 * @method static ComparatorEnum IN()
 * @method static ComparatorEnum NIN()
 * @method static ComparatorEnum LIKE()
 * @method static ComparatorEnum NOT()
 */
class ComparatorEnum extends Enum
{
    /**
     * Equals comparator "=".
     * Checks if the field equals the value.
     *
     * @var string
     */
    const EQ = 'eq';

    /**
     * Not equals comparator "!=".
     * Checks if the field does not equal the value.
     *
     * @var string
     */
    const NEQ = 'neq';

    /**
     * Greater than comparator ">".
     * Checks if the field is greater than the value.
     *
     * @var string
     */
    const GT = 'gt';

    /**
     * Greater than or equals comparator ">=".
     * Checks if the field is greater than or equals the value.
     *
     * @var string
     */
    const GTEQ = 'gteq';

    /**
     * Less than comparator "<".
     * Checks if the field is less than the value.
     *
     * @var string
     */
    const LT = 'lt';

    /**
     * Less than or equals comparator "<=".
     * Checks if the field is less than or equals the value.
     *
     * @var string
     */
    const LTEQ = 'lteq';

    /**
     * In comparator.
     * Checks if the field occurs in the value.
     *
     * @var string
     */
    const IN = 'in';

    /**
     * Not in comparator.
     * Checks if the field does not occur in the value.
     *
     * @var string
     */
    const NIN = 'nin';

    /**
     * Like comparator.
     * Checks if the field looks like the value.
     *
     * @var string
     */
    const LIKE = 'like';

    /**
     * Not comparator.
     * Checks if the field is not like the value.
     * Can be used for example in a query for a NOT NULL statement.
     *
     * @var string
     */
    const NOT = 'not';
}
