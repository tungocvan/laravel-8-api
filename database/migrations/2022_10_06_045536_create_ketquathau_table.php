<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetquathauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketquathau', function (Blueprint $table) {
            $table->id();            
            $table->string('stt')->nullable();
            $table->text('ten_thuoc')->nullable();
            $table->text('hoat_chat')->nullable();
            $table->text('ham_luong')->nullable();
            $table->text('sdk')->nullable();
            $table->text('duong_dung')->nullable();
            $table->text('dang_bao_che')->nullable();
            $table->text('co_so_san_xuat')->nullable();
            $table->text('nuoc_san_xuat')->nullable();
            $table->text('quy_cach')->nullable();
            $table->string('dvt')->nullable();
            $table->string('so_luong')->nullable();;
            $table->string('don_gia')->nullable();;
            $table->string('thanh_tien')->nullable();;
            $table->text('nha_trung_thau')->nullable();
            $table->string('nhom_thuoc')->nullable();
            $table->string('thoi_gian_thuc_hien')->nullable();
            $table->text('so_qd_trung_thau')->nullable();            
            $table->string('ngay_qd_trung_thau')->nullable();
            $table->text('ten_bv_syt')->nullable();
//            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ketquathau');
    }
}
