# Examples (Wallet)

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


### Open address

```php
  $address_0 = $wallet->address();
  $address_1 = $wallet->address(0, 1);
```



### Get informations

```php
  echo "WalletSeed:     " . $wallet->getSeed();
  echo "WalletMnemonic: " . $mnemonic;
```

```php
  echo "AddressPath:    " . $address_0->getPathString();
  echo "AddressBech32:  " . $address_0->getAddressBech32();
  echo "Balance:        " . $address_0->getBalance();

  echo "AddressPath:    " . $address_1->getPathString() . PHP_EOL;
  echo "AddressBech32:  " . $address_1->getAddressBech32() . PHP_EOL;
  echo "Balance:        " . $address_1->getBalance() . PHP_EOL;
```


---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
