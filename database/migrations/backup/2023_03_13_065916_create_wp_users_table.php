<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWpUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wp_users', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->string('user_login',60)->unique();
            $table->string('user_pass',255)->nullable();
            $table->string('user_nicename',60)->nullable();
            $table->string('user_email',100)->unique();
            $table->string('user_url',100)->nullable();
            $table->dateTime('user_registered')->nullable();
            $table->string('user_activation_key',255)->nullable();
            $table->boolean('user_status')->nullable();
            $table->string('display_name',60)->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('wp_users');
    }
}
