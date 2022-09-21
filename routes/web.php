<?php

use App\Models\Student;
use App\Models\StudentDetail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\ContributorController;
use App\Http\Controllers\StudentController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::resource('dashboard', DashboardController::class);
Route::resource('department', DepartmentController::class);
Route::resource('designation', DesignationController::class);
Route::resource('employee', EmployeeController::class);
Route::resource('skill', SkillController::class);
Route::resource('project', ProjectController::class);
Route::resource('role', RoleController::class);


Route::get('admin/book/list/', [BookController::class, 'index'])->name('admin.book.list');
Route::get('admin/book/create/', [BookController::class, 'create'])->name('admin.book.create');
Route::post('admin/book/store/', [BookController::class, 'store'])->name('admin.book.store');
Route::get('admin/book/edit/{id}', [BookController::class, 'edit'])->name('admin.book.edit');
Route::put('admin/book/update/{id}', [BookController::class, 'update'])->name('admin.book.update');
Route::get('admin/book/delete/{id}', [BookController::class, 'delete'])->name('admin.book.delete');



Route::get('admin/book-category/list/', [BookCategoryController::class, 'index'])->name('admin.book.category.list');
Route::get('admin/book-category/create/', [BookCategoryController::class, 'create'])->name('admin.book.category.create');
Route::post('admin/book-category/store/', [BookCategoryController::class, 'store'])->name('admin.book.category.store');
Route::get('admin/book-category/edit/{id}', [BookCategoryController::class, 'edit'])->name('admin.book.category.edit');
Route::put('admin/book-category/update/{id}', [BookCategoryController::class, 'update'])->name('admin.book.category.update');
Route::get('admin/book-category/delete/{id}', [BookCategoryController::class, 'delete'])->name('admin.book.category.delete');


Route::get('admin/contributor/list/', [ContributorController::class, 'index'])->name('admin.contributor.list');
Route::get('admin/contributor/create/', [ContributorController::class, 'create'])->name('admin.contributor.create');
Route::post('admin/contributor/store/', [ContributorController::class, 'store'])->name('admin.contributor.store');
Route::get('admin/contributor/edit/{id}', [ContributorController::class, 'edit'])->name('admin.contributor.edit');
Route::put('admin/contributor/update/{id}', [ContributorController::class, 'update'])->name('admin.contributor.update');
Route::put('admin/contributor/delete/{id}', [ContributorController::class, 'delete'])->name('admin.contributor.delete');












Route::get('admin/student/list/', [StudentController::class, 'index'])->name('admin.student.list');
Route::get('admin/student/create/', [StudentController::class, 'create'])->name('admin.student.create');
Route::post('admin/student/store/', [StudentController::class, 'store'])->name('admin.student.store');
Route::get('admin/student/edit/{id}', [StudentController::class, 'edit'])->name('admin.student.edit');
Route::put('admin/student/update/{id}', [StudentController::class, 'update'])->name('admin.student.update');
Route::get('admin/student/delete/{id}', [StudentController::class, 'delete'])->name('admin.student.delete');

