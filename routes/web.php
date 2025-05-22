<?php

use App\Http\Controllers\AdminOrderController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AllProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserOrderController;

Route::get('/', [ProductController::class, "index"])->name('public.index');
Route::get('/kontakt-pocetna', [ProductController::class, "kontakt"])->name('public.kontakt');
Route::get('/svi-proizvodi', [AllProductController::class, "list"])->name('public.list');
Route::get('/proizvod/{id}', [AllProductController::class, 'single'])->name('public.single');



// ADMIN LISTA I DODAVANJE

Route::get('/admin-list',[AdminProductController::class, 'list'])->name('admin-list');
Route::get('/admin-add',[AdminProductController::class,'add'])->name('admin-add');
Route::post('/admin-create',[AdminProductController::class,'create'])->name('admin-create');

//admin orders
Route::get('/admin-orders',[AdminOrderController::class, 'index'])->name('admin-orders');
Route::post('/admin/orders/{id}/status', [AdminOrderController::class, 'updateStatus'])->name('admin.orders.updateStatus');



// ADMIN EDITOVANJE I BRISANJE

Route::get('/admin-edit/{id}', [AdminProductController::class, 'edit'])->name('admin-edit');
Route::put('/admin-update/{id}', [AdminProductController::class, 'update'])->name('admin-update');
Route::get('/admin-destroy/{id}',[AdminProductController::class, 'destroy'])->name('admin-destroy');


// KATEGORIJE EDIT I BRISANJE

Route::get('/category-edit/{id}', [CategoryController::class, 'edit'])->name('category-edit');
Route::put('/category-update/{id}', [CategoryController::class, 'update'])->name('category-update');
Route::get('/category-destroy/{id}',[CategoryController::class, 'destroy'])->name('category-destroy');

// KATEGORIJE ADD

Route::get('/category-add',[CategoryController::class,'add'])->name('category-add');
Route::post('/category-create',[CategoryController::class,'create'])->name('category-create');



// RUTE ZA PREUSMERAVANJE NA DASHBOARD NA OSNOVU NALOGA

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard')->middleware('auth');

Route::get('/editor-dashboard', function () {
    return view('editor.dashboard');
})->name('editor.dashboard')->middleware('auth');

Route::get('/user-dashboard', function () {
    return view('user.dashboard');
})->name('user.dashboard')->middleware('auth');


// RUTE ZA PORUDZBINE I DODAJ NOVU PORUDZBINU

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/moje-porudzbine', [UserOrderController::class, 'orders'])->name('user.orders');
    Route::get('/moje-porudzbine/create', [UserOrderController::class, 'create'])->name('user.create');
    Route::post('/moje-porudzbine', [UserOrderController::class, 'store'])->name('user.store');

    Route::get('/moje-porudzbine/{id}', [UserOrderController::class, 'destroy'])->name('user.orders.destroy');
    Route::get('/moje-porudzbine/{id}/edit', [UserOrderController::class, 'edit'])->name('user.edit');
    Route::put('/moje-porudzbine/{id}', [UserOrderController::class, 'update'])->name('user.update');
    
    

});


// RUTE ZA OCENE

Route::middleware(['auth', 'verified'])->group(function () {

     //dodaj novi komentar
    Route::get('/comments/create', [CommentController::class, 'create'])->name('user.create-comment');
    Route::post('/comments', [CommentController::class, 'store'])->name('user.comments-store');

    Route::get('/comments', [CommentController::class, 'comments'])->name('user.comments');
    Route::get('/comments/{id}', [CommentController::class, 'destroy'])->name('user.comments.destroy');

    // edit
    Route::get('/comments/{id}/edit', [CommentController::class, 'edit'])->name('user.comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('user.comments.update');

   


});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
