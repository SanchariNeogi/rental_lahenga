<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Exception;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SubCategory::all();
        return view('admin.attribute.subcategorymanage', compact('data'));
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
                'subcategoryName' => $request->input('subcategoryName'),
                'slug' => $request->input('slug'),
                'category_id' => $request->input('category_id'),
                'text_desc' => $request->input('text_desc'),
                'status' => $request->input('status'),
            ];
            $subcategory = SubCategory::create($data);
            if ($subcategory) {

                if ($request->has('image')) {
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = "product_subcategory" . $subcategory->id . '.' . $extention;
                    $file->move('upload_images/subcategory/', $filename);
                    SubCategory::where('id', $subcategory->id)->update(["image" => $filename]);
                }
            }
            DB::commit();
            return redirect()->back()->with("Data Added Successfully");
        } catch (Exception $e) {
            DB::rollback();
            echo $e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            $data = [
                'subcategoryName' => $request->input('subcategoryName'),
                'slug' => $request->input('slug'),
                'category_id' => $request->input('category_id'),
                'text_desc' => $request->input('text_desc'),
                'status' => $request->input('status'),
                // 'profile_picture' => $request->input('profile_picture'),
            ];
            //return $data;
            SubCategory::where('id', $edit_id)->update($data);
            // if ($request->has('image')) {

            //     // if ($request->has('image')) {
            //     $file = $request->file('image');
            //     $extention = $file->getClientOriginalExtension();
            //     $filename = "product_subcategory" . $edit_id . '.' . $extention;
            //     $file->move('upload_images/subcategory/', $filename);
            //     SubCategory::where('id', $edit_id)->update(["image" => $filename]);
            //     // }
            // }
            $updated = SubCategory::where('id', $edit_id)->get();

            DB::commit();
            return response()->json($updated[0], 200);
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    public function updateSubCategoryImage(Request $request)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            if ($request->has('image')) {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('upload_images/subcategory/', $filename);
                SubCategory::where('id', $edit_id)->update(["image" => $filename]);
            }

            $updated = SubCategory::where('id', $edit_id)->get();

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
        $subcategory = SubCategory::find($id);
        if ($subcategory->image != NULL) {
            unlink(public_path() . '/upload_images/subcategory/' . $subcategory->image);
        }
        $subcategory->delete();
        return back()->with('success', 'Category deleted successfully.');
    }
}
