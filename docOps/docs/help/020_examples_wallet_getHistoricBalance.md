# Examples (Wallet get Historic Balances)

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

### get Historic Balances

```php
  // setup
  $address_0 = $wallet->address();
  // get Historic Balances
  print_r($address_0->getHistoricBalances());

```
---
### Output

```
Array
(
    [0] => Array
        (
            [amount] => 1000000
            [amountMi] => 1mi
            [toAddress] => 60200bad8137a704216e84f8f9acfe65b972d9f4155becb4815282b03cef99fe
            [toAddressBech32] => atoi1qpszqzadsym6wpppd6z037dvlejmjuke7s24hm95s9fg9vpua7vluehe53e
            [isSpent] => 
            [messageId] => 28a8ac278a9ce63c41c5e47842c8f4ca72ed6c38d57bda6823ad7c479a85272f
            [transactionId] => 9af8e14647c64702f383e49e8be17703ca6c62d812f39cf8e857cf1f1030faf9
        )
)

```

---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
