# Basics examples (Milestone)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Get milestone

```php
  echo $milestone = $client->milestone($client->info()->latestMilestoneIndex);
  #echo $milestone->messageId;
  #echo $milestone->timestamp;
  #echo $milestone->index;
```

### Get milestone message

```php
  echo $client->message($milestone->messageId);
```

More informations about message [here](002_examples_message.md)


## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
