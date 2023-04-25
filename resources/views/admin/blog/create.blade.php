<x-admin-layout>
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-8 col-xl-8 col-xxl-8 mx-auto">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Create Blog</h4>
                                    <form method="POST" action="{{ route('admin.blog.store') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Thumbnail</label>
                                                    <input class="form-control" type="file" name="image"
                                                        id="image" required>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                {{-- <div class="mb-3">
                                                    <label class="form-label">Blog Type</label>
                                                    <input type="text" class="form-control" name="blog_type"
                                                        id="blog_type" value="{{ old('blog_type') }}" required>
                                                </div> --}}
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <label for="blog_type" class="form-label">Blog Type</label>
                                                        <div class="form-control-wrap">
                                                            <select class="js-select" id="blog_type" name="blog_type"
                                                                data-search="true" data-sort="false">
                                                                <option value="">Select an option</option>
                                                                <option value="Fashion">Fashion</option>
                                                                <option value="Haldi">Haldi</option>
                                                                <option value="Mehandi">Mehandi</option>
                                                                <option value="Party">Party</option>
                                                                <option value="Wedding">Wedding</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>

                                                <x-input-error :messages="$errors->get('blog_type')" class="text-danger" />
                                            </div>

                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Blog Title</label>
                                                    <input type="text" class="form-control" name="blog_title"
                                                        id="blog_title" value="{{ old('blog_title') }}" required>
                                                </div>
                                                <x-input-error :messages="$errors->get('blog_title')" class="text-danger" />
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <label for="exampleFormControlTextarea8"
                                                            class="form-label">Description</label>
                                                        <div class="form-control-wrap">
                                                            <textarea placeholder="Description" class="form-control" id="blog_description" name="blog_description" rows="3"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea name="blog_description" class="blog_description" id="blog_description"></textarea>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <div class="form-group">
                                                        <label for="exampleFormSelect1"
                                                            class="form-label">Status</label>
                                                        <div class="form-control-wrap">
                                                            <select class="form-select" name="status"
                                                                id="exampleFormSelect1"
                                                                aria-label="Default select example">
                                                                <option selected value="1">Active
                                                                </option>
                                                                <option value="0">Inactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            id="flexCheckDefault" name="top_blog">
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            Top Blog
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn btn-primary w-md">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
