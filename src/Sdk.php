<?php
/**
 * Created by PhpStorm.
 * User: webeleven
 * Date: 4/27/18
 * Time: 9:41 AM
 */

namespace Webeleven\ClubeDoVinho\Sdk;


/**
 * Class Sdk
 *
 * @package Webeleven\ClubeDoVinho\Sdk
 */
class Sdk extends \Webeleven\PassportSdk\Sdk
{

	/**
	 * @param $id
	 *
	 * @return mixed|\Psr\Http\Message\ResponseInterface
	 */
	function customerSyncWithExternal ($id)
	{
		return $this->get('api/customer/sync-with-external/' . $id, []);
	}

}