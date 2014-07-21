 VDM Extractor
===============

*A (very) simple and tiny VDM collector & API*

Extractor
---------

Store 200 VDM posts in your database

```php public/index.php extract vdm 200```

API
---

The API returns Json

**Get every posts**

```/api/posts```

**Filter posts**

*By author...*

```/api/posts?author=Michel```

*By from date...*

```/api/posts?from=2014-07-01```

*By from & to date...*

```/api/posts?from=2014-07-01&to=2014-07-15```

**Get a single post by its id**

```/api/posts/884547```

Tests
-----

Launch every single tests

```./vendor/bin/phpunit -c phpunit.xml```

Powered by
----------

PHP, Zend Framework 2 & Doctrine ORM.

