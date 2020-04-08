<?php
/**
 * I'm applying the first principle of SOLID
 * Single Reponsability
 * Intead of creating new method inside RateController
 * I'll do it here
 * Each Controller must only have one responsability
 */
class GenerateRatesController {
  // this variable is scoped in this class only
  private $ratesModel;
  private $currentRates;
  private $newRates;

  /**
   * Dependency Injection
   * Rates Model
   * To use all Rates Model methods
   *
   * @param RatesModel $ratesModel
   */
  public function __construct(RatesModel $ratesModel) {
    $this->ratesModel = $ratesModel;
    $this->get_current_rates();
  }

  /**
   * This will store the previous rate to compare
   * with new generated rates
   *
   * @return void
   */
  private function get_current_rates() {
    $getRates = $this->ratesModel->get_rates();
    while($rate = $getRates->fetch_assoc()) {
      $this->currentRates[] = $rate;
    }
  }

  /**
   * This method will generate random rates in the database
   *
   * @return boolean
   */
  public function generate_random_rates() {
    return $this->ratesModel->generate_rates() ?? false;
  }

}