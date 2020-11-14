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
 * @method static ComparatorEnum NOT_LIKE()
 * @method static ComparatorEnum IS_NULL()
 * @method static ComparatorEnum NOT_NULL()
 */
class ComparatorEnum extends Enum
{
    /**
     * Equals comparator "=".
     * Checks if the field equals the value.
     *
     * @var string
     */
    public const EQ = 'eq';

    /**
     * Not equals comparator "!=".
     * Checks if the field does not equal the value.
     *
     * @var string
     */
    public const NEQ = 'neq';

    /**
     * Greater than comparator ">".
     * Checks if the field is greater than the value.
     *
     * @var string
     */
    public const GT = 'gt';

    /**
     * Greater than or equals comparator ">=".
     * Checks if the field is greater than or equals the value.
     *
     * @var string
     */
    public const GTEQ = 'gteq';

    /**
     * Less than comparator "<".
     * Checks if the field is less than the value.
     *
     * @var string
     */
    public const LT = 'lt';

    /**
     * Less than or equals comparator "<=".
     * Checks if the field is less than or equals the value.
     *
     * @var string
     */
    public const LTEQ = 'lteq';

    /**
     * In comparator.
     * Checks if the field occurs in the value.
     *
     * @var string
     */
    public const IN = 'in';

    /**
     * Not in comparator.
     * Checks if the field does not occur in the value.
     *
     * @var string
     */
    public const NIN = 'nin';

    /**
     * Like comparator.
     * Checks if the field looks like the value.
     *
     * @var string
     */
    public const LIKE = 'like';

    /**
     * Not like comparator.
     * Checks if the field does not look like the value.
     *
     * @var string
     */
    public const NOT_LIKE = 'not_like';

    /**
     * Is null comparator.
     * Checks if the field is null.
     *
     * @var string
     */
    public const IS_NULL = 'is_null';

    /**
     * Is not null comparator.
     * Checks if the field is not null.
     *
     * @var string
     */
    public const NOT_NULL = 'not_null';
}
