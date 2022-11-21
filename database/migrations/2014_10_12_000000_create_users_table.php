<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->integer('role_id')->unsigned()->nullable()->default(0);
            $table->string('picture', 255)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->char('gender', 1)->nullable()->default('U')->comment('M=Male,F=Female,O=Other,U=Undefine');
            $table->tinyInteger('is_active')->default(0);
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
