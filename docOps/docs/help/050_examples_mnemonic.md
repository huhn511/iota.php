# Advanced Examples (Mnemonic)

### Include

```php
<?php
  // include iota lib
  require_once("autoload.php");
```

### Create mnemonic

```php
  $words     = "giant dynamic museum toddler six deny defense ostrich bomb access mercy blood explain muscle shoot shallow glad autumn author calm heavy hawk abuse rally";
  $_mnemonic = (new IOTA\Crypto\Bip39())->reverseMnemonic($words);
```

### Creating random mnemonic

```php
  $mnemonic = (new IOTA\Crypto\Bip39())->randomMnemonic();
  #echo \implode(" ", $mnemonic->words)
```

### Get seed from mnemonic

```php
  echo $mnemonic->__toSeed();
```

### Create ed25519Seed

```php
  $ed25519Seed = new IOTA\Type\ed25519Seed(((new IOTA\Crypto\Bip39())->reverseMnemonic($words))->__toSeed());
```

---

### Create random mnemonic over IOTA\Waller

```php
  $mnemonic = IOTA\Wallet::createMnemonic();
```

---

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
