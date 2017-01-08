<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('facebook_id');
        });
    }

    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('facebook_id');
        });
    }
}
