<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('guests', function (Blueprint $table) {
        $table->string('phone')->nullable(); // Add the 'phone' column
    });
}

public function down()
{
    Schema::table('guests', function (Blueprint $table) {
        $table->dropColumn('phone'); // Drop the 'phone' column if the migration is rolled back
    });
}

};
