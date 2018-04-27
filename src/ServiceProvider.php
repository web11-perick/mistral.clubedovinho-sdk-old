<?php
/**
 * Created by PhpStorm.
 * User: webeleven
 * Date: 4/27/18
 * Time: 9:42 AM
 */

namespace Webeleven\ClubeDoVinho\Sdk;


use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Webeleven\PassportSdk\TokenService;

class ServiceProvider extends LaravelServiceProvider
{
	/**
	 * @var bool
	 */
	protected $defer = true;

	/**
	 *
	 */
	public function register ()
	{
		$this->app->singleton(Client::class, function ($app) {
			return new Client();
		});
		$this->app->singleton(TokenService::class, function ($app) {
			return new TokenService(
				$app[Client::class],
				env('CLUBEDOVINHO_SDK_ENDPOINT'),
				env('CLUBEDOVINHO_SDK_CLIENT_ID'),
				env('CLUBEDOVINHO_SDK_CLIENT_SECRET')
			);
		});
		$this->app->singleton(Sdk::class, function ($app) {
			return new Sdk(
				env('CLUBEDOVINHO_SDK_ENDPOINT'),
				$app[Client::class],
				$app[TokenService::class]
			);
		});
	}

	/**
	 * @return array
	 */
	public function provides ()
	{
		return [
			Client::class,
			TokenService::class,
			Sdk::class,
		];
	}
}