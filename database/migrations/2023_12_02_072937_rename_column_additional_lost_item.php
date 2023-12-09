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
        Schema::table('lost_item', function (Blueprint $table) {
            $table->renameColumn('Add Information','add_information');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lost_item', function (Blueprint $table) {
            $table->renameColumn('add_information','Add Information');
        });
    }
};
