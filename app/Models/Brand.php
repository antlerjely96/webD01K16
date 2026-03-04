<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Brand extends Model
{
    /** @use HasFactory<\Database\Factories\BrandFactory> */
    use HasFactory;

    //Định nghĩa model liên kết đến bảng nào
    protected $table = 'brands';
    //Định nghĩa khóa chính
    protected $primaryKey = 'id';
    //Định nghĩa những cột được phép chỉnh sửa
    protected $fillable = ['name'];
    //Tắt timestamp (created_at, updated_at)
    public $timestamps = false;

    /* Query Builder */
        //Function lấy dữ liệu
        public function index(): \Illuminate\Support\Collection
        {
            //Query builder lấy dữ liệu
            $brands = DB::table('brands')->get();
            //Trả dữ liệu về cho controller
            return $brands;
        }

        //Function lưu dữ liệu lên db
        public function createBrand(): void
        {
            //Query builder lưu dữ liệu lên db
            DB::table('brands')->insert([
                'name' => $this->name
            ]);
        }

        //Function update dữ liệu trên db
        public function updateBrand(): void
        {
            //Query builder update dữ liệu
            DB::table('brands')
                ->where('id', $this->id)
                ->update([
                   'name' => $this->name
                ]);
        }

        //Function xóa dữ liệu trên db
        public function deleteBrand(): void
        {
            //query builder xóa dữ liệu
            DB::table('brands')
                ->where('id', $this->id)
                ->delete();
        }
}
