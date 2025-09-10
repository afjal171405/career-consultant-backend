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
        Schema::create("customer_profiles", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\modules\Customer\app\Models\Customer::class,'customer_id')->nullable()->constrained()->nullOnDelete();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->foreignIdFor(\Modules\Admin\app\Models\Country::class,'nationality')->nullable()->constrained()->nullOnDelete();
            $table->string('current_city')->nullable();

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
        Schema::dropIfExists('customer_profiles');
    }
};
