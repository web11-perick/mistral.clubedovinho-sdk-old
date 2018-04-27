<?php
/**
 * Created by PhpStorm.
 * User: webeleven
 * Date: 4/27/18
 * Time: 9:48 AM
 */

namespace Webeleven\ClubeDoVinho\Sdk;

/**
 * Class TokenService
 *
 * @package Webeleven\ClubeDoVinho\Sdk
 */
class TokenService extends \Webeleven\PassportSdk\TokenService
{
	protected $TOKEN_CACHE_KEY = 'clubedovinho.sdk.token';
}