<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('hourly_rate',100);
            $table->unsignedSmallInteger('gender');
            $table->unsignedBigInteger('state_id');
            $table->unsignedBigInteger('city_id');
            $table->string('address');
            $table->string('image')->nullable();
            $table->string('intro_video')->nullable();
            $table->string('tell');
            $table->text('intro');
            $table->text('skills')->nullable();
            $table->string('education');
            $table->date('birth');
            $table->decimal('lat',11,8)->nullable();
            $table->decimal('lng',11,8)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
