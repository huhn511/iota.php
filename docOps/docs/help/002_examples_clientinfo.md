# Basics examples (Client)

### Include and create a client
```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Getting client health
```php
  echo "Health: " . ($client->health() ? "ok" : "error");
```

### Getting client info
This example will output a json string
```php
  echo $client->info();
```
Each method returns an Object to get the direct parameter
```php
  $info = $client->info();

  echo $info->name;
  echo $info->version;
  echo $info->isHealthy;
  echo $info->networkId;
  echo $info->bech32HRP;
  echo $info->minPoWScore;
  echo $info->messagesPerSecond;
  echo $info->referencedMessagesPerSecond;
  echo $info->referencedRate;
  echo $info->latestMilestoneTimestamp;
  echo $info->latestMilestoneIndex;
  echo $info->confirmedMilestoneIndex;
  echo $info->pruningIndex;
  print_r($info->features);
```
Short example
```php
  echo ($client->info())->name;
```

### Getting tips
```php
  echo $client->tips();
```

## Additional Examples
Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.

