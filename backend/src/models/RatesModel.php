<?php

class RatesModel extends Database{

  /**
   * Get all rates data
   *
   * @return object mysqli_result
   */
  public function get_rates($orderBy = NULL) {
    $data = $this->mysqli->query("SELECT
    rates.c_rate,
    rates.l_rate,
    companies.name,
    companies.cid
    FROM rates
    LEFT JOIN companies
    ON companies.cid = rates.cid
    $orderBy
    ");

    return $data;
  }

  /**
   * Generates random rates for each company
   * and Updates it
   *
   * @return void
   */
  public function generate_rates() {
    $rates = $this->get_rates();

    while($row = $rates->fetch_assoc()) {

      // Make a new random deviation.
      $deviation = rand(-1000,1000) / 100 * 0.85;

      // Rates less than 0 are not possible. So we make a positive deviation.
      if (($row['c_rate'] + $deviation) < 0) {
        $deviation = rand(0,1000) / 100 * 0.85;
      }

      // New rate.
      $new_rate = $row['c_rate'] + $deviation;

      // Make the query.
      $result = $this->mysqli->query("UPDATE rates SET " .
      "c_rate = " . $new_rate . ", " .
      "l_rate = " . $row['c_rate'] .
      " WHERE cid = '" . $row['cid'] . "'");

      return $result;
    }
  }

}