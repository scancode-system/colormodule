<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Variation\Repositories\VariationRepository;

class InsertVariationRecordColorModule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        VariationRepository::create(['alias' => 'Cor', 'table' => 'color', 'field' => 'name']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        VariationRepository::deleteByAlias('Cor');
    }
}
