<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->timestamps();
            $table->string('name');
            $table->boolean('blocked');
            $table->string('surname');
            $table->string('phone');
            $table->string('email');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
