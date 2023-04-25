<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::get();
        return view('admin.blog.view', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload_images/blog_image/', $filename);
            $blog->image = $filename;
        }
        $blog->blog_type = $request->input('blog_type');
        $blog->blog_title = $request->input('blog_title');
        $blog->blog_description = $request->input('blog_description');
        $blog->status = $request->input('status');
        $blog->top_blog = $request->input('top_blog');
        $blog->save();
        return back()->with('success', 'New blog added successfully.');
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
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('update_id');
            $data = [
                'blog_type' => $request->input('blog_type'),
                'blog_title' => $request->input('blog_title'),
                'blog_description' => $request->input('blog_description'),
                'status' => $request->input('status'),
                'top_blog' => $request->input('top_blog') || 0,
            ];
            Blog::where('id', $edit_id)->update($data);
            $updated = Blog::where('id', $edit_id)->get();
            DB::commit();
            return response()->json($updated[0], 200);
        } catch (Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
        }
    }

    public function updateBlogImage(Request $request)
    {
        DB::beginTransaction();
        try {
            $edit_id = $request->input('updated_id');
            if ($request->has('image')) {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('upload_images/blog_image/', $filename);
                Blog::where('id', $edit_id)->update(["image" => $filename]);
            }
            $updated = Blog::where('id', $edit_id)->get();

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
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if ($blog->image != null) {
            unlink(public_path() . 'upload_images/blog_image/' . $blog->image);
        }
        $blog->delete();
        return back()->with('success', 'Product deleted successfully.');
    }
}
