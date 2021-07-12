# Examples Action (Address Balance)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Address Bech32

```php
  echo $ret = (new IOTA\Action\getBalance($client))->address('atoi1qpszqzadsym6wpppd6z037dvlejmjuke7s24hm95s9fg9vpua7vluehe53e')->run();
```


### Address Ed25519

```php
  echo $ret = (new IOTA\Action\getBalance($client))->address('60200bad8137a704216e84f8f9acfe65b972d9f4155becb4815282b03cef99fe')->run();
```

---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
