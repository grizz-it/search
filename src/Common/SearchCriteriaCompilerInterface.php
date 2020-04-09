<?php
/**
 * Copyright (C) GrizzIT, Inc. All rights reserved.
 * See LICENSE for license details.
 */

namespace GrizzIt\Search\Common;

interface SearchCriteriaCompilerInterface
{
    /**
     * Compiles the criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     *
     * @return mixed
     */
    public function compile(SearchCriteriaInterface $searchCriteria);
}
