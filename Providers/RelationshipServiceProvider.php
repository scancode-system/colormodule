<?php

namespace Modules\Color\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;

use Modules\Product\Entities\Product;
use Modules\Color\Entities\Color;


class RelationshipServiceProvider extends ServiceProvider
{


    public function boot()
    {
        Product::addDynamicRelation('color', function (Product $product) {
            return $product->belongsTo(Color::class, 'color_id');
        });

    }

    public function register()
    {

    }

}
