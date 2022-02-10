<?php

/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

enum ComparatorEnum
{
    /**
     * Equals comparator "=".
     * Checks if the field equals the value.
     */
    case EQ;

    /**
     * Not equals comparator "!=".
     * Checks if the field does not equal the value.
     */
    case NEQ;

    /**
     * Greater than comparator ">".
     * Checks if the field is greater than the value.
     */
    case GT;

    /**
     * Greater than or equals comparator ">=".
     * Checks if the field is greater than or equals the value.
     */
    case GTEQ;

    /**
     * Less than comparator "<".
     * Checks if the field is less than the value.
     */
    case LT;

    /**
     * Less than or equals comparator "<=".
     * Checks if the field is less than or equals the value.
     */
    case LTEQ;

    /**
     * In comparator.
     * Checks if the field occurs in the value.
     */
    case IN;

    /**
     * Not in comparator.
     * Checks if the field does not occur in the value.
     */
    case NIN;

    /**
     * Like comparator.
     * Checks if the field looks like the value.
     */
    case LIKE;

    /**
     * Not like comparator.
     * Checks if the field does not look like the value.
     */
    case NOT_LIKE;

    /**
     * Is null comparator.
     * Checks if the field is null.
     */
    case IS_NULL;

    /**
     * Is not null comparator.
     * Checks if the field is not null.
     */
    case NOT_NULL;

    /**
     * Retrieves the comparator name from the enum.
     *
     * @return string
     */
    public function name(): string
    {
        return match($this) {
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
}
