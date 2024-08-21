<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners_models', function (Blueprint $table) {
            $table->increments('id');
			$table->string('logo')->nullable();
			$table->string('category')->nullable();
			$table->string('status')->default(\App\Models\PartnersModel::PARTNER_ENABLE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners_models');
    }
}
