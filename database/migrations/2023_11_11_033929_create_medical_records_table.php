<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('doctor_nurse_id')->constrained('doctors_nurses');
            $table->text('symptoms');
            $table->text('lab_tests')->nullable();
            $table->text('medical_condition_diagnosed');
            $table->text('treatment_given');
            $table->string('outcome'); // "Admitted" or "Home"
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medical_records');
    }
}

