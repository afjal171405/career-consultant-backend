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
        Schema::create("offices", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->foreignIdFor(\modules\Admin\app\Models\Office::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\modules\Admin\app\Models\Country::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\modules\Admin\app\Models\Province::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\modules\Admin\app\Models\District::class)->nullable()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\modules\Admin\app\Models\City::class)->nullable()->constrained()->cascadeOnDelete();
            $table->string('address')->nullable();
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('offices');
    }
};
