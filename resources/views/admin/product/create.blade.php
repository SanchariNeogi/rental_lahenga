<x-admin-layout>
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="row g-gs">
                        <div class="col-sm-8 col-xl-8 col-xxl-8 mx-auto">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Create Product</h4>
                                    <form method="POST" action="{{ route('admin.product.store') }}"
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
                                                <div class="mb-3">
                                                    <label class="form-label">Product Category</label>
                                                    <select class="form-select" name="category_id"
                                                        value="{{ old('category_id') }}" required>
                                                        <option value="" disabled selected>Select an option
                                                        </option>
                                                        @foreach ($category as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->categoryName }}
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <x-input-error :messages="$errors->get('product_name')" class="text-danger" />
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Product Name</label>
                                                    <input type="text" class="form-control" name="product_name"
                                                        value="{{ old('product_name') }}" required>
                                                </div>
                                                <x-input-error :messages="$errors->get('product_name')" class="text-danger" />
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Price (₹)</label>
                                                    {{-- <input type="text" class="form-control" name="product_price"
                                                        value="{{ old('product_price') }}" required> --}}
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-text"
                                                            id="inputGroup-sizing-sm">Original
                                                            Price</span>
                                                        <input type="text" class="form-control" name="product_price"
                                                            value="{{ old('product_price') }}"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">3 Days
                                                            Rental</span>
                                                        <input type="text" class="form-control" name="days3rental"
                                                            value="{{ old('days3rental') }}"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">5 Days
                                                            Rental</span>
                                                        <input type="text" class="form-control" name="days5rental"
                                                            value="{{ old('days5rental') }}"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                    <div class="input-group input-group-sm">
                                                        <span class="input-group-text" id="inputGroup-sizing-sm">7 Days
                                                            Rental</span>
                                                        <input type="text" class="form-control" name="days7rental"
                                                            value="{{ old('days7rental') }}"
                                                            aria-label="Sizing example input"
                                                            aria-describedby="inputGroup-sizing-sm">
                                                    </div>
                                                </div>
                                                <x-input-error :messages="$errors->get('product_price')" class="text-danger" />
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <div class="variant-wrapper variant-wrapper--button js"
                                                        style="display: flex; flex-direction:column;">
                                                        <div class="size_div">
                                                            <label class="form-label">Size</label>
                                                        </div>
                                                        <div class="size_div2" style="display: flex; column-gap:20px">
                                                            <div class="size_s">
                                                                <input type="checkbox" name="size_s"
                                                                    id="size_s"><label>S</label>
                                                            </div>
                                                            <div class="size_xs">
                                                                <input type="checkbox" name="size_xs"
                                                                    id="size_xs"><label>XS</label>
                                                            </div>
                                                            <div class="size_xxs">
                                                                <input type="checkbox" name="size_xxs"
                                                                    id="size_xxs"><label>XXS</label>
                                                            </div>
                                                            <div class="size_m">
                                                                <input type="checkbox" name="size_m"
                                                                    id="size_m"><label>M</label>
                                                            </div>
                                                            <div class="size_l">
                                                                <input type="checkbox" name="size_l"
                                                                    id="size_l"><label>L</label>
                                                            </div>
                                                            <div class="size_xl">
                                                                <input type="checkbox" name="size_xl"
                                                                    id="size_xl"><label>XL</label>
                                                            </div>
                                                            <div class="size_xxl">
                                                                <input type="checkbox" name="size_xxl"
                                                                    id="size_xxl"><label>XXL</label>
                                                            </div>
                                                            <div class="size_xxxl">
                                                                <input type="checkbox" name="size_xxxl"
                                                                    id="xxxl"><label>XXXL</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea name="product_descriptions" class="js-tinymce" id="tinymceDefault"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Size Chart</label>
                                                    <input class="form-control" type="file" name="size_chart"
                                                        id="size_chart" required>
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-12">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="dropzoneFile4" class="form-label">Size
                                                            Chart</label>
                                                        <div class="form-control-wrap">
                                                            <div class="js-upload" id="dropzoneFile4"
                                                                data-accepted-files="image/*" data-message-icon="img">
                                                                <div class="dz-message" data-dz-message>
                                                                    <div class="dz-message-icon"></div>
                                                                    <span class="dz-message-text">Drag and drop
                                                                        file</span>
                                                                    <div class="dz-message-btn mt-2">
                                                                        <a href="javascript:void('0')"
                                                                            class="btn btn-md btn-primary">Upload</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="exampleFormSelect1" class="form-label">Status</label>
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
    </div>
    </div>
</x-admin-layout>
