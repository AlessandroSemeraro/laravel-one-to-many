<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('/auth/login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function() {

    Route::get('/projects', [AdminProjectsController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [AdminProjectsController::class, 'create'])->name('projects.create');
    Route::post('/projects', [AdminProjectsController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project}', [AdminProjectsController::class, 'show'])->name('projects.show'); 
    Route::get('/projects/{project}/edit', [AdminProjectsController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [AdminProjectsController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [AdminProjectsController::class, 'delete'])->name('projects.destroy');
    });
