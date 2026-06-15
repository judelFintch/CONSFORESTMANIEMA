<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('video_url', 500)->nullable()->after('gallery');
            $table->string('video_position', 10)->default('top')->after('video_url'); // top | bottom
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn(['video_url', 'video_position']);
        });
    }
};
