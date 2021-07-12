# Basics examples (Address)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Getting address info from bech32

```php
  echo $client->address("atoi1qpg4tqh7vj9s7y9zk2smj8t4qgvse9um42l7apdkhw6syp5ju4w3vet6gtj");
  #echo $_address->balance;
```

### Getting address info from ed25519

```php
  echo $client->addressEd25519("515582fe648b0f10a2b2a1b91d7502190c979baabfee85b6bbb5020692e55d16");
  #echo $_address->balance;
```

### Convert bech32 to ed25519

```php
  echo IOTA\Helper\Converter::bech32ToEd25519("atoi1qpg4tqh7vj9s7y9zk2smj8t4qgvse9um42l7apdkhw6syp5ju4w3vet6gtj");
```


## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
