# Basics examples (Message)

### Include and create a client

```php
<?php
  // include iota lib
  require_once("autoload.php");
  // create client
  $client = new IOTA\Client\SingleNodeClient();
```

### Send message

```php
  echo $client->messageSubmit(new IOTA\Api\v1\PayloadIndexation('#iota.php', 'message test! follow me on Twitter @IOTAphp'));
```

### Get message

```php
  echo $client->message($result->messageId);
```

### Fetch message

```php
  $found = $client->messagesFind('#iota.php');
  if(count($found->messageIds) > 0) {
    echo "Messages Found: " . count($found->messageIds) . PHP_EOL;
    $lastData = $client->message(end($found->messageIds));
    echo $lastData->payload->data;
  }
  else {
    echo "No Results!" . LF;
  }
```

## Additional Examples

Please find other examples in the [examples](https://github.com/iota-community/iota.php/tree/main/examples) folder.
