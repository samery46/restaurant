<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductCreateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Str;

class ProductController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ProductDataTable $dataTable)
    {
        return $dataTable->render('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductCreateRequest $request)
    {
        // dd($request->all());
        /** Handle image file */
        $imagePath = $this->uploadImage($request, 'image');

        $product = new Product();
        $product->image = $imagePath;
        $product->name = $request->name; // tuffle fries
        $product->slug = Str::slug($request->name); //tuffle-fries
        $product->

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
