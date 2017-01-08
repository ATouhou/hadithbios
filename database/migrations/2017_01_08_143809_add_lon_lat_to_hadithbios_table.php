<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLonLatToHadithbiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hadithbios', function (Blueprint $table) {
            //
            $table->double('lat')->after('status');
            $table->double('lon')->after('lat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hadithbios', function (Blueprint $table) {
            //
            $table->dropColumn(['lat', 'lon']);
        });
    }
}
