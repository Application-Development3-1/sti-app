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
            $table->dropForeign('lost_item_author_id_foreign');
            $table->dropColumn('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lost_item', function (Blueprint $table) {
            $table->foreignID('user_id')->constrained('users')->onDelete('cascade');
        });
    }
};
