<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@aboutUs')->name('aboutUs');
Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/shop/showproduct', 'HomeController@showProduct')->name('shop.showProduct');



Route::middleware(['guest:admin', 'guest:company', 'guest:user'])->group(function () {
    Route::get('/admin/login', 'AdminController@showLoginForm')->name('admin.login');
    Route::get('/company/login', 'CompanyController@showLoginForm')->name('company.login');
    Route::get('/user/login', 'UserController@showLoginForm')->name('user.login');
    Route::get('/user/register', 'UserController@showRegisterForm')->name('user.register');
});


Route::middleware(['auth:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    Route::get('/profile', 'AdminController@profile')->name('profile');
    Route::get('/settings', 'AdminController@settings')->name('settings');
    Route::get('/changePassword', 'AdminController@changePassword')->name('changePassword');
    Route::get('/logout', 'AdminController@logout')->name('logout');

    Route::name('companies.')->prefix('companies')->group(function () {
        Route::get('/', 'CompanyController@showAllCompanies')->name('allCompanies');
        Route::get('/add', 'CompanyController@showAddCompanyForm')->name('addCompany');
        Route::get('/show', 'CompanyController@showCompany')->name('showCompany');
        Route::get('/edit', 'CompanyController@editCompany')->name('editCompany');
        Route::get('/delete', 'CompanyController@deleteCompany')->name('deleteCompany');

    });

    Route::name('categories.')->prefix('categories')->group(function () {
        Route::get('/', 'CategoryController@showAllCategories')->name('allCategories');
        Route::get('/add', 'CategoryController@showAddCategoryForm')->name('addCategory');
        Route::get('/edit', 'CategoryController@editCategory')->name('editCategory');
        Route::get('/delete', 'CategoryController@deleteCategory')->name('deleteCategory');

    });

    Route::name('materials.')->prefix('materials')->group(function () {
        Route::get('/', 'MaterialController@showAllMaterials')->name('allMaterials');
        Route::get('/add', 'MaterialController@showAddMaterialForm')->name('addMaterial');
        Route::get('/edit', 'MaterialController@editMaterial')->name('editMaterial');
        Route::get('/delete', 'MaterialController@deleteMaterial')->name('deleteMaterial');
    });

    Route::name('sizes.')->prefix('sizes')->group(function () {
        Route::get('/', 'SizeController@showAllSizes')->name('allSizes');
        Route::get('/add', 'SizeController@showAddSizeForm')->name('addSize');
        Route::get('/edit', 'SizeController@editSize')->name('editSize');
        Route::get('/delete', 'SizeController@deleteSize')->name('deleteSize');

    });
    Route::name('orders.')->prefix('orders')->group(function () {
        Route::get('/', 'OrderController@showAllOrders')->name('allOrders');
    });
});

Route::middleware(['auth:company'])->name('company.')->prefix('company')->group(function () {
    Route::get('/dashboard', 'CompanyController@dashboard')->name('dashboard');
    Route::get('/orders', 'CompanyController@showOrders')->name('orders');
    Route::get('/profile', 'CompanyController@profile')->name('profile');
    Route::get('/settings', 'CompanyController@settings')->name('settings');
    Route::get('/changePassword', 'CompanyController@changePassword')->name('changePassword');
    Route::get('/logout', 'CompanyController@logout')->name('logout');

    Route::name('products.')->prefix('products')->group(function () {
        Route::get('/', 'ProductController@showAllproducts')->name('allproducts');
        Route::get('/add', 'ProductController@showAddProductForm')->name('addProduct');
        Route::get('/edit', 'ProductController@editProduct')->name('editProduct');
        Route::get('/show', 'ProductController@showProduct')->name('showProduct');
        Route::get('/delete', 'ProductController@deleteProduct')->name('deleteProduct');

    });
});


Route::middleware(['auth:user'])->name('user.')->prefix('user')->group(function () {
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/settings', 'UserController@settings')->name('settings');
    Route::get('/changePassword', 'UserController@changePassword')->name('changePassword');
    Route::get('/logout', 'UserController@logout')->name('logout');
});
