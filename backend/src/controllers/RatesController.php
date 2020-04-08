<?php

class RatesController {
  // this variable is scoped in this class only
  private $ratesModel;

  /**
   * Dependency Injection
   * Rates Model
   * To use all Rates Model methods
   *
   * @param RatesModel $ratesModel
   */
  public function __construct(RatesModel $ratesModel) {
    $this->ratesModel = $ratesModel;
  }

  /**
   * This method will return all rates data with sorting
   * This will be consumed by Frontend Client
   * I choosed ReactJS
   *
   * @param array $params
   * @return json
   */
  public function rates(array $params = []) {

    $orderBy =  is_null($params['order_by']) || is_null($params['order']) ? NULL : " ORDER BY " . $params['order_by'] . " " . $params['order'] . " ";

    $getRates = $this->ratesModel->get_rates($orderBy);
    while($rate = $getRates->fetch_assoc()) {
      $data[] = $rate;
    }
    return json_encode($data);
  }

}