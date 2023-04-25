<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    public function product_details($slug)
    {
        $product =
            DB::table('products')
            ->select('products.*', 'categories.*')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('status', $slug)
            ->first();
        $related_products = Product::where('category_id', $product->category_id)->where('status', 1)->where('id', '!=', $product->id)->get();
        return view('product_details', compact('product', 'related_products'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductInfo $productInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductInfo $productInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductInfo $productInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductInfo $productInfo)
    {
        //
    }
}
