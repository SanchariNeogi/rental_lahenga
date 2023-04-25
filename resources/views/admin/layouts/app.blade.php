<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rental Lahenga | Admin</title>
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/icon.png') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/style926d.css?v1.1.1') }}">
    <link rel="stylesheet" href="{{ asset('admin-assets/css/libs/editors/tinymce.css?v1.1.1') }}">

</head>

<body class="nk-body" data-sidebar-collapse="lg" data-navbar-collapse="lg">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-sidebar nk-sidebar-fixed is-theme" id="sidebar">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand"><a href="{{ url('admin/dashboard') }}" class="logo-link">
                            <div class="logo-wrap">
                                <img src="{{ asset('admin-assets/images/logo.png') }}">
                            </div>
                        </a>
                        <div class="nk-compact-toggle me-n1">
                            <button class="btn btn-md btn-icon text-light btn-no-hover compact-toggle">
                                <em class="icon off ni ni-chevrons-left"></em>
                                <em class="icon on ni ni-chevrons-right"></em>
                            </button>
                        </div>
                        <div class="nk-sidebar-toggle me-n1">
                            <button class="btn btn-md btn-icon text-light btn-no-hover sidebar-toggle">
                                <em class="icon ni ni-arrow-left"></em>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ url('admin/dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-home"></em>
                                        </span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-dashboard"></em>
                                        </span>
                                        <span class="nk-menu-text">Products</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ url('admin/add-product') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Add Product</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('admin/products') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">View Product</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{ url('admin/orders') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-home"></em>
                                        </span>
                                        <span class="nk-menu-text">Orders</span>
                                    </a>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-grid-alt"></em></span>
                                        <span class="nk-menu-text">Attribute</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ url('admin/category') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Category Manage</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('admin/subcategory') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Subcategory Manage</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ url('admin/child-category') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Child Category Manage</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-dashboard"></em>
                                        </span>
                                        <span class="nk-menu-text">Blogs</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('admin.blog.create') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">Add Blogs</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('admin.blog.index') }}" class="nk-menu-link">
                                                <span class="nk-menu-text">View Blogs</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nk-wrap">
                <div class="nk-header nk-header-fixed">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-header-logo ms-n1">
                                <div class="nk-sidebar-toggle">
                                    <button class="btn btn-sm btn-icon btn-zoom sidebar-toggle d-sm-none">
                                        <em class="icon ni ni-menu"></em>
                                    </button>
                                    <button
                                        class="btn btn-md btn-icon btn-zoom sidebar-toggle d-none d-sm-inline-flex">
                                        <em class="icon ni ni-menu"></em>
                                    </button>
                                </div>
                                <div class="nk-navbar-toggle me-2">
                                    <button class="btn btn-sm btn-icon btn-zoom navbar-toggle d-sm-none">
                                        <em class="icon ni ni-menu-right"></em>
                                    </button>
                                    <button class="btn btn-md btn-icon btn-zoom navbar-toggle d-none d-sm-inline-flex">
                                        <em class="icon ni ni-menu-right"></em>
                                    </button>
                                </div>
                                <a href="{{ url('admin/dashboard') }}" class="logo-link">
                                    <div class="logo-wrap">
                                        <img src="{{ asset('admin-assets/images/logo.png') }}">
                                    </div>
                                </a>
                            </div>
                            <nav class="nk-header-menu nk-navbar">
                                <ul class="nk-nav"></ul>
                            </nav>
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav ms-2">
                                    <li class="dropdown"><a href="#" data-bs-toggle="dropdown">
                                            <div class="d-sm-none">
                                                <div class="media media-md media-circle"><img
                                                        src="{{ asset('admin-assets/images/default-user.png') }}"
                                                        alt="" class="img-thumbnail"></div>
                                            </div>
                                            <div class="d-none d-sm-block">
                                                <div class="media media-circle"><img
                                                        src="{{ asset('admin-assets/images/default-user.png') }}"
                                                        alt="" class="img-thumbnail"></div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md">
                                            <div
                                                class="dropdown-content dropdown-content-x-lg py-3 border-bottom border-light">
                                                <div class="media-group">
                                                    <div class="media media-xl media-middle media-circle"><img
                                                            src="{{ asset('admin-assets/images/default-user.png') }}"
                                                            alt="" class="img-thumbnail">
                                                    </div>
                                                    <div class="media-text">
                                                        <div class="lead-text">
                                                            {{ Auth::guard('admin')->user()->name }}</div><span
                                                            class="sub-text">Owner & Founder</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="dropdown-content dropdown-content-x-lg py-1 border-bottom border-light">
                                                <ul class="link-list">
                                                    <li><a href="{{ url('admin/change-password') }}"><em
                                                                class="icon ni ni-lock"></em> <span>Password</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-content dropdown-content-x-lg py-1">
                                                <ul class="link-list">
                                                    <li><a href="#" data-bs-toggle="modal"
                                                            data-bs-target="#logoutWarning"><em
                                                                class="icon ni ni-signout"></em> <span>Log
                                                                Out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {{ $slot }}
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 Rental Lahenga.</div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link">Design & Develop by Dignexus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="logoutWarning" tabindex="-1" aria-labelledby="subscribeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="avatar-md mx-auto mb-3">
                            <div class="text-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                    fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <h4 class="text-warning mb-3">Warning !</h4>
                                <p class="text-muted font-size-14">Are you sure you want to logged out now ?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf
                        <a class="btn btn-danger" href="#"
                            onclick="event.preventDefault(); this.closest('form').submit();">Yes</a>
                    </form>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                        aria-label="Close">No</button>
                </div>
            </div>
        </div>
    </div>
    @if (Session::has('success'))
        <div class="modal fade" id="msgModal" tabindex="-1" aria-labelledby="msgModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="avatar-md mx-auto mb-3">
                                <div class="text-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <h4 class="text-success mb-3">Success !</h4>
                                    <p class="text-muted font-size-14">{{ Session::get('success') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (Session::has('error'))
        <div class="modal fade" id="msgModal" tabindex="-1" aria-labelledby="msgModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <div class="avatar-md mx-auto mb-3">
                                <div class="text-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                        fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                        <path
                                            d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                        <path
                                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-xl-10">
                                    <h4 class="text-danger mb-3">Error !</h4>
                                    <p class="text-muted font-size-14">{{ Session::get('error') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</body>
<script src="{{ asset('admin-assets/js/bundle.js') }}"></script>
<script src="{{ asset('admin-assets/js/scripts.js') }}"></script>
<script src="{{ asset('admin-assets/js/charts/analytics-chart.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script src="{{ asset('admin-assets/js/libs/editors/tinymce.js') }}"></script>
<script src="{{ asset('admin-assets/js/editors/tinymce.js') }}"></script>

{{-- Sanchari's editcategory_modal part --}}
<script src="{{ asset('admin-assets/js/charts/analytics-chart.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
    integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('#viewDetails').on('show.bs.modal', function(e) {

            var link = $(e.relatedTarget),

                modal = $(this),
                // username = link.data("details"),
                email = link.data("email");
            image = link.data("image");

            modal.find("#image").attr('src', image ||
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNL_ZnOTpXSvhf1UaK7beHey2BX42U6solRA&usqp=CAU"

            );

            modal.find("#editbutton").attr("data-email", email)
            modal.find("#editbutton").attr("data-image", image)


            Object.keys(email).map((items) => {
                modal.find(`#${items}`).val(email[items]);
            })
        });
    })
    $(document).ready(function() {
        $('#updateData').on('show.bs.modal', function(e) {
            var link = $(e.relatedTarget),
                modal = $(this),
                // username = link.data("details"),
                email = link.data("email");
            image = link.data("image");


            // $('#view_profile_picture').attr('src', email.profile_picture)
            modal.find("#image").attr('src', image ||
                "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNL_ZnOTpXSvhf1UaK7beHey2BX42U6solRA&usqp=CAU"
            );
            Object.keys(email).map((items) => {
                // alert(email[items]);
                modal.find(`#${items}`).val(email[items]);
            })

        });
        $("#camera").on('click', function() {
            $('#image').trigger('click');
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    //                    alert(e.target.result);
                    $('.image').attr('src', e.target.result);
                    //$('#profile_picture').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function() {
            // alert("img");
            readURL(this);
        });
        // $("#profile_pic").on('change', function(input) {
        //     // alert('jk');
        //     readURL(this);
        // });
    })

    function EditDetails(id) {
        event.preventDefault()

        var form = $(`#category_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.category.update') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                alert('Update Successfully');
                $(`#updateData${id}`).modal('hide')
                $(`#viewDetails${id}`).modal('show')
                $(`#viewDetails${id}`).addClass("refresh")
                let modal = $(`#viewDetails${id}`)

                modal.find("#image").attr('src',
                    `/upload_images/category/${responce.image}`);

                Object.keys(responce).map((items) => {
                    modal.find(`#${responce}`).val(responce[items]);
                })
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function EditSubCategoryDetails(id) {
        event.preventDefault()

        var form = $(`#subcategory_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.subcategory.update') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                alert('Update Successfully');
                $(`#updateSubCategoryData${id}`).modal('hide')
                $(`#viewSubCategoryDetails${id}`).modal('show')
                $(`#viewSubCategoryDetails${id}`).addClass("refresh")
                let modal = $(`#viewSubCategoryDetails${id}`)

                modal.find("#image").attr('src',
                    `/upload_images/subcategory/${responce.image}`);

                Object.keys(responce).map((items) => {
                    modal.find(`#${responce}`).val(responce[items]);
                })
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function EditChildCategoryDetails(id) {
        event.preventDefault()

        var form = $(`#childcategory_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.child-category.update') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                alert('Update Successfully');
                $(`#updateChildCategoryData${id}`).modal('hide')
                $(`#viewChildCategoryDetails${id}`).modal('show')
                $(`#viewChildCategoryDetails${id}`).addClass("refresh")
                let modal = $(`#viewChildCategoryDetails${id}`)

                modal.find("#image").attr('src',
                    `/upload_images/childcategory/${responce.image}`);

                Object.keys(responce).map((items) => {
                    modal.find(`#${responce}`).val(responce[items]);
                })
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function EditViewProductDetails(id) {
        event.preventDefault()

        var form = $(`#product_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.product.update') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                alert('Update Successfully');
                $(`#updateProduct${id}`).modal('hide')
                $(`#viewProduct${id}`).modal('show')
                $(`#viewProduct${id}`).addClass("refresh")
                let modal = $(`#viewProduct${id}`)

                modal.find("#image").attr('src',
                    `/upload_images/product_thumbnail/${responce.product_thumbnail}`);

                Object.keys(responce).map((items) => {
                    modal.find(`#${items}`).val(responce[items]);
                })
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function UpdateProductImage(id) {
        event.preventDefault()

        var form = $(`#product_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.product.productimage') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                let modal = $(`#updateProduct${id}`)
                modal.find("#image").attr('src',
                    `/upload_images/product_thumbnail/${responce.product_thumbnail}`);
                modal.find("#size_chart").attr('src',
                    `/upload_images/product_sizechart/${responce.size_chart}`);
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function ProductPageRefresh(id) {
        if ($(`#viewProduct${id}`).hasClass("refresh")) {
            window.location.reload();
        }
    }

    function UpdateCategoryImage(id) {
        event.preventDefault()

        var form = $(`#category_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.category.updateCategoryImage') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                let modal = $(`#updateData${id}`)
                modal.find("#image").attr('src',
                    `/upload_images/category/${responce.image}`);
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function CategoryPageRefresh(id) {
        if ($(`#viewDetails${id}`).hasClass("refresh")) {
            window.location.reload();
        }
    }

    function UpdateSubCategoryImage(id) {
        event.preventDefault()

        var form = $(`#subcategory_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.category.updateSubCategoryImage') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                let modal = $(`#updateSubCategoryData${id}`)
                modal.find("#image").attr('src',
                    `/upload_images/subcategory/${responce.image}`);
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function SubCategoryPageRefresh(id) {
        if ($(`#viewSubCategoryDetails${id}`).hasClass("refresh")) {
            window.location.reload();
        }
    }

    function UpdatechildCategoryImage(id) {
        event.preventDefault()

        var form = $(`#childcategory_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.category.updateChildCategoryImage') }}",
            type: 'POST',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                let modal = $(`#updateChildCategoryData${id}`)
                modal.find("#image").attr('src',
                    `/upload_images/childcategory/${responce.image}`);
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function ChildCategoryPageRefresh(id) {
        if ($(`#viewChildCategoryDetails${id}`).hasClass("refresh")) {
            window.location.reload();
        }
    }

    // SANCHARI's Blog Page Start
    function EditBlogDetails(id) {
        event.preventDefault()

        var form = $(`#blog_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.blog.update', 1) }}",
            type: 'PUT',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                alert('Update Successfully');
                $(`#updateBlog${id}`).modal('hide')
                $(`#viewBlog${id}`).modal('show')
                $(`#viewBlog${id}`).addClass("refresh")
                let modal = $(`#viewBlog${id}`)

                modal.find("#image").attr('src',
                    `/upload_images/blog_image/${responce.image}`);

                Object.keys(responce).map((items) => {
                    modal.find(`#${items}`).val(responce[items]);
                })
            },
            error: function() {
                alert('error');
            }
        });
        return false;
    }

    function BlogPageRefresh(id) {
        if ($(`#viewBlog${id}`).hasClass("refresh")) {
            window.location.reload();
        }
    }

    function UpdateBlogImage(id) {
        event.preventDefault()

        var form = $(`#blog_edit_form${id}`)[0];
        var data_post = new FormData(form);

        $.ajax({
            url: "{{ route('admin.blog.updateBlogImage') }}",
            type: 'PUT',
            data: data_post,
            contentType: false,
            processData: false,
            success: function(responce) {
                let modal = $(`#updateBlog${id}`)
                modal.find("#image").attr('src',
                    `/upload_images/blog_image/${responce.image}`);
            },
            error: function(responce) {
                console.log(responce);
            }
        });
        return false;
    }
    // SANCHARI's Blog Page End
</script>

</html>
<script>
    const myTimeout = setTimeout(openMsg, 500);

    function openMsg() {
        $("#msgModal").modal("show");
    }
</script>
