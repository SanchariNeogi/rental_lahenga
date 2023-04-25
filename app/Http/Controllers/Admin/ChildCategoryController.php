<?php

namespace App\Http\Controllers\Admin;

use Exception;

use Illuminate\Http\Request;
use App\Models\ChildCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChildCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ChildCategory::all();
        return view('admin.attribute.childcategorymanage', compact('data'));
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
                'childcategoryName' => $request->input('childcategoryName'),
                'slug' => $request->input('slug'),
                'category_id' => $request->input('category_id'),
                'subcategory_id' => $request->input('subcategory_id'),
                'text_desc' => $request->input('text_desc'),
                'status' => $request->input('status')
            ];

            $childcategory = ChildCategory::create($data);
            if ($childcategory) {

                if ($request->has('image')) {
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = "product_childcategory" . $childcategory->id . '.' . $extention;
                    $file->move('upload_images/childcategory/', $filename);
                    ChildCategory::where('id', $childcategory->id)->update(["image" => $filename]);
                }
                //return $data;
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
    public function show(ChildCategory $childCategory)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChildCategory $childCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChildCategory $childCategory)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            $data = [
                'childcategoryName' => $request->input('childcategoryName'),
                'slug' => $request->input('slug'),
                'category_id' => $request->input('category_id'),
                'subcategory_id' => $request->input('subcategory_id'),
                'text_desc' => $request->input('text_desc'),
                'status' => $request->input('status')
                // 'profile_picture' => $request->input('profile_picture'),
            ];
            //return $data;
            ChildCategory::where('id', $edit_id)->update($data);
            // if ($request->has('image')) {

            //     // if ($request->has('image')) {
            //     $file = $request->file('image');
            //     $extention = $file->getClientOriginalExtension();
            //     $filename = "product_childcategory" . $edit_id . '.' . $extention;
            //     $file->move('upload_images/childcategory/', $filename);
            //     ChildCategory::where('id', $edit_id)->update(["image" => $filename]);
            //     // }
            // }
            $updated = ChildCategory::where('id', $edit_id)->get();

            DB::commit();
            return response()->json($updated[0], 200);
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    public function updateChildCategoryImage(Request $request)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            if ($request->has('image')) {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('upload_images/childcategory/', $filename);
                ChildCategory::where('id', $edit_id)->update(["image" => $filename]);
            }

            $updated = ChildCategory::where('id', $edit_id)->get();

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
        $childcategory = ChildCategory::find($id);
        if ($childcategory->image != NULL) {
            unlink(public_path() . '/upload_images/childcategory/' . $childcategory->image);
        }
        $childcategory->delete();
        return back()->with('success', 'Category deleted successfully.');
    }
}
