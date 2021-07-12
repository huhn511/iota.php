# Examples Action (checkTransaction)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Check Transaction

```php
  echo $ret = (new IOTA\Action\checkTransaction($client))->messageId("11cf1ad39725624e78a65f4f96410c471558245ca05bc9b6d846fc728ec8ff55")
                                                         ->run();
```


## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
