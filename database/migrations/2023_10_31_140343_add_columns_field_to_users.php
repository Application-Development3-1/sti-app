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
        Schema::table('users', function (Blueprint $table) {
            
                $table->string('last_name')->nullable()->after('first_name');
                $table->string('middle_name')->nullable()->after('last_name');
                $table->string('course')->nullable()->after('middle_name');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('last_name');
            $table->dropColumn('middle_name');
            $table->dropColumn('course');

        });
    }
};
