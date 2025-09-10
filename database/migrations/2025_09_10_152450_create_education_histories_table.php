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
        Schema::create("education_histories", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\Modules\Customer\app\Models\Customer::class,'customer_id')->nullable()->constrained()->nullOnDelete();
            $table->string('level')->nullable();
            $table->string('board_university')->nullable();
            $table->string('institute')->nullable();
            $table->decimal('gpa')->nullable();
            $table->integer('backlogs')->nullable();
            $table->year('year_of_completion')->nullable();
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
        Schema::dropIfExists('education_histories');
    }
};
