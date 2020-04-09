# GrizzIT Search - Sorting

The sorter components are responsible for sorting the data which is returned.
The component uses the [DirectionEnum](../../src/Common/DirectionEnum.php) to
determine the sorting direction. These components can be registered directly on
the search criteria. They can be instantiated with the following snippet:

```php
<?php

use GrizzIt\Search\Common\DirectionEnum;
use GrizzIt\Search\Component\Criteria\Sorter;

$sorter = new Sorter('firstname', DirectionEnum::ASC());
```

## Further reading

[Back to usage index](index.md)

[Filtering](filtering.md)

[Filter Groups](filter-groups.md)

[Limiting](limiting.md)

[Paging](paging.md)

[Searching](searching.md)
