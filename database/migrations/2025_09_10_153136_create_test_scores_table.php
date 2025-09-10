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
        Schema::create("test_scores", function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\Modules\Customer\app\Models\Customer::class,'customer_id')->nullable()->constrained()->nullOnDelete();
            $table->tinyInteger('test_type')->nullable();
            $table->decimal('overall_score')->nullable();
            $table->decimal('listening_score')->nullable();
            $table->decimal('reading_score')->nullable();
            $table->decimal('writing_score')->nullable();
            $table->decimal('speaking_score')->nullable();
            $table->date('test_date')->nullable();
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
        Schema::dropIfExists('test_scores');
    }
};
