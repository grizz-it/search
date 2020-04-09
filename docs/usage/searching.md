# GrizzIT Search - Searching

[SearchCriteria](../../src/Component/Criteria/SearchCriteria.php) objects are
the main objects used for searching. Every provided criteria object (except
for the Filter) can be registered on this object. These implementations do not
require any constructor arguments to be instantiated.

## Compiling

An interface is provided for a compiler for search criteria's. The interface
[SearchCriteriaCompilerInterface](../../src/Common/SearchCriteriaCompilerInterface.php)
requires to be implemented by the application using the search criteria. No
implementation is provided in this package, because an implementation would be
very specific for each use case.

## Further reading

[Back to usage index](index.md)

[Filtering](filtering.md)

[Filter Groups](filter-groups.md)

[Limiting](limiting.md)

[Paging](paging.md)

[Sorting](sorting.md)
