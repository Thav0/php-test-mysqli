<?php

require_once('./config/database.php');
require_once('./src/models/RatesModel.php');
require_once('./src/controllers/RatesController.php');

$ratesController = new RatesController(new RatesModel);

$options = [
  'order_by' => $_GET['order_by'] ?? NULL,
  'order' => $_GET['order'] ?? NULL
];

echo $ratesController->rates($options);