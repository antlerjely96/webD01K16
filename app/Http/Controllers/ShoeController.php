<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Shoe;
use App\Http\Requests\StoreShoeRequest;
use App\Http\Requests\UpdateShoeRequest;
use App\Models\Type;
use Illuminate\Support\Facades\Redirect;

class ShoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Tạo đối tượng của model
        $obj = new Shoe();
        //Lấy dữ liệu từ DB: Gọi function trong model
        $shoes = $obj->getAllShoes();
        //Gọi view hiển thị danh sách
        return view('shoes.index', [
            'shoes' => $shoes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Lấy brand, type để truyền sang view
        //Tạo đối tượng của brand
        $objBrand = new Brand();
        //Gọi function trong Brand model
        $brands = $objBrand->index();
        //Tạo đối tượng của type
        $objType = new Type();
        //Gọi function trong Type model
        $types = $objType->getAllTypes();
        return view('shoes.create', [
            'brands' => $brands,
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShoeRequest $request)
    {
        //Tạo đối tượng của model
        $shoe = new Shoe();
        //Lấy dữ liệu từ form về
        $shoe->name = $request->name;
        $shoe->description = $request->description;
        $shoe->brand_id = $request->brand_id;
        $shoe->type_id = $request->type_id;
        //Gọi function lưu dữ liệu trong model
        $shoe->createShoe();
        //Quay về danh sách
        return Redirect::route('shoes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shoe $shoe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shoe $shoe)
    {
        //Tạo đối tượng của brand
        $objBrand = new Brand();
        //Gọi function trong Brand model
        $brands = $objBrand->index();
        //Tạo đối tượng của type
        $objType = new Type();
        //Gọi function trong Type model
        $types = $objType->getAllTypes();
        //Gọi view edit
        return view('shoes.edit', [
            'shoe' => $shoe,
            'brands' => $brands,
            'types' => $types
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShoeRequest $request, Shoe $shoe)
    {
        //Lấy dữ liệu trong form
        $shoe->name = $request->name;
        $shoe->description = $request->description;
        $shoe->brand_id = $request->brand_id;
        $shoe->type_id = $request->type_id;
        //Gọi function trong model
        $shoe->updateShoe();
        //Quay về danh sách
        return Redirect::route('shoes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shoe $shoe)
    {
        //Gọi function xóa trong model
        $shoe->deleteShoe();
        //Quay lại danh sách
        return Redirect::route('shoes.index');
    }
}
