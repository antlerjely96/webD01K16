<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Shoe extends Model
{
    /** @use HasFactory<\Database\Factories\ShoeFactory> */
    use HasFactory;

    //Function lấy danh sách
    public function getAllShoes(): \Illuminate\Support\Collection
    {
        //Query builder lấy toàn bộ dữ liệu
        $shoes = DB::table('shoes')
            ->join('types', 'shoes.type_id', '=', 'types.id')
            ->join('brands', 'shoes.brand_id', '=', 'brands.id')
            ->select('shoes.*', 'types.name AS type_name', 'brands.name AS brand_name')
            ->get();
        return $shoes;
    }

    //Function lưu dữ liệu
    public function createShoe(): void
    {
        //query builder lưu dữ liệu
        DB::table("shoes")->insert([
            'name' => $this->name,
            'description' => $this->description,
            'brand_id' => $this->brand_id,
            'type_id' => $this->type_id
        ]);
    }

    //function update dữ liệu
    public function updateShoe(): void
    {
        //query builder update dữ liệu
        DB::table('shoes')
            ->where('id', $this->id)
            ->update([
                'name' => $this->name,
                'description' => $this->description,
                'brand_id' => $this->brand_id,
                'type_id' => $this->type_id
            ]);
    }

    //Function xóa dữ liệu
    public function deleteShoe(): void
    {
        //query builder xóa dữ liệu
        DB::table("shoes")
            ->where('id', $this->id)
            ->delete();
    }
}
