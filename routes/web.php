<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EliminarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\VillarController;
use Illuminate\Support\Facades\Route;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
/*
index   GET
store   POST
create  GET
edit    GET
show    GET
update  PUT
destroy DELETE
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function(){
    return view('admin');
});
Route::get('/prueba/{dato}',[EliminarController::class,'index']);


// Route::get('/ver/{id}',[ProfileController::class,'index']);


// Route::get('/ver/{iden}', [ProfileController::class,'index']);
// >>>>>>> 4038f5b35b565a44c11c39a336534bd5a5520616

Route::group(['prefix'=>'admin','as'=>'admin'],function(){
    Route::get('/',[AdminController::class,'index']);
    Route::get('/usuario',[UsersController::class,'index']);

    Route::resource('/usuario',UsersController::class);
});

// Route::group(['prefix'=>'lara','as'=>'lara'],function(){
// });
// Route::get('/cursos',[VillarController::class,'index'])->name('cursos.index');
// Route::get('/cursos/create',[VillarController::class,'create'])->name('cursos.create');
// Route::post('cursos',[VillarController::class,'store'])->name('cursos.store');
// Route::get('/cursos/{curso}',[VillarController::class,'show'])->name('cursos.show');
// Route::get('cursos/{curso}/edit',[VillarController::class,'edit'])->name('cursos.edit');
// Route::put('cursos/{curso}',[VillarController::class,'update'])->name('cursos.update');
// Route::delete('cursos/{curso}',[VillarController::class,'destroy'])->name('cursos.destroy');

Route::resource('asignatura',VillarController::class)->parameters(['asignatura'=>'curso'])->names('cursos');
// Route::resource('asignaturas',VillarController::class)->parameters(['asignaturas'=>'curso'])->names('cursos');
Route::get('contactanos',function(){
    $correo = new ContactanosMailable;
    Mail::to('jhonatanchupex@gmail.com')->send($correo);
    return 'mensaje enviado';
});