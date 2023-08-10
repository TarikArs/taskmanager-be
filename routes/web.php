<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

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
    /** check if mongodb functional */

    // $collection = (new MongoDB\Client)->test->users;



    Task::create([
        'title' => 'Task 1',
        'description' => 'Description 1',
        'status' => 'pending',
    ]);
});
