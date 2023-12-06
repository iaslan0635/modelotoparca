<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Route;

/*
 *
 * HOHOHOHOHOHOHO
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post("/git-webhook", function () {
    Log::info("ACK");
    set_time_limit(0);
    $res = Process::run(["bash", "deploy.sh"]);
    Log::debug($res->output());
});

