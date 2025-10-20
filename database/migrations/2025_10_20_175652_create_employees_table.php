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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('employee_id')->nullable();
            $table->string('name');
            $table->string('password');
            $table->string('email');
            $table->string('mobile_number');
            $table->foreignId('lib_department_id');
            $table->foreignId('lib_designation_id');
            $table->string('image')->nullable();
            $table->string('extension')->nullable();
            $table->string('setup_done',5)->default('no');
            $table->string('is_secret',5)->default('no');
            $table->string('reset_code',7)->nullable();
            $table->dateTime('sent_at')->nullable();
            $table->json('user_access')->nullable();
            $table->string('status',7)->default('Draft');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
