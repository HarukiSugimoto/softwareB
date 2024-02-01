<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/software/home', [MemberController::class, 'index'])->name('software.index');
Route::get('/software/ramen', [MemberController::class, 'ramen'])->name('software.ramen');
Route::get('/software/create', [MemberController::class, 'create'])->name('software.create');
Route::post('/software/store', [MemberController::class, 'store'])->name('software.store');
Route::get('/software/chat', [MemberController::class, 'chat'])->name('software.chat');
Route::get('/software/attend', [MemberController::class, 'attend'])->name('software.attend');
Route::get('/software/analysis', [MemberController::class, 'analysis'])->name('software.analysis');
// Route::resource('software', MemberController::class);
require __DIR__.'/auth.php';
