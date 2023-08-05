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
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('bio');
            $table->string('email')->unique();
            $table->string('phone')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE artists DROP COLUMN id, DROP COLUMN timestamps, DROP COLUMN name, DROP COLUMN bio, DROP COLUMN email, DROP COLUMN phone');
        Schema::dropIfExists('artists');
    }
};
