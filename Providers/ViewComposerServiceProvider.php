<?php

namespace Modules\Color\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Modules\Color\Http\ViewComposers\Loader\Products\Forms\LeftColumnComposer;

class ViewComposerServiceProvider extends ServiceProvider 
{

	public function boot() {
		// products
		View::composer('color::loader.products.forms.left_column', LeftColumnComposer::class);
	}

	public function register() {
        //
	}

}
