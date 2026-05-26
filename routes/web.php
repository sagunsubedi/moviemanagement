<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/movies');
    }
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/my_search', [MoviesController::class, 'my_search'])->name('my_search');

Route::middleware(['auth'])->group(function () {

    Route::get('/movies', [MoviesController::class, 'index'])->name('movies.index');

    
    Route::middleware(['admin'])->group(function () {

        Route::get('/movies/create', [MoviesController::class, 'create'])->name('movies.create');

        Route::post('/movies', [MoviesController::class, 'store'])->name('movies.store');

        Route::get('/movies/{movie}/edit', [MoviesController::class, 'edit'])->name('movies.edit');

        Route::put('/movies/{movie}', [MoviesController::class, 'update'])->name('movies.update');
        Route::patch('/movies/{movie}', [MoviesController::class, 'update']);

        Route::delete('/movies/{movie}', [MoviesController::class, 'destroy'])->name('movies.destroy');

    });
    
 Route::get('/movies/{movie}', [MoviesController::class, 'show'])->name('movies.show');     
   
});