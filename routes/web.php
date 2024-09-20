<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllre;
use App\Http\Controllers\CoursesController;
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('category', function () {
    return view('category');
});
Route::get('place', function () {
    return view('place');
});
Route::get('place1', function () {
    return view('place1');
});

Route::get('place2', function () {
    return view('place2');
});
Route::get('place3', function () {
    return view('place3');
});
Route::get('boxing', function () {
    return view('boxing');
});
Route::get('boxing1', function () {
    return view('boxing1');
});
Route::get('boxing2', function () {
    return view('boxing2');
});
Route::get('boxing3', function () {
    return view('boxing3');
});
Route::get('boxing4', function () {
    return view('boxing4');
});
Route::get('boxing5', function () {
    return view('boxing5');
});
Route::get('course', function () {
    return view('course');
});
Route::get('course1', function () {
    return view('course1');
});
Route::get('course2', function () {
    return view('course2');
});
Route::get('course3', function () {
    return view('course3');
});
Route::get('teacher', function () {
    return view('teacher');
});
Route::get('contact', function () {
    return view('contact');
});


// Route::get('login', function () {
//     return view('login');
// });
Route::get('add_course', function () {
    return view('add_course');

});
Route::get('add_teacher', function () {
        return view('add_teacher');
    });

Route::get('edit_course', function () {
        return view('edit_course');
    });
Route::get('edit_teacher', function () {
            return view('edit_teacher');
        });

// Route::get('admin', function () {
//     return view('admin');
// });

Route::get('admin_course1', function () {
    return view('admin_course1');
});
Route::get('admin_teacher', function () {
    return view('admin_teacher');
});


Route::get('/loginpages', [AuthControllre::class, 'index'])->name('loginpages');

Route::post('/login', [AuthControllre::class, 'login'])->name('login');
Route::post('/logout', [AuthControllre::class, 'logout'])->middleware('auth'); // ออกจากระบบต้องเข้าสู่ระบบแล้วก่อน



// Route::get('/login', [CoursesController::class, 'index'])->name('login');
Route::get('admin', [CoursesController::class, 'listCourses'])->name('courses.list');
// Route::get('admin', [CoursesController::class, 'listCourses'])->name('courses.list');
Route::get('create', [CoursesController::class, 'create'])->name('courses.create');
Route::post('courses', [CoursesController::class, 'store'])->name('courses.store');
Route::get('courses/{id}/edit', [CoursesController::class, 'edit'])->name('courses.edit');
Route::put('courses/{id}', [CoursesController::class, 'update'])->name('courses.update');
Route::delete('courses/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');
