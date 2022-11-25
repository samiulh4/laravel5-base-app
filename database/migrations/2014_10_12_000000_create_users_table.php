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
            $table->integer('role_id')->unsigned()->nullable()->default(0);
            $table->string('name');
            $table->string('email')->unique();
            $table->date('date_of_birth')->nullable();
            $table->char('gender', 1)->nullable()->default('U')->comment('M=Male,F=Female,O=Other,U=Undefine');
            $table->string('picture', 255)->nullable();
            $table->string('country_code', 3)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('national_id', 100)->nullable();
            $table->string('passport_no', 100)->nullable();
            $table->string('password');
            $table->tinyInteger('is_active')->nullable()->default(0);
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
        Schema::dropIfExists('users');
    }
}
