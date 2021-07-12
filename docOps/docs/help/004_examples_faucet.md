# Examples (Faucet Client)

Testnet tokens can only be used for testing within the chrysalis testnet
> Please do not claim tokens if you do not need them and return tokens you do not need. Testnet tokens have no value!

### Include and create a faucet client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\FaucetClient();
```

## get

```php
  echo $client->get('atoi1qpszqzadsym6wpppd6z037dvlejmjuke7s24hm95s9fg9vpua7vluehe53e');
```

## send

```php
  $seedInput = "giant dynamic museum toddler six deny defense ostrich bomb access mercy blood explain muscle shoot shallow glad autumn author calm heavy hawk abuse rally";
  echo $client->send($seedInput, 0, 1000000);
```

---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
