# Geis Group Shipment  SOAP PHP client

This project provides a SOAP client for the Geis Group Shipment client API

More info can be found visiting [https://www.geis-group.cz/en](https://www.geis-group.cz/en) 

## Installing

The recommended way to install `goetas-webservices/geis-group-cz-client` is using [Composer](https://getcomposer.org/), just run:

```yaml
composer require goetas-webservices/geis-group-cz-client
```
## Features

- Pure PHP, no dependencies on `ext-soap`
- Complete IDE type hinting support
- PSR-7 HTTP messaging compatible
- Multi HTTP client (guzzle, buzz, curl, react)
- No WSDL/XSD parsing on production
- Extensible (event listeners support)

## Usage

```php
<?php

use GoetasWebservices\SoapServices\SoapClient\ClientFactory;
use GoetasWebservices\SoapServices\SoapClient\Builder\SoapContainerBuilder;
use GoetasWebservices\Client\GeisGroupCz\SoapContainer;
use GoetasWebservices\Client\GeisGroupCz\SoapStubs\IGService;

require __DIR__ . '/vendor/autoload.php';

// project initialization
$container = new SoapContainer();

// use this when cloning this repository and keeping the directory, comment it when including goetas-webservices/geis-group-cz-client via composer
$serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container)->build();

// uncomment this when including goetas-webservices/geis-group-cz-client via composer
// $serializer = SoapContainerBuilder::createSerializerBuilderFromContainer($container, null, __DIR__ . '/vendor/goetas-webservices/geis-group-cz-client')->build();

$metadata = $container->get('goetas_webservices.soap_client.metadata_reader');
$factory = new ClientFactory($metadata, $serializer);

/**
 * @var $client IGService
 */
$client = $factory->getClient('https://gclient.geis.cz/GService/GService.svc?singlewsdl','BasicHttpBinding_IGService', 'GService');


$result = $client->shipmentDetail(/* put here your params */);

var_dump($result);

```

## Note 

The code in this project is provided under the 
[MIT](https://opensource.org/licenses/MIT) license. 
For professional support 
contact [goetas@gmail.com](mailto:goetas@gmail.com) 
or visit [https://www.goetas.com](https://www.goetas.com)
