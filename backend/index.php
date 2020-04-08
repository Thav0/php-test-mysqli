<?php

require_once('./config/database.php');
require_once('./src/utils/update_function.php');

require_once('./src/models/RatesModel.php');

$teste = new RatesModel();
// var_dump($teste->get_rates());
$teste->update_rates();

die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Company</th>
              <th>Rate</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</body>
</html>