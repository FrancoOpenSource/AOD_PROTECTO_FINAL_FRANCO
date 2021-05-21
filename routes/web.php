<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\HeadsetController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\ChairController;

use App\Http\Controllers\InformationController;

use App\Models\Vehicle;
use App\Models\Headset;
use App\Models\Keyboard;
use App\Models\Tv;
use App\Models\Chair;

use App\Models\User;
use App\Models\Information;


// Rutas personalizadas
Route::get('/vehicles/import', [VehicleController::class, 'import'])->name('/vehicles/import');
Route::post('/vehicles/importData', [VehicleController::class, 'importData'])->name('/vehicles/importData');
Route::get('/users/import', [UserController::class, 'import'])->name('/users/import');
Route::post('/users/importData', [UserController::class, 'importData'])->name('/users/importData');
Route::get('/vehicles/exportToXlsx', [VehicleController::class, 'exportToXlsx'])->name('/vehicles/exportToXlsx');
Route::get('/users/exportToXlsx', [UserController::class, 'exportToXlsx'])->name('/users/exportToXlsx');
Route::get('/vehicles/cards', [VehicleController::class, 'cards'])->name('/vehicles/cards');
Route::get('/vehicles/chart', [VehicleController::class, 'chart'])->name('/vehicles/chart');
Route::get('/vehicles/exportToCsv', [VehicleController::class, 'exportToCsv'])->name('/vehicles/exportToCsv');

Route::get('/headsets/import', [HeadsetController::class, 'import'])->name('/headsets/import');
Route::post('/headsets/importData', [HeadsetController::class, 'importData'])->name('/headsets/importData');
Route::get('/headsets/exportToXlsx', [HeadsetController::class, 'exportToXlsx'])->name('/headsets/exportToXlsx');
Route::get('/headsets/cards', [HeadsetController::class, 'cards'])->name('/headsets/cards');
Route::get('/headsets/chart', [HeadsetController::class, 'chart'])->name('/headsets/chart');
Route::get('/headsets/exportToCsv', [HeadsetController::class, 'exportToCsv'])->name('/headsets/exportToCsv');

Route::get('/keyboards/import', [KeyboardController::class, 'import'])->name('/keyboards/import');
Route::post('/keyboards/importData', [KeyboardController::class, 'importData'])->name('/keyboards/importData');
Route::get('/keyboards/exportToXlsx', [KeyboardController::class, 'exportToXlsx'])->name('/keyboards/exportToXlsx');
Route::get('/keyboards/cards', [KeyboardController::class, 'cards'])->name('/keyboards/cards');
Route::get('/keyboards/chart', [KeyboardController::class, 'chart'])->name('/keyboards/chart');
Route::get('/keyboards/exportToCsv', [KeyboardController::class, 'exportToCsv'])->name('/keyboards/exportToCsv');

Route::get('/tvs/import', [TvController::class, 'import'])->name('/tvs/import');
Route::post('/tvs/importData', [TvController::class, 'importData'])->name('/tvs/importData');
Route::get('/tvs/exportToXlsx', [TvController::class, 'exportToXlsx'])->name('/tvs/exportToXlsx');
Route::get('/tvs/cards', [TvController::class, 'cards'])->name('/tvs/cards');
Route::get('/tvs/chart', [TvController::class, 'chart'])->name('/tvs/chart');
Route::get('/tvs/exportToCsv', [TvController::class, 'exportToCsv'])->name('/tvs/exportToCsv');

Route::get('/chairs/import', [ChairController::class, 'import'])->name('/chairs/import');
Route::post('/chairs/importData', [ChairController::class, 'importData'])->name('/chairs/importData');
Route::get('/chairs/exportToXlsx', [ChairController::class, 'exportToXlsx'])->name('/chairs/exportToXlsx');
Route::get('/chairs/cards', [ChairController::class, 'cards'])->name('/chairs/cards');
Route::get('/chairs/chart', [ChairController::class, 'chart'])->name('/chairs/chart');
Route::get('/chairs/exportToCsv', [ChairController::class, 'exportToCsv'])->name('/chairs/exportToCsv');





// Rutas del sistema y de tipo resource
Route::get('/', function () {
    $information = Information::all();
    $vehicles = Vehicle::all()->take(4);
    $chairs = Chair::all()->take(4);
    $tvs = Tv::all()->take(4);
    $keyboards = Keyboard::all()->take(4);
    $headsets = Headset::all()->take(4);
    $user = User::all();

    return view('welcome')
        ->with('vehicles', $vehicles)
        ->with('chairs', $chairs)
        ->with('headsets', $headsets)
        ->with('tvs', $tvs)
        ->with('keyboards', $keyboards)
        ->with('information', $information);
});


Route::resources([
    'vehicles'      => VehicleController::class,
    'headsets'      => HeadsetController::class,
    'chairs'        => ChairController::class,
    'tvs'           => TvController::class,
    'keyboards'     => KeyboardController::class,
    'soporte'       => SupportController::class,
    'users'         => UserController::class,
    'information'   => InformationController::class,
]);

Auth::routes();

Route::get('vehiclesxml', function () {
    $vehicles = App\Models\Vehicle::all();
    return response()->xml(['vehicles' => $vehicles->toArray()]);
});
Route::get('chairsxml', function () {
    $chairs = App\Models\Chair::all();
    return response()->xml(['chairs' => $chairs->toArray()]);
});
Route::get('keyboardsxml', function () {
    $keyboards = App\Models\Keyboard::all();
    return response()->xml(['keyboards' => $keyboards->toArray()]);
});
Route::get('headsetsxml', function () {
    $headsets = App\Models\Headset::all();
    return response()->xml(['headsets' => $headsets->toArray()]);
});
Route::get('tvsxml', function () {
    $tvs = App\Models\Tv::all();
    return response()->xml(['tvs' => $tvs->toArray()]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
