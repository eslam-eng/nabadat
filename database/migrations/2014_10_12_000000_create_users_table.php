<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyText('phone')->unique();
            $table->tinyInteger('type')->default(\App\Models\User::CUSTOMERTYPE);
            $table->foreignIdFor(\App\Models\Location::class);
            $table->timestamp('last_login')->nullable();
            $table->date('date_of_birth');
            $table->boolean('is_active')->default(\App\Models\User::USERACTIVE);
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
        Schema::dropIfExists('users');
    }
}
