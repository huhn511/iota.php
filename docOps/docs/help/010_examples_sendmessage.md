# Examples Action (sendMessage)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Basic sendMessage

```php
  echo $ret = (new IOTA\Action\sendMessage($client))->index('#iota.php')
                                        ->data('message test! follow me on Twitter @IOTAphp')
                                        ->run();
```

---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
