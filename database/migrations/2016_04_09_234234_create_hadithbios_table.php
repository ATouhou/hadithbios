<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHadithbiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // hadithbios table creation
        Schema::create('hadithbios', function (Blueprint $table) {
            $table->increments('id');
            //$table->string('name',75)->unique();
            $table->string('name', 100);
            $table->date('date_of_birth');
            $table->date('date_of_death');
            $table->text('comments')->nullable();
            $table->integer('status');
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
        //
    }
}
