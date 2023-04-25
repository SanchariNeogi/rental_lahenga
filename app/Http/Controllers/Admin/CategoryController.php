<?php

namespace App\Http\Controllers\Admin;

use Exception;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.attribute.categorymanage', compact('data'));
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
        DB::beginTransaction();
        try {
            $data = [
                'categoryName' => $request->input('categoryName'),
                'slug' => $request->input('slug'),
                'text_desc' => $request->input('text_desc'),
                'status' => $request->input('status')
            ];
            //return $data;
            $category = Category::create($data);
            if ($category) {

                if ($request->has('image')) {
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extention;
                    $file->move('upload_images/category/', $filename);
                    Category::where('id', $category->id)->update(["image" => $filename]);
                }
            }
            DB::commit();
            return redirect()->back()->with("Data Added Successfully");
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            $data = [
                'categoryName' => $request->input('categoryName'),
                'slug' => $request->input('slug'),
                'text_desc' => $request->input('text_desc'),
                'status' => $request->input('status'),
                // 'profile_picture' => $request->input('profile_picture'),
            ];
            //return $data;
            Category::where('id', $edit_id)->update($data);
            // if ($request->has('image')) {

            //     // if ($request->has('image')) {
            //     $file = $request->file('image');
            //     $extention = $file->getClientOriginalExtension();
            //     $filename = "product_category" . $edit_id . '.' . $extention;
            //     $file->move('upload_images/category/', $filename);
            //     Category::where('id', $edit_id)->update(["image" => $filename]);
            //     // }
            // }

            $updated = Category::where('id', $edit_id)->get();

            DB::commit();
            return response()->json($updated[0], 200);
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->image != NULL) {
            unlink(public_path() . '/upload_images/category/' . $category->image);
        }
        $category->delete();
        return back()->with('success', 'Category deleted successfully.');
    }


    public function updateCategoryImage(Request $request)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            if ($request->has('image')) {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('upload_images/category/', $filename);
                Category::where('id', $edit_id)->update(["image" => $filename]);
            }

            $updated = Category::where('id', $edit_id)->get();

            DB::commit();
            return response()->json($updated[0], 200);
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }
}
