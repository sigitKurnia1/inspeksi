<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BridgeController;
use App\Http\Controllers\Admin\MonitoringController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Guest Route
Route::group(['middleware' => 'guest'], function() {
    // Auth Route
    Route::get('/', function () {
        return view('login');
    })->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('post.login');
});

// Admin Route
Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    // Bridge Route
    Route::get('/bridge', [BridgeController::class, 'index'])->name('bridge');
    Route::get('/bridge/create', [BridgeController::class, 'create'])->name('bridge.create');
    Route::post('/bridge/store', [BridgeController::class, 'store'])->name('bridge.store');
    Route::get('/bridge/detail/{id}', [BridgeController::class, 'show'])->name('bridge.detail');
    Route::get('/bridge/edit/{id}', [BridgeController::class, 'edit'])->name('bridge.edit');
    Route::post('/bridge/update/{id}', [BridgeController::class, 'update'])->name('bridge.update');
    Route::delete('/bridge/delete/{id}', [BridgeController::class, 'delete'])->name('bridge.delete');

    // Monitoring Route
    Route::get('/bridge/monitoring/create/{id}', [MonitoringController::class, 'create'])->name('bridge.monitoring.create');
    Route::post('/bridge/monitoring/create/a5', [MonitoringController::class, 'store_a5'])->name('store.a5');
    Route::post('/bridge/monitoring/create/a6', [MonitoringController::class, 'store_a6'])->name('store.a6');
    Route::post('/bridge/monitoring/create/a9', [MonitoringController::class, 'store_a9'])->name('store.a9');
    Route::post('/bridge/monitoring/create/a10', [MonitoringController::class, 'store_a10'])->name('store.a10');

    // Laporan Route
    Route::get('/laporan/a5', [MonitoringController::class, 'laporan_a5'])->name('laporan.a5');
    Route::get('/laporan/a6', [MonitoringController::class, 'laporan_a6'])->name('laporan.a6');
    Route::get('/laporan/a9', [MonitoringController::class, 'laporan_a9'])->name('laporan.a9');
    Route::get('/laporan/a10', [MonitoringController::class, 'laporan_a10'])->name('laporan.a10');
    Route::get('/laporan/a5/{id}', [MonitoringController::class, 'detail_a5'])->name('detail.a5');
    Route::get('/laporan/a6/{id}', [MonitoringController::class, 'detail_a6'])->name('detail.a6');
    Route::get('/laporan/a9/{id}', [MonitoringController::class, 'detail_a9'])->name('detail.a9');
    Route::get('/laporan/a10/{id}', [MonitoringController::class, 'detail_a10'])->name('detail.a10');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
