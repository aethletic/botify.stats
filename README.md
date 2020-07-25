# botify.stats
Simple stats module for Botify Telegram library.


## Install
After creating the `$bot` object, include the module.
```php
include __DIR__ . '/modules/botify.stats/module.php';
```

## Setup
`stats_new_users.sql`

```sql
CREATE TABLE `stats_new_users` (
  `id` int(11) NOT NULL,
  `date` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

`stats_messages.sql`

```sql
CREATE TABLE `stats_messages` (
  `id` int(11) NOT NULL,
  `date` int(11) DEFAULT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```
