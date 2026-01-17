<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->string('details_title')->nullable()->after('description');
            $table->longText('details_description')->nullable()->after('details_title');
            $table->string('approach_title')->nullable()->after('details_description');
            $table->longText('approach_description')->nullable()->after('approach_title');
            $table->string('approach_image')->nullable()->after('approach_description');
        });

        Schema::create('service_processes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_processes');
        
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'details_title',
                'details_description',
                'approach_title',
                'approach_description',
                'approach_image',
            ]);
        });
    }
};
