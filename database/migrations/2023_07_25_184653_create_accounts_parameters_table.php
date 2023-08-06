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
        Schema::create('accounts_parameters', function (Blueprint $table) {
            $table->id();
            $table->string('parameter_name', 250)->nullable();
            $table->bigInteger('account_id')->nullable();
            $table->string('ledger_name', 250)->nullable();
            $table->decimal('numeric_value', 18, 0)->nullable();
            $table->string('transaction_type', 50)->nullable();
            $table->string('description', 500)->nullable();
            $table->bigInteger('station_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts_parameters');
    }
};
