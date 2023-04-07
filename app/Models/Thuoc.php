<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thuoc extends Model
{
    use HasFactory;
    protected $table = "ketquathau";
    // protected $primaryKey = "id";
    // public $timestamps = true;
    // const CREATED_AT ='created_at';
    // const UPDATED_AT ='updated_at';
    protected $fillable = ['stt', 'ten_thuoc', 'hoat_chat', 'ham_luong', 'sdk', 'duong_dung', 'dang_bao_che', 'co_so_san_xuat', 'nuoc_san_xuat', 'quy_cach', 'dvt', 'so_luong', 'don_gia', 'thanh_tien', 'nha_trung_thau', 'nhom_thuoc', 'thoi_gian_thuc_hien', 'so_qd_trung_thau', 'ngay_qd_trung_thau','ten_bv_syt'];
}
 