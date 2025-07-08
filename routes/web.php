<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReportController;

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

Route::get('/', function () {
    return view('welcome');
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

Route::middleware(['auth'])->group(function () {
    Route::resource('authors', AuthorController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class);
});

Route::get('/report-form', [ReportController::class, 'form'])->name('report.form');
Route::post('/generate-report', [ReportController::class, 'generate'])->name('report.generate');

Route::get('/dashboard', function () {
    $totalBooks = \App\Models\Book::count();
    $totalAuthors = \App\Models\Author::count();

    return view('dashboard', compact('totalBooks', 'totalAuthors'));
})->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

