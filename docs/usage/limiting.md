# GrizzIT Search - Limiting

Limiters are used to limit the amount of data that is being fetched. These can
be used to for example limit the amount of the columns on which the select is
performed. These object can be directly injected on the search criteria.
Instantiating the [Limiter](../../src/Component/Criteria/Limiter.php) looks like
this:
```php
<?php

use GrizzIt\Search\Component\Criteria\Limiter;

$limiter = new Limiter('firstname', 'lastname', 'age');
```

## Further reading

[Back to usage index](index.md)

[Filtering](filtering.md)

[Filter Groups](filter-groups.md)

[Paging](paging.md)

[Sorting](sorting.md)

[Searching](searching.md)
