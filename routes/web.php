<?php

use App\Http\Controllers\adminBackendUpload;
use App\Models\Bike;
use App\Models\bikeDetail;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     $bikes = bikeDetail::all();
//     return view('welcome', ['bikes' => $bikes]);
//     // return view('welcome');
// });
Route::get('/admin', function () {
    return view('adminDashboard');
});
Route::post('/upload', [adminBackendUpload::class, 'index'])->name('upload.image');

Route::get('/', function () {
    $bikes = bikeDetail::whereIn('name', ['TVS Raider 125', 'KTM Duke 200', 'Yamaha Fz V2', 'Bajaj Pular NS 200'])->get();
    return view('home', ['bikes' => $bikes]);
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

Route::get('/termcondition', function () {
    return view('termcondition');
})->name('termcondition');
Route::get('/privacypolicy', function () {
    return view('privacypolicy');
})->name('privacypolicy');
Route::get('/findnewbike', function () {
    $bikes = bikeDetail::all();
    return view('findnewbike', ['bikes' => $bikes]);
})->name('findnewbike');

Route::get('/article', function () {
    return view('article');
})->name('article');
Route::get('/bikepricelist', function () {
    return view('bikepricelist');
})->name('bikepricelist');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/scooterspricelist', function () {
    return view('scooterspricelist');
})->name('scooterspricelist');
Route::get('/showroom', function () {
    return view('showroom');
})->name('showroom');
Route::get('/taxcalculation', function () {
    return view('taxcalculation');
})->name('taxcalculation');

Route::get('/comparebikes', function () {
    return view('comparebikes');
})->name('comparebikes');
Route::get('/bikedetail/{id}', function ($id) {
    $bikeFullDetail = bikeDetail::find($id);
    // return response('yo id ayo hai' . $id);
    return view('bikeDetail', ['detail' => $bikeFullDetail]);
});
Route::get('/more', function () {
    $b = bikeDetail::all();
    return view('moreOption', ['bikes' => $b]);
});
Route::get('/delete/{id}', function ($id) {
    $bikeFullDetail = bikeDetail::find($id);

    if ($bikeFullDetail) {
        $bikeFullDetail->delete();
        $b = bikeDetail::all();
        return view('moreOption', ['bikes' => $b]);
    } else {
        // Handle the case where the record with the specified ID was not found
        return response('Error while deleteing product');
    }
});
Route::get('/edit/{id}', function ($id) {
    $bikeFullDetail = bikeDetail::find($id);
    return view('editDetail', ['bike' => $bikeFullDetail]);
});
Route::post('/update', [adminBackendUpload::class, 'handleEdit']);
Route::post('/search', function (Request $request) {
    // Retrieve the search term from the request
    $searchTerm = $request->input('search');

    // Retrieve the IDs of matching rows
    $searchResultsIds = bikeDetail::where('name', 'LIKE', '%' . $searchTerm . '%')->pluck('id');

    // Find all rows that match the IDs
    $searchResults = bikeDetail::whereIn('id', $searchResultsIds)->get();

    // Pass the search results to the view
    return view('findnewbike', ['bikes' => $searchResults]);
});
