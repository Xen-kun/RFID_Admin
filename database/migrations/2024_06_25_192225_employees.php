<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id'); // Employee ID (unsigned)
            $table->text('rfid')->nullable(); // RFID
            $table->string('surname', 30); // Surname
            $table->string('firstname', 30); // Firstname
            $table->string('middlename', 30); // Middlename
            $table->string('ext', 5)->nullable(); // Ext
            $table->string('idnumber', 10); // ID Number
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
