<?php

require_once('./config/database.php');
require_once('./src/models/RatesModel.php');
require_once('./src/controllers/GenerateRatesController.php');

$generateRates = new GenerateRatesController(new RatesModel);
$result = $generateRates->generate_random_rates();

echo json_encode($result);