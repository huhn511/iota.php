# Examples (Wallet searchAddress)

### Include

```php
<?php
  // include iota lib
  require_once("autoload.php");
```

### Create new mnemonic

```php
  $mnemonic = new \IOTA\Crypto\Mnemonic(IOTA\Wallet::createMnemonic());
```

or

### Use exist mnemonic

```php
  $mnemonic = new \IOTA\Crypto\Mnemonic('giant dynamic museum toddler six deny defense ostrich bomb access mercy blood explain muscle shoot shallow glad autumn author calm heavy hawk abuse rally');
```

### Open wallet

```php
  $wallet    = new \IOTA\Wallet($mnemonic);
```

### Seach

```php
  $found = $wallet->searchAddresses(5,5, false);
  print_r($found);
```

---
### Output

```
Array
(
    [0] => Array
        (
            [path] => m/44'/4218'/0'/0'/0'
            [addressEd25519] => 60200bad8137a704216e84f8f9acfe65b972d9f4155becb4815282b03cef99fe
            [addressBech32] => atoi1qpszqzadsym6wpppd6z037dvlejmjuke7s24hm95s9fg9vpua7vluehe53e
            [balance] => 81000000
        )

    [1] => Array
        (
            [path] => m/44'/4218'/0'/0'/1'
            [addressEd25519] => 9971117726aad11ab4d630ce4234f5d9747bd8d806375796e40411af854f4942
            [addressBech32] => atoi1qzvhzythy64dzx456ccvus357hvhg77cmqrrw4ukuszprtu9fay5ywp5ncz
            [balance] => 234000000
        )

)
```

---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
