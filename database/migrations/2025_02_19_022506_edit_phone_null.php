<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('personnel_details', function (Blueprint $table) {
            //
            $table->string('full_name')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('department')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personnel_details', function (Blueprint $table) {
            //
            $table->string('full_name')->nullable(false)->change();
            $table->string('phone')->nullable(false)->change();
            $table->string('department')->nullable(false)->change();
        });
    }
};
