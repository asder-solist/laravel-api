<?php
use\App\MAnufacturer;
use\App\Http\Resources\ManufacturerResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/manufacturers', function()
{
   return ManufacturerResource::collection(Manufacturer::all());
});
Route::get('/best_manufacturer', function()
{
   return new ManufacturerResource(Manufacturer::find(10));
});
