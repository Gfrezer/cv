<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersDropuniqueEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('users', function (Blueprint $table)
        {
            $table->dropUnique('users_email_unique');
            $table->dropUnique('email_verified_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::table('users', function (Blueprint $table)
        {
            $table->unique('email');
            $table->nullable('email');
        });
    }
}