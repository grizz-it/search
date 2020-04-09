# GrizzIT Search - Filtering

Filter are the components responsible for defining comparisons for a key/value
pair. They define the field, comparator and the value. All the options for the
comparator values are defined in the
[ComparatorEnum](../../src/Common/ComparatorEnum.php).
Creating a new filter can be done with the provider
[Filter](../../src/Component/Criteria/Filter.php):

```php
<?php

use GrizzIt\Search\Common\ComparatorEnum;
use GrizzIt\Search\Component\Criteria\Filter;

$filter = new Filter('firstname', ComparatorEnum::EQ(), 'john');
```

This example would create a filter object, which should be interpreted as
comparing the value which is registered on `firstname` directly with the value
`john`.

Filters should always be registered to a filter group. The filter group is then
used to register it to the search criteria.

## Further reading

[Back to usage index](index.md)

[Filter Groups](filter-groups.md)

[Limiting](limiting.md)

[Paging](paging.md)

[Sorting](sorting.md)

[Searching](searching.md)
