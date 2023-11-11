<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsNursesTable extends Migration
{
    public function up()
    {
        Schema::create('doctors_nurses', function (Blueprint $table) {
            $table->id();
            $table->string('name'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('doctors_nurses');
    }
}

