<?php

function update_rates() {
  // Make a new DB connection.
  $link = mysqli_connect(DB_HOST, DB_USER, DB_PW, DB_NAME); # Insert DB info here.
  // mysqli_select_db($link,''); # Insert databasename here.

  // Fetch all the rates.
  $result = mysqli_query($link,"SELECT * FROM rates");

  // Loop through the rates and update them.
  while ($row = mysqli_fetch_array($result)) {
    // Make a new random deviation.
    $deviation = rand(-1000,1000) / 100 * 0.85;

    die($row);

    // Rates less than 0 are not possible. So we make a positive deviation.
    if (($row['c_rate'] + $deviation) < 0) {
      $deviation = rand(0,1000) / 100 * 0.85;
    }

    // New rate.
    $new_rate = $row['c_rate'] + $deviation;

    // Make the query.
    $query = "UPDATE rates SET " .
    "c_rate = " . $new_rate . ", " .
    "l_rate = " . $row['c_rate'] .
    " WHERE cid = '" . $row['cid'] . "'";

    mysqli_query($link,$query);
  }

  // Close the DB connection.
  mysqli_close($link);
}
