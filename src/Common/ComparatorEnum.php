<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

enum ComparatorEnum: string
{
    /**
     * Equals comparator "=".
     * Checks if the field equals the value.
     */
    case EQ = 'eq';

    /**
     * Not equals comparator "!=".
     * Checks if the field does not equal the value.
     */
    case NEQ = 'neq';

    /**
     * Greater than comparator ">".
     * Checks if the field is greater than the value.
     */
    case GT = 'gt';

    /**
     * Greater than or equals comparator ">=".
     * Checks if the field is greater than or equals the value.
     */
    case GTEQ = 'gteq';

    /**
     * Less than comparator "<".
     * Checks if the field is less than the value.
     */
    case LT = 'lt';

    /**
     * Less than or equals comparator "<=".
     * Checks if the field is less than or equals the value.
     */
    case LTEQ = 'lteq';

    /**
     * In comparator.
     * Checks if the field occurs in the value.
     */
    case IN = 'in';

    /**
     * Not in comparator.
     * Checks if the field does not occur in the value.
     */
    case NIN = 'nin';

    /**
     * Like comparator.
     * Checks if the field looks like the value.
     */
    case LIKE = 'like';

    /**
     * Not like comparator.
     * Checks if the field does not look like the value.
     */
    case NOT_LIKE = 'not_like';

    /**
     * Is null comparator.
     * Checks if the field is null.
     */
    case IS_NULL = 'is_null';

    /**
     * Is not null comparator.
     * Checks if the field is not null.
     */
    case NOT_NULL = 'not_null';

    /**
     * Retrieves the comparator name from the enum.
     *
     * @return string
     */
    public function name(): string
    {
        return match ($this) {
            ComparatorEnum::EQ => 'eq',
            ComparatorEnum::NEQ => 'neq',
            ComparatorEnum::GT => 'gt',
            ComparatorEnum::GTEQ => 'gteq',
            ComparatorEnum::LT => 'lt',
            ComparatorEnum::LTEQ => 'lteq',
            ComparatorEnum::IN => 'in',
            ComparatorEnum::NIN => 'nin',
            ComparatorEnum::LIKE => 'like',
            ComparatorEnum::NOT_LIKE => 'not_like',
            ComparatorEnum::IS_NULL => 'is_null',
            ComparatorEnum::NOT_NULL => 'not_null',
        };
    }

    /**
     * Creates the enum by the string variation.
     *
     * @param string $input
     *
     * @return ComparatorEnum
     */
    public function byString(string $input): ComparatorEnum
    {
        return match ($input) {
            'eq' => ComparatorEnum::EQ,
            'neq' => ComparatorEnum::NEQ,
            'gt' => ComparatorEnum::GT,
            'gteq' => ComparatorEnum::GTEQ,
            'lt' => ComparatorEnum::LT,
            'lteq' => ComparatorEnum::LTEQ,
            'in' => ComparatorEnum::IN,
            'nin' => ComparatorEnum::NIN,
            'like' => ComparatorEnum::LIKE,
            'not_like' => ComparatorEnum::NOT_LIKE,
            'is_null' => ComparatorEnum::IS_NULL,
            'not_null' => ComparatorEnum::NOT_NULL,
        };
    }
}
