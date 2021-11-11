<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nameEN');
            $table->string('nameAR');
            $table->string('address');
            $table->string('mobile');
            $table->string('email');
            $table->string('branch')->null();
            $table->string('titleJob');
            $table->string('socialContact');
            $table->string('dateStart');
            $table->string('section')->null();
            $table->string('supervisor')->null();
            $table->string('nationalID');
            $table->string('steteAMP');
            $table->string('requiremint');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
