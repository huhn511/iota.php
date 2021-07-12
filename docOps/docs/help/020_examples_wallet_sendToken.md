# Examples (Wallet sendToken)

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

### Search

```php
  // setup
  $address_0 = $wallet->address();
  $address_1 = $wallet->address(0, 1);
  $amount   = 1000000;
  // send Tokens
  echo "#--- send" . PHP_EOL;
  echo "#    from: " . $address_0->getAddressBech32() . " | balance: " . $address_0->getBalance() . PHP_EOL;
  echo "#    to:   " . $address_1->getAddressBech32() . " | balance: " . $address_1->getBalance() . PHP_EOL;
  echo "#    result: " .  $address_0->send($address_1->getAddressBech32(), $amount) . PHP_EOL;
  // send Tokens back ;-)
  echo "#--- send Tokens back" . PHP_EOL;
  echo "#    from:   " . $address_1->getAddressBech32() . " | balance: " . $address_1->getBalance() . PHP_EOL;
  echo "#    to:     " . $address_0->getAddressBech32() . " | balance: " . $address_0->getBalance() . PHP_EOL;
  echo "#    result: " . $address_1->send($address_0->getAddressBech32(), $amount) . PHP_EOL;
  // check balance
  echo "#--- check" . PHP_EOL;
  echo "#    Address 0: " . $address_0->getAddressBech32() . " | balance: " . $address_0->getBalance() . PHP_EOL;
  echo "#    Address 1: " . $address_1->getAddressBech32() . " | balance: " . $address_1->getBalance() . PHP_EOL;

```
---
### Output

```
#--- send
#    from: atoi1qpszqzadsym6wpppd6z037dvlejmjuke7s24hm95s9fg9vpua7vluehe53e | balance: 81000000
#    to:   atoi1qzvhzythy64dzx456ccvus357hvhg77cmqrrw4ukuszprtu9fay5ywp5ncz | balance: 234000000
#    result: 5b75275342eeecb781985890e4fc404d4aa1800051532cc92a49de06968cb0f3:included
#--- send Tokens back
#    from:   atoi1qzvhzythy64dzx456ccvus357hvhg77cmqrrw4ukuszprtu9fay5ywp5ncz | balance: 80000000
#    to:     atoi1qpszqzadsym6wpppd6z037dvlejmjuke7s24hm95s9fg9vpua7vluehe53e | balance: 235000000
#    result: 25e380662a0030c0f4380933f2b46d20816058f31c6101a93cb95272009dd34e:included
#--- check
#    Address 0: atoi1qpszqzadsym6wpppd6z037dvlejmjuke7s24hm95s9fg9vpua7vluehe53e | balance: 81000000
#    Address 1: atoi1qzvhzythy64dzx456ccvus357hvhg77cmqrrw4ukuszprtu9fay5ywp5ncz | balance: 234000000
```

---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
