# Basics examples (Peers)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Get peers list

```php
  $result = $client->peers();
  #print_r($result);
```

### Get pear

```php
  echo $client->peer((string) $peerId);
```

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
