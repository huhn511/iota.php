# Examples (API)

### Include and create a SingleNodeClient
```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

## node
```php
  echo $client->info();
  echo $client->health();
```
## tangle
```php
  echo $client->tips() . LF;
```
## messages
```php
  echo $client->message((string)$messageId);
  echo $client->messagesFind((string) $index);
  echo $client->messageMetadata((string)$messageId);
  echo $client->messageChildren((string)$messageId);
  echo $client->messagesRaw((string)$messageId);
  echo $client->messageSubmit((\IOTA\Api\v1\RequestSubmitMessage) $object);
```
## milestones
```php
  echo $client->milestone((string) $index);
  echo $client->milestoneUtxoChanges((string) $index);
```
## peers
```php
  echo $client->peers();
  echo $client->peer((string) $peerId);
```
## utxo
```php
  echo $client->output((string) $outputId);  
  echo $client->addresses((string) $addressBech32);
  echo $client->addressesOutput((string) $addressBech32);
  echo $client->addressEd25519((string) $addressEd25519);
  echo $client->addressesed25519Output((string) $addressEd25519);
  echo $client->receipts();
  echo $client->treasury();
```


## Additional Examples
Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
