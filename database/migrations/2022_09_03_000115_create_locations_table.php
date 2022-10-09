<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Kalnoy\Nestedset\NestedSet;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('slug', 191);
            $table->string('iso_code_3', 3)->nullable();
            $table->string('iso_code_2', 3)->nullable();
            $table->bigInteger('currency_id')->nullable();
            $table->foreign('currency_id')->references('currencies')->on('id')->onDelete('CASCADE');
            $table->tinyInteger('is_active')->default(0);
            $table->text('title');
            $table->timestamps();
            $table->nestedSet();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
