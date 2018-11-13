<?php

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

Route::get('/dictionary', function () {
    return view('dictionary');
});


Route::post('/dictionary', function (Illuminate\Http\Request $request) {
    $dictionary = array(
        "hello" => "xin chào",
        "how" => "thế nào",
        "book" => "quyển vở",
        "computer" => "máy tính");

    foreach ($dictionary as $word => $description) {
        if ($request->search == $word) {
            return view('mean', [
                'dictionary' => $dictionary
            ]);
        }
    }
    return view('find_error');
});