<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

Route::resource('groups', GroupController::class);
Route::resource('groups.students', StudentController::class)->shallow();
