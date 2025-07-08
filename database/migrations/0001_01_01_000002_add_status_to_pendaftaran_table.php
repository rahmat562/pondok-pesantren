<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToPendaftaranTable extends Migration
{
    public function up()
    {
        Schema::table('pendaftaran', function (Blueprint $table) {
            $table->string('status')->default('pending')->after('email');
        });
    }

    public function down()
    {
        Schema::table('pendaftaran', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
}
