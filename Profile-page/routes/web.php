<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'about'])->name('about');
Route::get('/project', [PageController::class, 'project'])->name('project');
