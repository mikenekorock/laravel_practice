<?php

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
    return view('welcome');
});
Route::get('hello', function () {
  return '
<html lang="en">
<head>
  <title>コントローラーに直接html入れられる</title>
</head>
<body>
<h1>aaaa</h1>
</body>
</html>';
});
