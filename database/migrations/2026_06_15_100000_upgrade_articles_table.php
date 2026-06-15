<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('status', 20)->default('draft')->after('author');
            $table->boolean('featured')->default(false)->after('status');
            $table->timestamp('scheduled_at')->nullable()->after('published_at');
            $table->unsignedSmallInteger('reading_time')->nullable()->after('content');
            $table->unsignedInteger('views_count')->default(0)->after('reading_time');
            $table->string('meta_title', 70)->nullable()->after('views_count');
            $table->string('meta_description', 160)->nullable()->after('meta_title');
            $table->json('tags')->nullable()->after('meta_description');
            $table->string('cover_image_alt', 125)->nullable()->after('cover_image');
            $table->json('gallery')->nullable()->after('cover_image_alt');
        });

        // Migrer le booléen published → status
        DB::table('articles')->where('published', true)->update(['status' => 'published']);
        DB::table('articles')->where('published', false)->update(['status' => 'draft']);

        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('published');
        });
    }

    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->boolean('published')->default(false)->after('author');
        });

        DB::table('articles')->where('status', 'published')->update(['published' => true]);

        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn([
                'status', 'featured', 'scheduled_at', 'reading_time',
                'views_count', 'meta_title', 'meta_description',
                'tags', 'cover_image_alt', 'gallery',
            ]);
        });
    }
};
