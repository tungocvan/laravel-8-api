<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {           
            $table->id();
            $table->string('name');
            $table->string('email',100)->unique();            
            $table->string('password',100);       
            $table->boolean('is_active')->default(true);        
            $table->timestamp('email_verified_at')->nullable();                        
            $table->string('provider_id')->nullable();
            $table->string('provider')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
