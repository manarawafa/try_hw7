<?php
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckAge;
use App\Http\Middleware\CheckRole;


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

// Route::get('/customer', [CustomerController::class, 'index']);
// Route::get('/data', [CustomerController::class, 'custdata']);
// Route::get('/test', TestController::class);
// Route::resource('/photos', PhotoController::class);

Route::get('/', function () {
    return view('welcome');
});

///HW5/////////////////////////////
Route::get('/user/{role}', [UserController::class, 'index'])->name('home_us')->middleware('CheckRole');

Route::get('/contact_User', [UserController::class, 'contact'])->name('contact_us');
//////////////////////////////////
///////////////////////////
///////////////////////
//Route::get('/contactUser/{age}', [UserController::class, 'contact'])->name('contact_us')->middleware('checkAge');

Route::get('/aboutUser', [UserController::class, 'about'])->name('about_us');

//////////////////////////////////////////
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/test1', function () {
    echo "hello world";
});
Route::get('categories/mobile', function () {
    return 'hello from mobile';
});

// Route::get('user/edit/{name}', function ($name) {
//     return "<h2> welcome ... $name </h2>";

// });

// Route::get('user/delete/{id}', function () {
//     return "<h2> deleted user </h2>";
// });

// Route::get('user/{name}/profile/{id}', function ($name, $id) {
//     return "user $name profile $id";
// });


Route::prefix('user')->group(function () {
    Route::get('edit/{name}', function ($name) {
        return "<h2> welcome ... $name </h2>";

    });
    Route::get('delete/{id}', function () {
        return "<h2> deleted user </h2>";
    });
    Route::get('user/{name}/profile/{id}', function ($name, $id) {
        return "user $name profile $id";
    });

});



Route::get('/car/{id?}/{name}', function ($id = 0, $name) {
    return "The id is: $id  $name";
})->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);

Route::prefix('cars')->group(function () {
    Route::get('bmw', function () {
        return 'BMW page';
    });
    Route::get('mercedes', function () {
        return 'Mercedes page';
    });
});

// route::fallback(function () {
//     return redirect('/');
// });
Route::get('/getform', function () {
    return view('form');
});

//Route::view('gethome','home');
Route::get('/gethome', function () {
    $data = ['username' => 'fofa', 'email' => "munno@htmail.com"];
    return view('home', $data);
})->name('home');
Route::post('receive', function () {
    return view('form2');
})->name('receive');

///new hw3
// Route::get('/home_hw', function () {

//     return view('home_us');
// })->name('home_us');
// Route::get('/about_us', function () {

//     return view('about_us');
// })->name('about_us');
// Route::get('/contact_us', function () {

//     return view('contact_us');
// })->name('contact_us');














