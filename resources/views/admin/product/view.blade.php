<x-admin-layout>
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">All Products</h1>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex  gap-3">
                                        <li>
                                            <a href="{{ url('admin/add-product') }}"
                                                class="btn btn-primary d-none d-md-inline-flex">
                                                <span>Add New Product</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>

                                <!-- Modal -->
                                {{-- <div class="modal fade" id="addUserModal" tabindex="-1"
                                    aria-labelledby="addUserModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addUserModalLabel">Add New Category</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div><!-- .modal-header -->
                                            <div class="modal-body">
                                                <form method="POST" action="{{ url('admin/add-product') }}"
                                                    name="category_form" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="category" class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="categoryName"
                                                                        name="categoryName" class="form-control"
                                                                        placeholder="Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="slug" class="form-label">Slug</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="slug" name="slug"
                                                                        class="form-control" placeholder="Slug">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="description"
                                                                    class="form-label">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" name="text_desc"
                                                                        id="text_desc" class="form-control"
                                                                        placeholder="Description">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Thumbnail</label>
                                                                <div class="form-control-wrap">
                                                                    <div
                                                                        class="image-upload-wrap d-flex flex-column align-items-center">
                                                                        <div class="media media-huge border">
                                                                            <img id="image-result" class="w-100 h-100"
                                                                                src="{{ asset('images/avatar-placeholder.jpg') }}"
                                                                                alt="avatar">
                                                                        </div>
                                                                        <div class="pt-3">
                                                                            <input class="upload-image"
                                                                                data-target="image-result"
                                                                                id="change-avatar" name='image'
                                                                                type="file" max="1" hidden> --}}
                                {{-- <input class="form-control" name='image'
                                                                                type="file" max="1" /> --}}
                                {{-- <label for="change-avatar"
                                                                                class="btn btn-md btn-primary">Change</label>
                                                                        </div>
                                                                    </div><!-- end image-upload-wrap -->
                                                                </div>
                                                                <div class="form-note mt-3">Set the category
                                                                    thumbnail
                                                                    image. Only *.png, *.jpg and *.jpeg image files
                                                                    are
                                                                    accepted.</div>
                                                            </div><!-- .form-group -->
                                                        </div>
                                                        <div class="col-lg-12">
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
                                                        <div class="col-lg-12">
                                                            <div class="d-flex gap g-2">
                                                                <div class="gap-col">
                                                                    <button class="btn btn-primary" type="submit">Save
                                                                        New Category</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!-- .modal-body -->
                                        </div>
                                    </div>
                                </div><!-- .modal --> --}}


                            </div><!-- .nk-block-head-between -->
                            <div class="d-flex mt-5">
                                <div class="form-group me-3">
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="exampleFormSelect1"
                                            aria-label="Default select example">
                                            <option selected>Bulk Action</option>
                                            <option value="1">Delete</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary">Apply</button>
                            </div>
                        </div>
                        <div class="row g-gs">
                            <div class="col-sm-12 col-xl-12 col-xxl-12 mx-auto">
                                <div class="card h-100">
                                    <div class="card-body">
                                        <table class="datatable-init table"
                                            data-nk-container="table-responsive table-border">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <span class="overline-title">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="flexCheckDefault">
                                                            </div>
                                                        </span>
                                                    </th>
                                                    <th><span class="overline-title">Sl. No.</span></th>
                                                    <th><span class="overline-title">Name</span></th>
                                                    <th><span class="overline-title">Image</span></th>
                                                    <th><span class="overline-title">Original Price</span></th>
                                                    <th><span class="overline-title">Description</span></th>
                                                    <th><span class="overline-title">Status</span></th>
                                                    <th><span class="overline-title">Action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle">
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($products as $key => $products)
                                                    <tr style="vertical-align: middle">
                                                        <td><input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault"></td>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $products->product_name }}</td>
                                                        <td style="width:100px">
                                                            <a href="#"><img
                                                                    src="{{ asset('upload_images/product_thumbnail/' . $products->product_thumbnail) }}"
                                                                    class="rounded d-block mx-auto" height="100"
                                                                    alt="" style="width: 100%;"></a>
                                                        </td>
                                                        <td>{{ $products->product_price }}</td>
                                                        <td>{!! $products->product_descriptions !!}</td>
                                                        <td>
                                                            @if ($products->status == 1)
                                                                <span class="text-success">Active</span>
                                                            @else
                                                                <span class="text-danger">Inactive</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-zoom me-n1"
                                                                    data-bs-toggle="dropdown">
                                                                    <em class="icon ni ni-more-v"></em>
                                                                </a>
                                                                <div
                                                                    class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                    <div class="dropdown-content py-1">
                                                                        <ul
                                                                            class="link-list link-list-hover-bg-primary link-list-md">
                                                                            <li>
                                                                                <a
                                                                                    href="{{ url('admin/product-images') }}/{{ $products->product_slug }}">
                                                                                    <em
                                                                                        class="icon ni ni-img-fill"></em><span>Images</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" data-bs-toggle="modal"
                                                                                    data-bs-target="#updateProduct{{ $products->id }}">
                                                                                    <em
                                                                                        class="icon ni ni-edit"></em><span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" data-bs-toggle="modal"
                                                                                    data-bs-target="#deleteData{{ $products->id }}"><em
                                                                                        class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#" data-bs-toggle="modal"
                                                                                    data-bs-target="#viewProduct{{ $products->id }}"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Details</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>



                                    {{-- Sanchari's edit_modal start --}}

                                    <!-- Modal -->
                                    <div class="modal fade modal-lg" id="updateProduct{{ $products->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <form action="{{ route('admin.product.update', 1) }}" method="POST"
                                            id="product_edit_form{{ $products->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">
                                                            Edit Product</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" value="{{ $products->id }}"
                                                            id='id' name="update_id">
                                                        <div class="row g-gs">
                                                            <div class="col-xxl-9">
                                                                <div class="gap gy-4">
                                                                    <div class="gap-col">
                                                                        <div class="card card-gutter-md">
                                                                            <div class="card-body">
                                                                                <div class="row g-gs">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <div
                                                                                                class="form-control-wrap justify-content-center d-flex">
                                                                                                <img id="image"
                                                                                                    src="{{ asset('upload_images/product_thumbnail/' . $products->product_thumbnail) }}"
                                                                                                    width="200"
                                                                                                    height="200"
                                                                                                    class="rounded-circle image">
                                                                                                <input type="file"
                                                                                                    id="product_image_update{{ $products->id }}"
                                                                                                    name="image"
                                                                                                    onchange="UpdateProductImage({{ $products->id }})"
                                                                                                    style="display: none;">
                                                                                                <em class="icon ni ni-camera-fill"
                                                                                                    id="camera"
                                                                                                    onclick="document.getElementById('product_image_update{{ $products->id }}').click()"
                                                                                                    style="position: absolute; top: 68%; left: 59%; border-radius: 50%; padding: 7px;background-color: white;"></em>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- .form-group -->
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="product_category"
                                                                                                class="form-label">Product
                                                                                                Category</label>
                                                                                            <div
                                                                                                class="form-control-wrap">

                                                                                                <select
                                                                                                    name="category_id"
                                                                                                    value="{{ $products->category_id }}"
                                                                                                    type="text"
                                                                                                    class="form-select"
                                                                                                    id="category_id"
                                                                                                    name="category_id">

                                                                                                    {{ getcategory('') }}
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- .form-group -->
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label for="product_name"
                                                                                                class="form-label">Product
                                                                                                Name</label>
                                                                                            <div
                                                                                                class="form-control-wrap">
                                                                                                <input
                                                                                                    value="{{ $products->product_name }}"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    id="product_name"
                                                                                                    name="product_name"
                                                                                                    placeholder="Product Name">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- .form-group -->
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="mb-3">
                                                                                            <label
                                                                                                class="form-label">Price(₹)
                                                                                            </label>
                                                                                            <div
                                                                                                class="input-group flex-nowrap mb-2">
                                                                                                <span
                                                                                                    class="input-group-text"
                                                                                                    id="inputGroup-sizing-sm">Original
                                                                                                    Price</span>
                                                                                                <input
                                                                                                    value="{{ $products->product_price }}"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    id="product_price"
                                                                                                    name="product_price"
                                                                                                    placeholder="Original Price"
                                                                                                    aria-label="Username"
                                                                                                    aria-describedby="inputGroup-sizing-sm">
                                                                                            </div>
                                                                                            <div
                                                                                                class="input-group flex-nowrap mb-2">
                                                                                                <span
                                                                                                    class="input-group-text"
                                                                                                    id="inputGroup-sizing-sm">3
                                                                                                    Days
                                                                                                    Rental</span>
                                                                                                <input
                                                                                                    value="{{ $products->days3rental }}"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    id="days3rental"
                                                                                                    name="days3rental"
                                                                                                    placeholder="3 Days Rental"
                                                                                                    aria-label="Username"
                                                                                                    aria-describedby="inputGroup-sizing-sm">
                                                                                            </div>
                                                                                            <div
                                                                                                class="input-group flex-nowrap mb-2">
                                                                                                <span
                                                                                                    class="input-group-text"
                                                                                                    id="inputGroup-sizing-sm">5
                                                                                                    Days
                                                                                                    Rental</span>
                                                                                                <input
                                                                                                    value="{{ $products->days5rental }}"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    id="days5rental"
                                                                                                    name="days5rental"
                                                                                                    placeholder="5 Days Rental"
                                                                                                    aria-label="Username"
                                                                                                    aria-describedby="inputGroup-sizing-sm">
                                                                                            </div>
                                                                                            <div
                                                                                                class="input-group flex-nowrap mb-2">
                                                                                                <span
                                                                                                    class="input-group-text"
                                                                                                    id="inputGroup-sizing-sm">7
                                                                                                    Days
                                                                                                    Rental</span>
                                                                                                <input
                                                                                                    value="{{ $products->days7rental }}"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    id="days7rental"
                                                                                                    name="days7rental"
                                                                                                    placeholder="7 Days Rental"
                                                                                                    aria-label="Username"
                                                                                                    aria-describedby="inputGroup-sizing-sm">
                                                                                            </div>

                                                                                        </div>
                                                                                        <!-- .col -->
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="mb-3">
                                                                                            <div class="variant-wrapper variant-wrapper--button js"
                                                                                                style="display: flex; flex-direction:column;">
                                                                                                <div class="size_div">
                                                                                                    <label
                                                                                                        class="form-label">Size</label>
                                                                                                </div>
                                                                                                <div class="size_div2"
                                                                                                    style="display: flex; column-gap:20px">
                                                                                                    @if ($products->size_s == '1')
                                                                                                        <div
                                                                                                            class="size_s">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_s"
                                                                                                                value="1"
                                                                                                                id="size_s"
                                                                                                                checked>
                                                                                                            <label>S</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_s">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_s"
                                                                                                                value="1"
                                                                                                                id="size_s">
                                                                                                            <label>S</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($products->size_xs == '1')
                                                                                                        <div
                                                                                                            class="size_xs">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xs"
                                                                                                                value="1"
                                                                                                                id="size_xs"
                                                                                                                checked>
                                                                                                            <label>XS</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_xs">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xs"
                                                                                                                value="1"
                                                                                                                id="size_xs">
                                                                                                            <label>XS</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($products->size_xxs == '1')
                                                                                                        <div
                                                                                                            class="size_xxs">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xxs"
                                                                                                                value="1"
                                                                                                                id="size_xxs"
                                                                                                                checked>
                                                                                                            <label>XXS</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_xxs">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xxs"
                                                                                                                value="1"
                                                                                                                id="size_xxs">
                                                                                                            <label>XXS</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($products->size_m == '1')
                                                                                                        <div
                                                                                                            class="size_m">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_m"
                                                                                                                value="1"
                                                                                                                id="size_m"
                                                                                                                checked>
                                                                                                            <label>M</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_m">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_m"
                                                                                                                value="1"
                                                                                                                id="size_m">
                                                                                                            <label>M</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($products->size_l == '1')
                                                                                                        <div
                                                                                                            class="size_l">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_l"
                                                                                                                value="1"
                                                                                                                id="size_l"
                                                                                                                checked>
                                                                                                            <label>L</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_l">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_l"
                                                                                                                value="1"
                                                                                                                id="size_l">
                                                                                                            <label>L</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($products->size_xl == '1')
                                                                                                        <div
                                                                                                            class="size_xl">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xl"
                                                                                                                value="1"
                                                                                                                id="size_xl"
                                                                                                                checked>
                                                                                                            <label>XL</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_xl">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xl"
                                                                                                                value="1"
                                                                                                                id="size_xl">
                                                                                                            <label>XL</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($products->size_xxl == '1')
                                                                                                        <div
                                                                                                            class="size_xxl">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xxl"
                                                                                                                value="1"
                                                                                                                id="size_xxl"
                                                                                                                checked>
                                                                                                            <label>XXL</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_xxl">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xxl"
                                                                                                                value="1"
                                                                                                                id="size_xxl">
                                                                                                            <label>XXL</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                    @if ($products->size_xxxl == '1')
                                                                                                        <div
                                                                                                            class="size_xxxl">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xxxl"
                                                                                                                value="1"
                                                                                                                id="size_xxxl"
                                                                                                                checked>
                                                                                                            <label>XXXL</label>
                                                                                                        </div>
                                                                                                    @else
                                                                                                        <div
                                                                                                            class="size_xxxl">
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                name="size_xxxl"
                                                                                                                value="1"
                                                                                                                id="size_xxxl">
                                                                                                            <label>XXXL</label>
                                                                                                        </div>
                                                                                                    @endif
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="product_descriptions"
                                                                                                class="form-label">Description</label>
                                                                                            <div
                                                                                                class="form-control-wrap">
                                                                                                <input
                                                                                                    value="{!! $products->product_descriptions !!}"
                                                                                                    type="text"
                                                                                                    class="form-control"
                                                                                                    id="product_descriptions"
                                                                                                    name="product_descriptions"
                                                                                                    placeholder="Description" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- .form-group -->
                                                                                    </div>
                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="product_category"
                                                                                                class="form-label">Size
                                                                                                Chart</label>
                                                                                            <div class="pt-2">
                                                                                                <img id="size_chart"
                                                                                                    src="{{ asset('upload_images/product_sizechart/' . $products->size_chart) }}"
                                                                                                    width="200"
                                                                                                    height="200"
                                                                                                    class="image"
                                                                                                    onclick="document.getElementById('product_sizechart_update{{ $products->id }}').click()"
                                                                                                    style="width: 100%;object-fit:fill">
                                                                                                <input type="file"
                                                                                                    id="product_sizechart_update{{ $products->id }}"
                                                                                                    name="size_chart"
                                                                                                    onchange="UpdateProductImage({{ $products->id }})"
                                                                                                    style="display: none;">
                                                                                            </div>
                                                                                        </div>
                                                                                        <!-- .form-group -->
                                                                                    </div>

                                                                                    <div class="col-lg-12">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                for="exampleFormSelect1"
                                                                                                class="form-label">Status</label>
                                                                                            <div
                                                                                                class="form-control-wrap">
                                                                                                <select
                                                                                                    value="{{ $products->status }}"
                                                                                                    class="form-select"
                                                                                                    name="status"
                                                                                                    id="exampleFormSelect1"
                                                                                                    aria-label="Default select example">
                                                                                                    <option
                                                                                                        value="1"
                                                                                                        @if ($products->status == 1) selected @endif>
                                                                                                        Active
                                                                                                    </option>
                                                                                                    <option
                                                                                                        value="0"
                                                                                                        @if ($products->status == 0) selected @endif>
                                                                                                        Inactive
                                                                                                    </option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- .card-body -->
                                                                            </div>
                                                                        </div><!-- .card -->
                                                                    </div><!-- .gap-col -->
                                                                </div><!-- gap -->
                                                            </div><!-- .col -->
                                                        </div>



                                                    </div>
                                                    {{-- <div class="modal-footer">
                                                                        <button type="button"
                                                                            class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div> --}}

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-sm btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-sm btn-primary"
                                                            id="submit_edit{{ $products->id }}"
                                                            onclick="EditViewProductDetails({{ $products->id }})"
                                                            data-bs-target="#viewProduct{{ $products->id }}">Save
                                                            Changes
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                    </div>



                                    {{-- Sanchari's edit_modal end --}}

                                    {{-- Sanchari's deleteproduct_modal start --}}

                                    <div class="modal fade" id="deleteData{{ $products->id }}" tabindex="-1"
                                        aria-labelledby="deleteDataModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header border-bottom-0">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="text-center">
                                                        <div class="avatar-md mx-auto mb-3">
                                                            <div class="text-warning">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="40"
                                                                    height="40" fill="currentColor"
                                                                    class="bi bi-exclamation-triangle-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="row justify-content-center">
                                                            <div class="col-xl-10">
                                                                <h4 class="text-warning mb-3">Warning !
                                                                </h4>
                                                                <p class="text-muted font-size-14">Are
                                                                    you sure you want to delete ?</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-danger"
                                                        href="{{ url('admin/delete-product') }}/{{ $products->id }}">Yes</a>
                                                    <button type="button" class="btn btn-success"
                                                        data-bs-dismiss="modal" aria-label="Close">No</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- Sanchari's deleteproduct_modal end --}}

                                    {{-- Sanchari's viewcategory_modal start --}}

                                    <div class="modal fade modal-lg" id="viewProduct{{ $products->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        View Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row g-gs">
                                                        <div class="col-xxl-9">
                                                            <div class="gap gy-4">
                                                                <div class="gap-col">
                                                                    <div class="card card-gutter-md">
                                                                        <div class="card-body">
                                                                            <div class="row g-gs">
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <div
                                                                                            class="form-control-wrap justify-content-center d-flex">
                                                                                            <img id="image"
                                                                                                src="{{ asset('upload_images/product_thumbnail/' . $products->product_thumbnail) }}"
                                                                                                width="200"
                                                                                                height="200"
                                                                                                class="rounded-circle image"
                                                                                                disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .form-group -->
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label for="product_category"
                                                                                            class="form-label">Product
                                                                                            Category</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <input
                                                                                                value="{{ getcategory($products->category_id, 'value') }}"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="category_id"
                                                                                                name="category_id"
                                                                                                placeholder="Product Category"
                                                                                                disabled>

                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .form-group -->
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="form-group">
                                                                                        <label for="product_name"
                                                                                            class="form-label">Product
                                                                                            Name</label>
                                                                                        <div class="form-control-wrap">
                                                                                            <input
                                                                                                value="{{ $products->product_name }}"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="product_name"
                                                                                                name="product_name"
                                                                                                placeholder="Product Name"
                                                                                                disabled>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- .form-group -->
                                                                                </div>
                                                                                <div class="col-lg-12">
                                                                                    <div class="mb-3">
                                                                                        <label
                                                                                            class="form-label">Price(₹)
                                                                                        </label>
                                                                                        <div
                                                                                            class="input-group flex-nowrap mb-2">
                                                                                            <span
                                                                                                class="input-group-text"
                                                                                                id="inputGroup-sizing-sm">Original
                                                                                                Price</span>
                                                                                            <input
                                                                                                value="{{ $products->product_price }}"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="product_price"
                                                                                                name="product_price"
                                                                                                placeholder="Original Price"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="inputGroup-sizing-sm"
                                                                                                disabled>
                                                                                        </div>
                                                                                        <div
                                                                                            class="input-group flex-nowrap mb-2">
                                                                                            <span
                                                                                                class="input-group-text"
                                                                                                id="inputGroup-sizing-sm">3
                                                                                                Days
                                                                                                Rental</span>
                                                                                            <input
                                                                                                value="{{ $products->days3rental }}"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="days3rental"
                                                                                                name="days3rental"
                                                                                                placeholder="3 Days Rental"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="inputGroup-sizing-sm"
                                                                                                disabled>
                                                                                        </div>
                                                                                        <div
                                                                                            class="input-group flex-nowrap mb-2">
                                                                                            <span
                                                                                                class="input-group-text"
                                                                                                id="inputGroup-sizing-sm">5
                                                                                                Days
                                                                                                Rental</span>
                                                                                            <input
                                                                                                value="{{ $products->days5rental }}"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="days5rental"
                                                                                                name="days5rental"
                                                                                                placeholder="5 Days Rental"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="inputGroup-sizing-sm"
                                                                                                disabled>
                                                                                        </div>
                                                                                        <div
                                                                                            class="input-group flex-nowrap mb-2">
                                                                                            <span
                                                                                                class="input-group-text"
                                                                                                id="inputGroup-sizing-sm">7
                                                                                                Days
                                                                                                Rental</span>
                                                                                            <input
                                                                                                value="{{ $products->days7rental }}"
                                                                                                type="text"
                                                                                                class="form-control"
                                                                                                id="days7rental"
                                                                                                name="days7rental"
                                                                                                placeholder="7 Days Rental"
                                                                                                aria-label="Username"
                                                                                                aria-describedby="inputGroup-sizing-sm"
                                                                                                disabled>
                                                                                        </div>

                                                                                    </div>
                                                                                    <!-- .col -->
                                                                                </div>

                                                                                <div class="col-md-12">
                                                                                    <div class="mb-3">
                                                                                        <div class="variant-wrapper variant-wrapper--button js"
                                                                                            style="display: flex; flex-direction:column;">
                                                                                            <div class="size_div">
                                                                                                <label
                                                                                                    class="form-label">Size</label>
                                                                                            </div>
                                                                                            <div class="size_div2"
                                                                                                style="display: flex; column-gap:20px">

                                                                                                {{ $products->size_s ? 'S' : '' }}
                                                                                                {{ $products->size_xs ? 'XS' : '' }}
                                                                                                {{ $products->size_xxs ? 'XXS' : '' }}
                                                                                                {{ $products->size_m ? 'M' : '' }}
                                                                                                {{ $products->size_l ? 'L' : '' }}
                                                                                                {{ $products->size_xl ? 'XL' : '' }}
                                                                                                {{ $products->size_xxl ? 'XXL' : '' }}
                                                                                                {{ $products->size_xxxl ? 'XXXL' : '' }}
                                                                                            </div>
                                                                                            <!-- .col -->
                                                                                            @php
                                                                                                // dd($products->product_descriptions);
                                                                                            @endphp
                                                                                            <div class="col-lg-12">
                                                                                                <div
                                                                                                    class="form-group">
                                                                                                    <label
                                                                                                        for="product_descriptions"
                                                                                                        class="form-label">Description</label>
                                                                                                    <div
                                                                                                        class="form-control-wrap">



                                                                                                        <input
                                                                                                            value="{{ $products->product_descriptions }}"
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="product_descriptions"
                                                                                                            name="product_descriptions"
                                                                                                            placeholder="7 Days Rental"
                                                                                                            aria-label="Username"
                                                                                                            aria-describedby="inputGroup-sizing-sm"
                                                                                                            disabled>
                                                                                                        {{-- <div
                                                                                                            style="display: block;width: 100%;padding: 0.5625rem 1.125rem;font-size: 0.875rem;font-weight: 400;line-height: 1.5rem;color: #43476b;background-color: #fff;background-clip: padding-box;border: 0.0625rem solid #d2d4e4;appearance: none;border-radius: 0.375rem;transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;background-color: #f2f3f8;">
                                                                                                            <span>{!! $products->product_descriptions !!}
                                                                                                            </span>
                                                                                                        </div> --}}

                                                                                                    </div>
                                                                                                </div>
                                                                                                <!-- .form-group -->
                                                                                            </div>
                                                                                            <div
                                                                                                class="col-lg-12 pt-2">
                                                                                                <label
                                                                                                    for="product_category"
                                                                                                    class="form-label">Size
                                                                                                    Chart</label>
                                                                                                <div
                                                                                                    class="form-group">

                                                                                                    <img id="size_chart"
                                                                                                        src="{{ asset('upload_images/product_sizechart/' . $products->size_chart) }}"
                                                                                                        width="200"
                                                                                                        height="200"
                                                                                                        class="image"
                                                                                                        style="width: 100%;object-fit:fill">

                                                                                                </div>
                                                                                                <!-- .form-group -->
                                                                                            </div>
                                                                                            <!-- .col -->
                                                                                            <div class="col-lg-12">
                                                                                                <div
                                                                                                    class="form-group">
                                                                                                    <label
                                                                                                        for="status"
                                                                                                        class="form-label">Status</label>
                                                                                                    <div
                                                                                                        class="form-control-wrap">
                                                                                                        <input
                                                                                                            value="@if ($products->status == 1) Active @else Inactive @endif"
                                                                                                            type="text"
                                                                                                            class="form-control"
                                                                                                            id="status"
                                                                                                            name="status"
                                                                                                            placeholder="Status"
                                                                                                            disabled>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- .form-group -->
                                                                                        </div>
                                                                                        <!-- .card-body -->
                                                                                    </div><!-- .card -->
                                                                                </div><!-- .gap-col -->
                                                                            </div><!-- gap -->
                                                                        </div><!-- .col -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-sm btn-primary"
                                                                    id="editbutton" data-bs-toggle="modal"
                                                                    data-bs-target="#updateProduct{{ $products->id }}">Edit</button>
                                                                <button type="button"
                                                                    class="btn btn-sm btn-secondary"
                                                                    data-bs-dismiss="modal"
                                                                    onclick="ProductPageRefresh({{ $products->id }})">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Sanchari's viewcategory_modal end --}}

                                                </tbody>
                                                </table>
                                                {{-- <div class="form-note mt-3"> Use <code>.datatable-init</code> class to
                                            <code>table</code> to enable data-tables mode. <br> <strong
                                                class="text-black">Note:</strong> If you want to use datatable
                                            another page then you must have to load datatables's js file. then you
                                            can use datatable to your project.
                                        </div> --}}
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
