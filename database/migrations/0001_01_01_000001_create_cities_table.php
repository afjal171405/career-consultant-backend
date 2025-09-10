<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use modules\Admin\app\Models\District;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("cities", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("name_np")->nullable();
            $table->foreignIdFor(\modules\Admin\app\Models\District::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string("code")->nullable();
            $table->tinyInteger("status")->default(1);
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
        Schema::dropIfExists('cities');
    }
};
