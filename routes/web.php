<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PreferController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\BookingController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
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

Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('/about-us',[FrontendController::class, 'about'])->name('about_us');
Route::get('/shop-page',[FrontendController::class, 'shop'])->name('shop');
Route::get('/update-products', [FrontendController::class, 'updateProducts']);
Route::get('/contact-us',[FrontendController::class, 'contact'])->name('contact_us');
Route::get('/designer-single/{id}',[FrontendController::class, 'single_designer'])->name('designer.single');
Route::get('/designer-category/{id}',[FrontendController::class, 'designCategory'])->name('designer.category');

Route::get('/designer-category/{id}',[FrontendController::class, 'designCategory'])->name('designer.category');
//admin



//admin


//booking
Route::get('/booking-designer/{id}',[BookingController::class, 'booking_page'])->name('booking.designer');
    Route::resources([
        'booking' => BookingController::class
    ]);
//user
Route::get('/user-register',[FrontendController::class, 'user_register'])->name('user_register');
Route::get('/user-login',[FrontendController::class, 'user_login'])->name('user_login');
Route::post('/user-login-store',[FrontendController::class, 'user_login_store'])->name('user_login_store');
//user

//designer
Route::get('/designer-register',[FrontendController::class, 'designer_register'])->name('designer_register');
Route::get('/designer-login',[FrontendController::class, 'designer_login'])->name('designer_login');
Route::post('/designer-login-store',[FrontendController::class, 'designer_login_store'])->name('designer_login_store');

//designer
Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth','admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/designer-approve/{id}',[HomeController::class, 'approve_designer'])->name('approve_designer');
    Route::get('/designer-disapprove/{id}',[HomeController::class, 'disapprove_designer'])->name('disapprove_designer');
    Route::get('/product_all', [ProductController::class, 'all_product'])->name('product.all.index');

    //designer
    Route::get('/designer_admin_edit/{id}',[HomeController::class, 'designer_admin_edit'])->name('designer.admin.edit');
    Route::delete('/designer_admin/{id}',[HomeController::class, 'designer_admin_destroy'])->name('designer.admin.destroy');
    Route::put('/designer_admin_update/{id}',[HomeController::class, 'designer_admin_update'])->name('designer.admin.update');
    //designer
    Route::resources([
        'prefer' => PreferController::class,
        'contact' => ContactController::class,
        'logo' => LogoController::class,
        'about' => AboutController::class,
        'category' => CategoryController::class,
        'partner' => PartnerController::class,
        'slider' => SliderController::class,
        // 'booking' => BookingController::class
    ]);
});



Route::middleware('auth')->group(function () {
    Route::get('/all-designer',[HomeController::class, 'all_designer'])->name('all_designer');
    Route::get('/designer_edit',[HomeController::class, 'designer_edit'])->name('designer.edit');
    Route::delete('/designer/{designer}',[HomeController::class, 'designer_destroy'])->name('designer.destroy');
    Route::put('/designer-update',[HomeController::class, 'designer_update'])->name('designer.update');

    //designer_profile_update
    Route::get('/designer_info_edit',[DesignerController::class, 'designer_info_edit'])->name('designer.info.edit');
    Route::delete('/designer_info/{designer}',[DesignerController::class, 'designer_info_destroy'])->name('designer.info.destroy');
    Route::put('/designer_info_update',[DesignerController::class, 'designer_info_update'])->name('designer.info.update');


    Route::resources([
        'product' => ProductController::class
    ]);
});



require __DIR__.'/auth.php';
