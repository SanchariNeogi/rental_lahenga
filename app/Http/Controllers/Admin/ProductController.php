<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at', 'DESC')->get();
        $category = Category::orderBy('created_at', 'DESC')->get();
        return view('admin.product.view', compact('products', 'category'));
    }
    public function addProduct()
    {
        $category = Category::orderBy('created_at', 'DESC')->get();
        return view('admin.product.create', compact('category'));
    }
    public function productStore(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'category_id' => 'required|numeric',
            'product_name' => 'required|unique:products',
            'product_price' => 'required|numeric',
            'days3rental' => 'required|numeric',
            'days5rental' => 'required|numeric',
            'days7rental' => 'required|numeric',
            'product_descriptions' => 'required',
            // 'size_chart' => 'required',
            'status' => 'required'
        ]);
        $product = new Product;
        $product->product_slug = Str::slug($request->input('product_name'));
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload_images/product_thumbnail/', $filename);
            $product->product_thumbnail = $filename;
        }
        $product->category_id = $request->input('category_id');
        $product->product_name = $request->input('product_name');
        $product->product_price = $request->input('product_price');
        $product->days3rental = $request->input('days3rental');
        $product->days5rental = $request->input('days5rental');
        $product->days7rental = $request->input('days7rental');
        $product->size_s = ($request->input('size_s')) ? true : false;
        $product->size_xs = ($request->input('size_xs')) ? true : false;
        $product->size_xxs = ($request->input('size_xxs')) ? true : false;
        $product->size_m = ($request->input('size_m')) ? true : false;
        $product->size_l = ($request->input('size_l')) ? true : false;
        $product->size_xl = ($request->input('size_xl')) ? true : false;
        $product->size_xxl = ($request->input('size_xxl')) ? true : false;
        $product->size_xxxl = ($request->input('size_xxxl')) ? true : false;
        //  $product->size_s = true;
        // $product->size_s = $request->input('size_s');
        // $product->size_xs = $request->input('size_xs');
        // $product->size_xxs = $request->input('size_xxs');
        // $product->size_m = $request->input('size_m');
        // $product->size_l = $request->input('size_l');
        // $product->size_xl = $request->input('size_xl');
        // $product->size_xxl = $request->input('size_xxl');
        // $product->size_xxxl = $request->input('size_xxxl');
        $product->product_descriptions = $request->input('product_descriptions');
        if ($request->hasfile('size_chart')) {
            $file = $request->file('size_chart');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload_images/product_sizechart/', $filename);
            $product->size_chart = $filename;
        }
        $product->status = $request->input('status');
        $product->save();
        return back()->with('success', 'New product added successfully.');
    }
    public function productDelete($id)
    {
        $product = Product::find($id);
        if ($product->product_thumbnail != null) {
            unlink(public_path() . '/upload_images/product_thumbnail/' . $product->product_thumbnail);
        }
        if ($product->size_chart != null) {
            unlink(public_path() . '/upload_images/product_sizechart/' . $product->size_chart);
        }
        $product->delete();
        return back()->with('success', 'Product deleted successfully.');
    }
    public function updateProduct($slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        return view('admin.product.update', compact('product'));
    }

    public function productUpdate(Request $request)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            $data = [
                'category_id' => $request->input('category_id'),
                'product_name' => $request->input('product_name'),
                'product_price' => $request->input('product_price'),
                'days3rental' => $request->input('days3rental'),
                'days5rental' => $request->input('days5rental'),
                'days7rental' => $request->input('days7rental'),
                'size_s' => ($request->input('size_s')) ? true : false,
                'size_xs' => ($request->input('size_xs')) ? true : false,
                'size_xxs' => ($request->input('size_xxs')) ? true : false,
                'size_m' => ($request->input('size_m')) ? true : false,
                'size_l' => ($request->input('size_l')) ? true : false,
                'size_xl' => ($request->input('size_xl')) ? true : false,
                'size_xxl' => ($request->input('size_xxl')) ? true : false,
                'size_xxxl' => ($request->input('size_xxxl')) ? true : false,
                'product_descriptions' => $request->input('product_descriptions'),
                'status' => $request->input('status')
            ];

            Product::where('id', $edit_id)->update($data);
            if ($request->has('size_chart')) {

                $file = $request->file('size_chart');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('upload_images/product_sizechart/', $filename);
                Product::where('id', $edit_id)->update(["size_chart" => $filename]);
            }
            $updated = Product::where('id', $edit_id)->get();

            DB::commit();
            return response()->json($updated[0], 200);
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    public function updateProductImage(Request $request)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            if ($request->has('image')) {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('upload_images/product_thumbnail/', $filename);
                Product::where('id', $edit_id)->update(["product_thumbnail" => $filename]);
            }

            if ($request->has('size_chart')) {

                $file = $request->file('size_chart');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('upload_images/product_sizechart/', $filename);
                Product::where('id', $edit_id)->update(["size_chart" => $filename]);
            }

            $updated = Product::where('id', $edit_id)->get();

            DB::commit();
            return response()->json($updated[0], 200);
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    public function productImages($slug)
    {
        $product = Product::where('product_slug', $slug)->first();
        $product_images = ProductImage::where('product_id', $product->id)->orderBy('created_at', 'DESC')->get();
        return view('admin.product.images', compact('product', 'product_images'));
    }

    public function productImagesStore(Request $request)
    {
        $request->validate([
            'images' => 'required'
        ]);
        if ($files = $request->file('images')) {
            foreach ($files as $file) {
                $product_image = new ProductImage;
                $product_image->product_id = $request->input('product_id');
                $filename = time() . $file->getClientOriginalName();
                $file->move(public_path('upload_images/product_thumbnail/'), $filename);
                $product_image->product_image = '/upload_images/product_thumbnail/' . $filename;
                $product_image->save();
            }
        }
        return back()->with('success', 'Product image uploaded successfully.');
    }
    public function productImageDelete($id)
    {
        $product_image = ProductImage::find($id);
        unlink(public_path() . $product_image->product_image);
        $product_image->delete();
        return back()->with('success', 'Product image deleted successfully.');
    }
}
