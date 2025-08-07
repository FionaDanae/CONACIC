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
        Schema::table('users', function (Blueprint $table) {
            $table->string('country')->nullable()->after('email_verified_at');
            $table->string('state')->nullable()->after('country');
            $table->string('phone')->nullable()->after('state');
            $table->string('role')->nullable()->after('phone');
            $table->string('academic_degree')->nullable()->after('role');
            $table->string('institution')->nullable()->after('academic_degree');
            $table->string('other_institution')->nullable()->after('institution');
            $table->string('matricula')->nullable()->after('other_institution');
            $table->string('faculty')->nullable()->after('matricula');
            $table->string('how_found')->nullable()->after('faculty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'country',
                'state',
                'phone',
                'role',
                'academic_degree',
                'institution',
                'other_institution',
                'matricula',
                'faculty',
                'how_found'
            ]);
        });
    }
};