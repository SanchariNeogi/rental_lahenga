<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function blog_details()
    {
        return view('blog_details');
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
    public function show(BlogInfo $blogInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogInfo $blogInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogInfo $blogInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogInfo $blogInfo)
    {
        //
    }
}
