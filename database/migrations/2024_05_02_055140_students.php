<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("students", function (Blueprint $table) {
            $table->id();
            $table->integer("stud_num");
            $table->timestamp("time_in");
            $table->timestamp("time_out");
            $table->integer("room_det_id");
            $table->unsignedInteger("student_id");
            $table->string("student_number", 15);
            $table->string("surname", 30);
            $table->string("firstname", 30);
            $table->string("middlename", 30);
            $table->string("ext", 10)->nullable();
            $table->string("email", 100);
            $table->unsignedInteger("degree_id");
            $table->unsignedInteger("curricula_id");
            $table->unsignedInteger("entrance_id");
            $table->text("rfid")->nullable();
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
        Schema::dropIfExists('students');
    }
}
