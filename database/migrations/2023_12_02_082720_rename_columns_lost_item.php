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
            $table->renameColumn('What','what');
            $table->renameColumn('When','when');
            $table->renameColumn('Where','where');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lost_item', function (Blueprint $table) {
            $table->renameColumn('what','What');
            $table->renameColumn('when','When');
            $table->renameColumn('where','Where');
        });
    }
};
