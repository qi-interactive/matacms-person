MATA CMS Person
==========================================

![MATA CMS Module](https://s3-eu-west-1.amazonaws.com/qi-interactive/assets/mata-cms/gear-mata-logo%402x.png)


Person module manages persons for MATA CMS.


Installation
------------

- Add the module using composer:

```json
"matacms/matacms-person": "~1.0.0"
```

-  Run migrations
```
php yii migrate/up --migrationPath=@vendor/matacms/matacms-person/migrations
```


Changelog
---------

## 1.0.0.1-alpha, May 3, 2016

- Added filterableAttributes() to Person model (for search functionality)

## 1.0.0-alpha, May 18, 2015

- Initial release.
