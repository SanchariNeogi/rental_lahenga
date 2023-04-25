<x-admin-layout>
    <div class="nk-content">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="nk-block-head">
                            <div class="nk-block-head-between flex-wrap gap g-2">
                                <div class="nk-block-head-content">
                                    <h2 class="nk-block-title">All Products Child Categories</h1>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="d-flex  gap-3">
                                        <li>
                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex"
                                                data-bs-toggle="modal" data-bs-target="#addUserModal">

                                                <span>Add New Child Category</span>
                                            </a>
                                        </li>


                                    </ul>
                                </div>

                                <!-- Modal -->
                                <div class="modal fade" id="addUserModal" tabindex="-1"
                                    aria-labelledby="addUserModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="addUserModalLabel">Add New Child Category
                                                </h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div><!-- .modal-header -->
                                            <div class="modal-body">
                                                <form method="POST" action="{{ route('admin.child-category.store') }}"
                                                    name="category_form" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="category_id" class="form-label">Category
                                                                    Name</label>
                                                                <div class="form-control-wrap">

                                                                    <select name="category_id" class="form-select"
                                                                        id="">
                                                                        <option>Select Category</option>
                                                                        {{ getcategory('') }}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="subcategory_id"
                                                                    class="form-label">SubCategory
                                                                    Name</label>
                                                                <div class="form-control-wrap">

                                                                    <select name="subcategory_id" class="form-select"
                                                                        id="">
                                                                        <option>Select Category</option>
                                                                        {{ getsubcategory('') }}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <label for="category" class="form-label">Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" id="category"
                                                                        name="childcategoryName" class="form-control"
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
                                                                                type="file" max="1" hidden>
                                                                            <label for="change-avatar"
                                                                                class="btn btn-md btn-primary">Change</label>
                                                                        </div>
                                                                    </div><!-- end image-upload-wrap -->
                                                                </div>
                                                                <div class="form-note mt-3">Set the category thumbnail
                                                                    image. Only *.png, *.jpg and *.jpeg image files are
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
                                                                    <button class="btn btn-primary"
                                                                        type="submit">Save
                                                                        New Child Category</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div><!-- .modal-body -->
                                        </div>
                                    </div>
                                </div><!-- .modal -->


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
                                                    <th><span class="overline-title">ID</span></th>
                                                    <th><span class="overline-title">Child Category Name</span></th>
                                                    <th><span class="overline-title">Sub Category Name</span></th>
                                                    <th><span class="overline-title">Category Name</span></th>
                                                    <th><span class="overline-title">Image</span></th>
                                                    <th><span class="overline-title">Slug</span></th>
                                                    <th><span class="overline-title">Description</span></th>
                                                    <th><span class="overline-title">Status</span></th>
                                                    <th><span class="overline-title">Action</span></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @foreach ($data as $key => $val)
                                                    <tr style="vertical-align: middle">
                                                        <td><input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault"></td>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $val->childcategoryName }}</td>
                                                        <td>{{ getcategory($val->category_id, 'category') }}</td>
                                                        <td>{{ getsubcategory($val->subcategory_id, 'subcategory') }}
                                                        </td>

                                                        <td style="width:100px">
                                                            <a href="#"><img
                                                                    src="{{ asset('upload_images/childcategory/' . $val->image) }}"
                                                                    alt="" style="width: 100%;"></a>
                                                        </td>
                                                        <td>{{ $val->slug }}</td>
                                                        <td>{{ $val->text_desc }}</td>
                                                        <td>
                                                            @if ($val->status == 1)
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
                                                                                <a href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#updateChildCategoryData{{ $val->id }}">
                                                                                    <em
                                                                                        class="icon ni ni-edit"></em><span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#deleteChildCategoryData{{ $val->id }}"><em
                                                                                        class="icon ni ni-trash"></em><span>Delete</span></a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="#"
                                                                                    data-bs-toggle="modal"
                                                                                    data-bs-target="#viewChildCategoryDetails{{ $val->id }}"><em
                                                                                        class="icon ni ni-eye"></em><span>View
                                                                                        Details</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    {{-- Sanchari's editcategory_modal start --}}

                                                    <!-- Modal -->
                                                    <div class="modal fade modal-lg"
                                                        id="updateChildCategoryData{{ $val->id }}"
                                                        data-bs-backdrop="static" data-bs-keyboard="false"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <form action="{{ route('admin.child-category.update', 1) }}"
                                                            method="POST"
                                                            id="childcategory_edit_form{{ $val->id }}"
                                                            enctype="multipart/form-data">

                                                            @csrf
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title"
                                                                            id="exampleModalLabel">
                                                                            Edit Child Category</h5>
                                                                        <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">



                                                                        <input type="hidden"
                                                                            value="{{ $val->id }}"
                                                                            id='id' name="update_id">
                                                                        <div class="row g-gs">
                                                                            <div class="col-xxl-9">
                                                                                <div class="gap gy-4">
                                                                                    <div class="gap-col">
                                                                                        <div
                                                                                            class="card card-gutter-md">
                                                                                            <div class="card-body">
                                                                                                <div class="row g-gs">
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <div
                                                                                                                class="form-control-wrap justify-content-center d-flex">
                                                                                                                <img id="image"
                                                                                                                    src='{{ asset('upload_images/childcategory/' . $val->image) }}'
                                                                                                                    width="200"
                                                                                                                    height="200"
                                                                                                                    class="rounded-circle image">
                                                                                                                <input
                                                                                                                    type="file"
                                                                                                                    id="child_category_image_update{{ $val->id }}"
                                                                                                                    name="image"
                                                                                                                    onchange="UpdatechildCategoryImage({{ $val->id }})"
                                                                                                                    style="display: none;">
                                                                                                                <em class="icon ni ni-camera-fill"
                                                                                                                    id="camera"
                                                                                                                    onclick="document.getElementById('child_category_image_update{{ $val->id }}').click()"
                                                                                                                    style="position: absolute; top: 68%; left: 59%; border-radius: 50%; padding: 7px;background-color: white;"></em>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- .form-group -->
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                for="category_id"
                                                                                                                class="form-label">Category
                                                                                                                Name</label>
                                                                                                            <div
                                                                                                                class="form-control-wrap">
                                                                                                                <select
                                                                                                                    value="{{ $val->category_id }}"
                                                                                                                    type="text"
                                                                                                                    class="form-select"
                                                                                                                    id="category_id"
                                                                                                                    name="category_id"
                                                                                                                    placeholder="Category Name">
                                                                                                                    {{ getcategory('') }}
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- .form-group -->
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                for="subcategory_id"
                                                                                                                class="form-label">SubCategory
                                                                                                                Name</label>
                                                                                                            <div
                                                                                                                class="form-control-wrap">
                                                                                                                <select
                                                                                                                    value="{{ $val->subcategory_id }}"
                                                                                                                    type="text"
                                                                                                                    class="form-select"
                                                                                                                    id="subcategory_id"
                                                                                                                    name="subcategory_id"
                                                                                                                    placeholder="SubCategory Name">
                                                                                                                    {{ getsubcategory('') }}
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- .form-group -->
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                for="childcategoryName"
                                                                                                                class="form-label">Child
                                                                                                                Category
                                                                                                                Name</label>
                                                                                                            <div
                                                                                                                class="form-control-wrap">
                                                                                                                <input
                                                                                                                    value="{{ $val->childcategoryName }}"
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    id="childcategoryName"
                                                                                                                    name="childcategoryName"
                                                                                                                    placeholder="ChildCategory Name">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- .form-group -->
                                                                                                    </div>

                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                for="slug"
                                                                                                                class="form-label">Slug</label>
                                                                                                            <div
                                                                                                                class="form-control-wrap">
                                                                                                                <input
                                                                                                                    value="{{ $val->slug }}"
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    id="slug"
                                                                                                                    name="slug"
                                                                                                                    placeholder="Slug">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- .form-group -->
                                                                                                    </div><!-- .col -->
                                                                                                    <div
                                                                                                        class="col-lg-12">
                                                                                                        <div
                                                                                                            class="form-group">
                                                                                                            <label
                                                                                                                for="text_desc"
                                                                                                                class="form-label">Description</label>
                                                                                                            <div
                                                                                                                class="form-control-wrap">
                                                                                                                <input
                                                                                                                    value="{{ $val->text_desc }}"
                                                                                                                    type="text"
                                                                                                                    class="form-control"
                                                                                                                    id="text_desc"
                                                                                                                    name="text_desc"
                                                                                                                    placeholder="Description">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <!-- .form-group -->
                                                                                                    </div><!-- .col -->
                                                                                                </div>
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="exampleFormSelect1"
                                                                                                            class="form-label">Status</label>
                                                                                                        <div
                                                                                                            class="form-control-wrap">
                                                                                                            <select
                                                                                                                value="{{ $val->status }}"
                                                                                                                class="form-select"
                                                                                                                name="status"
                                                                                                                id="exampleFormSelect1"
                                                                                                                aria-label="Default select example">
                                                                                                                <option
                                                                                                                    value="1"
                                                                                                                    @if ($val->status == 1) selected @endif>
                                                                                                                    Active
                                                                                                                </option>
                                                                                                                <option
                                                                                                                    value="0"
                                                                                                                    @if ($val->status == 0) selected @endif>
                                                                                                                    Inactive
                                                                                                                </option>
                                                                                                            </select>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div><!-- .card-body -->
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
                                                                        <button type="button"
                                                                            class="btn btn-sm btn-secondary"
                                                                            data-bs-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-sm btn-primary"
                                                                            id="submit_edit"
                                                                            onclick="EditChildCategoryDetails({{ $val->id }})"
                                                                            data-bs-target="#viewChildCategoryDetails{{ $val->id }}">Save
                                                                            Changes
                                                                        </button>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    {{-- Sanchari's editcategory_modal end --}}

                                                    {{-- Sanchari's deletecategory_modal start --}}

                                                    <div class="modal fade"
                                                        id="deleteChildCategoryData{{ $val->id }}"
                                                        tabindex="-1" aria-labelledby="deleteDataModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header border-bottom-0">
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="text-center">
                                                                        <div class="avatar-md mx-auto mb-3">
                                                                            <div class="text-warning">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="40" height="40"
                                                                                    fill="currentColor"
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
                                                                        href="{{ url('admin/delete-child-category') }}/{{ $val->id }}">Yes</a>
                                                                    <button type="button" class="btn btn-success"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close">No</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Sanchari's deletecategory_modal end --}}

                                                    {{-- Sanchari's viewcategory_modal start --}}

                                                    <div class="modal fade modal-lg"
                                                        id="viewChildCategoryDetails{{ $val->id }}"
                                                        data-bs-backdrop="static" data-bs-keyboard="false"
                                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        View Category</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
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
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <div
                                                                                                            class="form-control-wrap justify-content-center d-flex">
                                                                                                            <img id="image"
                                                                                                                src='{{ asset('upload_images/childcategory/' . $val->image) }}'
                                                                                                                width="200"
                                                                                                                height="200"
                                                                                                                class="rounded-circle image"
                                                                                                                disabled>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- .form-group -->
                                                                                                </div>
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="childcategoryName"
                                                                                                            class="form-label">
                                                                                                            Child
                                                                                                            Category
                                                                                                            Name</label>
                                                                                                        <div
                                                                                                            class="form-control-wrap">
                                                                                                            <input
                                                                                                                value="{{ $val->childcategoryName }}"
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                id="childcategoryName"
                                                                                                                name="childcategoryName"
                                                                                                                placeholder="Child Category Name"
                                                                                                                disabled>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- .form-group -->
                                                                                                </div>
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="subcategory_id"
                                                                                                            class="form-label">
                                                                                                            SubCategory
                                                                                                            Name</label>
                                                                                                        <div
                                                                                                            class="form-control-wrap">
                                                                                                            <input
                                                                                                                value="{{ $val->subcategory_id }}"
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                id="subcategory_id"
                                                                                                                name="subcategory_id"
                                                                                                                placeholder="Sub Category Name"
                                                                                                                disabled>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- .form-group -->
                                                                                                </div>
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="category_id"
                                                                                                            class="form-label">
                                                                                                            Category
                                                                                                            Name</label>
                                                                                                        <div
                                                                                                            class="form-control-wrap">
                                                                                                            <input
                                                                                                                value="{{ $val->category_id }}"
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                id="category_id"
                                                                                                                name="category_id"
                                                                                                                placeholder="Category Name"
                                                                                                                disabled>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- .form-group -->
                                                                                                </div>
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="slug"
                                                                                                            class="form-label">Slug</label>
                                                                                                        <div
                                                                                                            class="form-control-wrap">
                                                                                                            <input
                                                                                                                value="{{ $val->slug }}"
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                id="slug"
                                                                                                                name="slug"
                                                                                                                placeholder="Slug"
                                                                                                                disabled>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- .form-group -->
                                                                                                </div><!-- .col -->
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="text_desc"
                                                                                                            class="form-label">Description</label>
                                                                                                        <div
                                                                                                            class="form-control-wrap">
                                                                                                            <input
                                                                                                                value="{{ $val->text_desc }}"
                                                                                                                type="text"
                                                                                                                class="form-control"
                                                                                                                id="text_desc"
                                                                                                                name="text_desc"
                                                                                                                placeholder="Description"
                                                                                                                disabled>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <!-- .form-group -->
                                                                                                </div><!-- .col -->
                                                                                                <div class="col-lg-12">
                                                                                                    <div
                                                                                                        class="form-group">
                                                                                                        <label
                                                                                                            for="status"
                                                                                                            class="form-label">Status</label>
                                                                                                        <div
                                                                                                            class="form-control-wrap">
                                                                                                            <input
                                                                                                                value="@if ($val->status == 1) Active @else Inactive @endif"
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
                                                                                            </div><!-- .card-body -->
                                                                                        </div><!-- .card -->
                                                                                    </div><!-- .gap-col -->
                                                                                </div><!-- gap -->
                                                                            </div><!-- .col -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-primary" id="editbutton"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#updateChildCategoryData{{ $val->id }}">Edit</button>
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-secondary"
                                                                        onclick="ChildCategoryPageRefresh({{ $val->id }})"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    {{-- Sanchari's viewcategory_modal end --}}
                                                @endforeach
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
