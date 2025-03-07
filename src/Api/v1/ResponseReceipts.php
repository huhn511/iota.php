<?php namespace IOTA\Api\v1;

use IOTA\Models\AbstractApiResponse;

/**
 * Class ResponseReceipts
 *
 * @package      IOTA\Api\v1
 * @author       StefanBraun
 * @copyright    Copyright (c) 2021, StefanBraun
 */
class ResponseReceipts extends AbstractApiResponse {
  /**
   * @var array
   */
  public array $receipts;

  /**
   *
   */
  protected function parse(): void {
    $this->defaultParse();
  }
}