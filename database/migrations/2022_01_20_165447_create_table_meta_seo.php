<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMetaSeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_seo', function (Blueprint $table) {
            $table->id();
            $table->string('meta_keywords')->default('Vui Lòng Điền Thông Tin')->nullable();
            $table->string('meta_image')->default('Vui Lòng Điền Thông Tin')->nullable();
            $table->string('phone_number')->default('Vui Lòng Điền Thông Tin')->nullable();
            $table->string('address')->default('Vui Lòng Điền Thông Tin')->nullable();
            $table->string('email')->default('Vui Lòng Điền Thông Tin')->nullable();
            $table->text('meta_desc')->default('Vui Lòng Điền Thông Tin')->nullable();
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
        Schema::dropIfExists('meta_seo');
    }
}
