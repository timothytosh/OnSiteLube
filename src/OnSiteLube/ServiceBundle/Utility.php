<?php

namespace OnSiteLube\ServiceBundle;


/**
 * Class Utility
 * @package OnSiteLube\ServiceBundle
 */
class Utility {


  /**
   * @param $input
   *
   * @return mixed|string
   */
  public static function cleanseKendoUIJSON($input) {
    $request = $input;
    $request = preg_replace("/%u([0-9a-f]{3,4})/i", "&#x\\1;", urldecode($request));
    $request = html_entity_decode($request, null, 'UTF-8');
    return $request;
  }
} 