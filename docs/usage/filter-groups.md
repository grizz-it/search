# GrizzIT Search - Filter groups

Filter groups are used to group multiple filters and can also get nested
filter groups registered on them. With this structure, the user is free to
combine filters in any way possible. All filters and filter groups within a
filter group will be joined by the registered operator of the group. This
[operator](../../src/Common/OperatorEnum.php) can be defined in the constructor.
By default, the `AND` operator is used.

The following example contains a demonstration of how a new filter group is
created. It also shows how a pre-existing filter can be registered.
```php
<?php

use GrizzIt\Search\Common\OperatorEnum;
use GrizzIt\Search\Component\Criteria\FilterGroup;

$group = new FilterGroup(OperatorEnum::OR());
$group->addFilter($filter);
```

## Further reading

[Back to usage index](index.md)

[Filtering](filtering.md)

[Limiting](limiting.md)

[Paging](paging.md)

[Sorting](sorting.md)

[Searching](searching.md)
