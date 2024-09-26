<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllre;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\teacherController;
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
Route::get('course',[CoursesController::class,'list'])->name('course.list');

Route::get('course1/{id}',[CoursesController::class,'show'])->name('course.show');
// Route::get('course1', function () {
//     return view('course1');
// });
Route::get('course2', function () {
    return view('course2');
});
Route::get('course3', function () {
    return view('course3');
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

Route::get('courses/{id}/edit', function () {
        return view('edit_course');
    });

Route::get('edit_teacher', function () {
            return view('edit_teacher');
        });

// Route::get('admin', function () {
//     return view('admin');
// });
// เพิ่ม Route สำหรับ admin
Route::get('/admin', [CoursesController::class, 'index2'])->name('admin');

// เพิ่ม Route อื่นๆ ที่จำเป็นตามที่คุณต้องการ
Route::resource('courses', CoursesController::class);
Route::get('admin_course1', function () {
    return view('admin_course1');
});
// Route::get('admin_teacher', function () {
//     return view('admin_teacher');
// });


Route::get('/loginpages', [AuthControllre::class, 'index'])->name('loginpages');
Route::post('/loginpages', [AuthControllre::class, 'login'])->name('loginpages');
Route::post('/loginpages', [AuthControllre::class, 'login'])->name('login');


Route::post('/logout', [AuthControllre::class, 'logout'])->name('logout')->middleware('auth');




Route::resource('teachers', TeachersController::class);

// Route::get('/login', [CoursesController::class, 'index'])->name('login');

// เส้นทางสำหรับ admin
Route::get('/admin', [CoursesController::class, 'listCourses'])->name('admin')->middleware('auth');
Route::get('/admin_teacher', [TeachersController::class, 'list'])->name('admin_teacher');
// เส้นทางสำหรับผู้สอน
Route::resource('teachers', TeachersController::class);
Route::get('/teachers', [TeachersController::class, 'list'])->name('teachers.list');
Route::get('/teachers/create', [TeachersController::class, 'create'])->name('teachers.create')->middleware('auth');
Route::post('/teachers', [TeachersController::class, 'store'])->name('teachers.store');
Route::get('/teachers/{id}/edit', [TeachersController::class, 'edit'])->name('teachers.edit')->middleware('auth');
Route::put('/teachers/{id}/update', [TeachersController::class, 'update'])->name('teachers.update')->middleware('auth');
Route::delete('/{id}', [TeachersController::class, 'destroy'])->name('teachers.destroy');



Route::get('teacher', [TeachersController::class,'detaillist'])->name('teacher.list');

// เส้นทางสำหรับคอร์ส
Route::resource('courses', CoursesController::class);
Route::get('/courses', [CoursesController::class, 'listCourses'])->name('courses.list');
Route::get('/courses/create', [CoursesController::class, 'create'])->name('courses.create');
Route::post('/courses', [CoursesController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}/edit', [CoursesController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}/update', [CoursesController::class, 'update'])->name('courses.update');
Route::delete('/courses/{id}', [CoursesController::class, 'destroy'])->name('courses.destroy');

