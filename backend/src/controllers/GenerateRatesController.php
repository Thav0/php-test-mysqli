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
   * This method will generate random rates in the database
   *
   * @return boolean
   */
  public function generate_random_rates() {
    return $this->ratesModel->generate_rates() ?? false;
  }

}