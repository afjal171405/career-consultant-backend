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
        Schema::create("sms_logs", function (Blueprint $table) {
            $table->id();
            $table->nullableMorphs('user');
            $table->string('type')->nullable();
            $table->string('token')->nullable();
            $table->string('number')->nullable();
            $table->string('message')->nullable();
            $table->string('provider')->nullable();
            $table->boolean('resent')->nullable()->default(0);
            $table->boolean('is_verified')->nullable()->default(0);

            $table->json('request')->nullable();
            $table->json('response')->nullable();
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
        Schema::dropIfExists('sms_logs');
    }
};
