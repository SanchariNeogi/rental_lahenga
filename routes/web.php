<?php

use App\Models\SubCategory;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\ChildCategoryController;
use App\Http\Controllers\Admin\BlogController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('contact-us', 'HomeController@contactUs');
Route::get('about-us', 'HomeController@aboutUs');
Route::get('insta-shop', 'HomeController@instaShop');
Route::get('shop', 'HomeController@shop');

Route::get('cart', 'CartController@index');
Route::post('add-to-cart', 'CartController@addToCart')->name('add.to.cart');
Route::get('delete-cart-product/{id}', 'CartController@deleteCartProduct');
Route::post('update-cart', 'CartController@updateCart')->name('update.cart');

Route::get('product/{slug}', 'ProductInfoController@product_details');
Route::get('bloginfo', 'BlogInfoController@blog_details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('change-password', [ProfileController::class, 'changePassword']);

    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('add-address', [CheckoutController::class, 'addAddress'])->name('add.address');
    Route::post('process-to-checkout', [CheckoutController::class, 'processToCheckout'])->name('process.to.checkout');
    Route::get('order-confirm', [CheckoutController::class, 'orderConfirm']);
    Route::get('invoice/{id}', [CheckoutController::class, 'invoice']);

    Route::get('orders', [OrderController::class, 'index']);
    Route::get('order-details/{code}', [OrderController::class, 'orderDetails']);
});

require __DIR__ . '/auth.php';

// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        // login route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', 'HomeController@index');
        Route::get('change-password', 'HomeController@changePassword');
        Route::post('change-password', 'HomeController@changePasswordSubmit')->name('change.password');

        Route::get('products', 'ProductController@index');
        Route::get('add-product', 'ProductController@addProduct');
        Route::post('product-add', 'ProductController@productStore')->name('product.store');
        Route::get('delete-product/{id}', 'ProductController@productDelete');
        Route::get('update-product/{slug}', 'ProductController@updateProduct');
        Route::post('product-update', 'ProductController@productUpdate')->name('product.update');
        Route::get('product-images/{slug}', 'ProductController@productImages');
        Route::post('product-images', 'ProductController@productImagesStore')->name('product_image.store');
        Route::get('delete-product-image/{id}', 'ProductController@productImageDelete');
        Route::post('updateProductImage', 'ProductController@updateProductImage')->name('product.productimage');

        Route::get('orders', 'OrderController@index');
        Route::get('order-details/{code}', 'OrderController@orderDetails');

        Route::get('category', 'CategoryController@index');
        Route::post('category', [CategoryController::class, 'store'])->name('category.store');
        Route::post('update-category', [CategoryController::class, 'update'])->name('category.update');
        Route::get('delete-category/{id}', 'CategoryController@destroy');
        Route::post('updateCategoryImage', 'CategoryController@updateCategoryImage')->name('category.updateCategoryImage');

        Route::get('subcategory', 'SubCategoryController@index');
        Route::post('subcategory', [SubCategoryController::class, 'store'])->name('subcategory.store');
        Route::post('update-subcategory', [SubCategoryController::class, 'update'])->name('subcategory.update');
        Route::get('delete-subcategory/{id}', 'SubCategoryController@destroy');
        Route::post('updateSubCategoryImage', 'SubCategoryController@updateSubCategoryImage')->name('category.updateSubCategoryImage');

        Route::get('child-category', [ChildCategoryController::class, 'index']);
        Route::post('child-category', [ChildCategoryController::class, 'store'])->name('child-category.store');
        Route::post('update-child-category', [ChildCategoryController::class, 'update'])->name('child-category.update');
        Route::get('delete-child-category/{id}', 'ChildCategoryController@destroy');
        Route::post('updateChildCategoryImage', 'ChildCategoryController@updateChildCategoryImage')->name('category.updateChildCategoryImage');

        Route::resource('blog', BlogController::class);

        // Route::get('blogs', [BlogController::class, 'index'])->name('blog.view');
        // Route::post('add-blogs', [BlogController::class, 'store'])->name('blog.store');
        // Route::post('update-blog', [BlogController::class, 'update'])->name('blog.update');
        Route::post('update-blog-image', [BlogController::class, 'updateBlogImage'])->name('blog.updateBlogImage');
        // Route::get('delete-blog/{id}', [BlogController::class, 'destroy'])->name('blog.deleteblog');
    });
    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});
