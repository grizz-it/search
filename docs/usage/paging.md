# GrizzIT Search - Paging

Pagers are the components responsible for setting the page size and the current
page. These components are directly registered on the search criteria. They
are constructed like this:

```php
<?php

use GrizzIt\Search\Component\Criteria\Pager;

$pager = new Pager(1, 50);
```

## Further reading

[Back to usage index](index.md)

[Filtering](filtering.md)

[Filter Groups](filter-groups.md)

[Limiting](limiting.md)

[Sorting](sorting.md)

[Searching](searching.md)
