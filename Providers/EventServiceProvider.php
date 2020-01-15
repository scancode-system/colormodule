<?php

namespace Modules\Color\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Product\Events\BeforeImportEvent;
use Modules\Color\Listeners\BeforeImportProductListener;
use Illuminate\Support\Facades\Event;
use Modules\Product\Events\ProductFillablesEvent;
use Modules\Color\Listeners\ProductFillablesListener;

use Modules\Product\Events\ProductFamilyAliasEvent;
use Modules\Color\Listeners\ProductFamilyAliasListener;

class EventServiceProvider extends ServiceProvider 
{

	public function boot() 
	{

	}

	public function register() 
	{
		Event::listen(ProductFillablesEvent::class, ProductFillablesListener::class);
		Event::listen(BeforeImportEvent::class, BeforeImportProductListener::class);
		Event::listen(ProductFamilyAliasEvent::class, ProductFamilyAliasListener::class);
	}

}
