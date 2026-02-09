<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use Illuminate\Support\Facades\Redirect;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* Query Builder
            //Tạo đối tượng của model
            $objBrand = new Brand();
            //Gọi đến function để lấy dữ liệu trong model
            $brands = $objBrand->index();
            //Gui len view
            return view('brands.index', [
                'brands' => $brands
            ]);
        */

        /* QRM Eloquent */
        //Lấy dữ liệu từ DB
        $brands = Brand::all();
        //Gọi đến view
        return view('brands.index', [
            'brands' => $brands
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /* Query Builder
            return view('brands.create');
        */

        /* ORM Eloquent */
        //Gọi đến view form thêm
        return view('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        /* Query Builder
            //Tạo đối tượng model
            $obj = new Brand();
            //Lấy dữ liệu từ form
            $obj->name = $request->name;
            //Gọi function lưu dữ liệu trong model
            $obj->createBrand();
            //Quay về danh sách
            return Redirect::route('brands.index');
        */

        /* ORM Eloquent */
        //Thêm dữ liệu lên DB
        Brand::create([
            'name' => $request->name
        ]);
        //Quay về danh sách
        return Redirect::route('brands.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Brand $brand)
    {
        /* Query Builder
            //Gọi view hiển thị form update
            return view('brands.edit', [
                'brand' => $brand
            ]);
        */

        /* ORM Eloquent */
        //Gọi view hiển thị form edit
        return view('brands.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        /* Query Builder
            //Lấy dữ liệu
            $brand->name = $request->name;
            //Gọi function để update dữ liệu trong model
            $brand->updateBrand();
            //Quay về danh sách
            return Redirect::route('brands.index');
        */

        /* ORM Eloquent */
        //Update dữ liệu
        $brand->update([
            'name' => $request->name
        ]);
        //Quay về danh sách
        return Redirect::route('brands.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brand $brand)
    {
        /* Query Builder
            //Gọi function xóa bản ghi trong db
            $brand->deleteBrand();
            //Quay lại danh sách
            return Redirect::route('brands.index');
        */

        /* ORM Eloquent */
        //Xóa dữ liệu
        $brand->delete();
        //Quay lại danh sách
        return Redirect::route('brands.index');
    }
}
