# Examples (Basics)

### Include and create a client
```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

## Basics
Each methode with "echo" will return a json string
```php
  echo $client->info();
```
Each method returns an object to get the direct parameter
```php
  $info = $client->info();

  echo $info->name;
```
Short example
```php
  echo ($client->info())->name;
```

To work with an Array, you can user (array)
```php
  $array = (array)$client->info();
```


## Additional Examples
Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
