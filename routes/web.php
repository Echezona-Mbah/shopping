<?php

use App\Http\Controllers\ProfileController;
use App\Models\CartItem;
use App\Models\User;
use App\Models\Watch;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $watchs = Watch::take(3)->get();
    return view('welcome', compact('watchs'));
});


Route::get('/dashboard', function () {
    $CartItemCount = CartItem::count();
    $watch = Watch::count();
    $user = User::count();
    $cartitems = CartItem::all();


    // dd($CartItemCount);die();

    return view('admin.dashboard', compact('CartItemCount','watch','user','cartitems'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/clear-all', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode .= Artisan::call('config:clear');
    $exitCode .= Artisan::call('route:clear');
    $exitCode .= Artisan::call('view:clear');
    $exitCode .= Artisan::call('clear-compiled');
    // Add more commands if needed

    return 'All caches and configurations cleared successfully.';
});

require __DIR__.'/auth.php';
