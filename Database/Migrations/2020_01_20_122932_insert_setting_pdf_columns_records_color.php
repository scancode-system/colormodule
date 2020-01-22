<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Pdf\Repositories\SettingPdfColumnRepository;

class InsertSettingPdfColumnsRecordsColor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        SettingPdfColumnRepository::create(['name' => 'color', 'alias' => 'Cor']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        SettingPdfColumnRepository::deleteByName('color');
    }
}
 