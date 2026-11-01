<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // php artisan migrate  -> runs up()  : creates the students table
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();                       // 1, 2, 3 ... (used in /students/{student})
            $table->string('roll_no')->unique(); // e.g. CS23-07
            $table->string('name');
            $table->string('email')->unique();
            $table->string('department')->default('CSE');
            $table->unsignedTinyInteger('semester')->default(7);
            $table->decimal('cgpa', 4, 2)->nullable();
            $table->timestamps();
        });
    }

    // php artisan migrate:rollback -> runs down() : drops it again
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
