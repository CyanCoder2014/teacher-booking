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
            $table->string('subject');
            $table->string('type')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('city')->nullable();
            $table->string('image')->nullable();
            $table->string('intro_video')->nullable();
            $table->string('tell');
            $table->text('intro')->nullable();;
            $table->text('availablity')->nullable();;
            $table->string('education')->nullable();
            $table->string('languages')->nullable();
            $table->decimal('lat',11,8)->nullable();
            $table->decimal('lng',11,8)->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');

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
