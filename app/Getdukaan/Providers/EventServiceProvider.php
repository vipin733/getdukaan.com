<?php namespace Getdukaan\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider{

	public function register()
	{
		$this->app['events']->listen('Getdukaan.*', 'Getdukaan\Handlers\EmailNotifier');
	}
}