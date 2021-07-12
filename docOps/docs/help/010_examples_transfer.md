# Examples Action (Transfer)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Setup seedInput

```php
  $seedInput = "giant dynamic museum toddler six deny defense ostrich bomb access mercy blood explain muscle shoot shallow glad autumn author calm heavy hawk abuse rally";
```

or

```php
  $seedInput = "a7263c9c84ae6aa9c88ae84bfd224aab87f187b57404d462ab6764c52303bb9ae51f54acc5473b1c366dc8559c04d49d6533edf19110918f9e2474443acd33f3";
```

### Send transfer

```php
  echo $ret = (new IOTA\Action\sendTokens($client))->amount(1000000)
                                       ->seedInput($seedInput)
                                       ->toAddressBech32('atoi1qzvhzythy64dzx456ccvus357hvhg77cmqrrw4ukuszprtu9fay5ywp5ncz')
                                       ->message("#iota.php", "transaction test! follow me on Twitter @IOTAphp")
                                       ->run();
```


### Get funds on testnet

Use [faucet client](./004_examples_faucet.md)

Or visit: https://faucet.testnet.chrysalis2.com/


## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
