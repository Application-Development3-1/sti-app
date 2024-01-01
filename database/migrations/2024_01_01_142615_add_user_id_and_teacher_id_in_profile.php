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
        Schema::table('profile', function (Blueprint $table) {
            $table->unsignedBigInteger('teacher_id')->nullable()->after('id');
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->nullable()->after('teacher_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile', function (Blueprint $table) {
            $table->dropForeign('profile_user_id_foreign');
            $table->dropColumn('user_id');

            $table->dropForeign('profile_teacher_id_foreign');
            $table->dropColumn('teacher_id');
        });
    }
};
