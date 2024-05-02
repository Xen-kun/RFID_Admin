<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoomDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("room_details", function (Blueprint $table) {
            $table->id();
            $table->integer("roo_id");
            $table->integer("faculty_id");
            $table->dateTime("opened_on");
            $table->dateTime("ended_on");
            $table->integer("course_id");
            $table->string("section_name",255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_details');
    }
}
