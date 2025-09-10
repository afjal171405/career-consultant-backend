<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("financial_profiles", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\Modules\Customer\app\Models\Customer::class,'customer_id')->nullable()->constrained()->nullOnDelete();
            $table->string('annual_income')->nullable();
            $table->string('available_funds')->nullable();
            // Default columns
            $table->json('extra')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financial_profiles');
    }
};
