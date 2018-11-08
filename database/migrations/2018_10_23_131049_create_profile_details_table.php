<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 16);
            $table->string('placebirth', 16);
            $table->date('datebirth', 12);
            $table->char('gender', 1);
            $table->string('email');
            $table->string('address', 64)->nullable();
            $table->string('motto', 128)->nullable();
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
        Schema::dropIfExists('profile_details');
    }
}
