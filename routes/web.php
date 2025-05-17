<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ImageController;
use App\Http\Controllers\EventController;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ThemeController;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Route::prefix('admin')->middleware('auth', 'is_admin')->group(function () {
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/activity', [AdminController::class, 'activity'])->name('admin.activity');
    Route::get('/uploads', [AdminController::class, 'uploads'])->name('admin.uploads');
    Route::get('/admin_news', [AdminController::class, 'news'])->name('admin.news');
    Route::get('/enquiries', [AdminController::class, 'enquiries'])->name('admin.emails');
    Route::get('/transactions', [AdminController::class, 'transactions'])->name('admin.transactions');
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');

    // news
    Route::resource('news', NewsController::class);
    //music
    Route::resource('music', MusicController::class);
    // images
    Route::resource('images', ImageController::class);
    // events 
    Route::resource('events', EventController::class);
});
// Home Controllers methods 
Route::get('/membership', [HomeController::class, 'membership'])->name('membership');
Route::get('/loadingscreen', [HomeController::class, 'loadingscreen'])->name('loading-screen');
Route::get('/contacts', [HomeController::class, 'contacts'])->name('contact');
Route::get('/musics', [HomeController::class, 'music'])->name('music');
Route::get('/dpp_events', [HomeController::class, 'events'])->name('events');
Route::get('/dpp_news', [HomeController::class, 'news'])->name('news');
Route::get('/news_detail/{id}', [HomeController::class, 'news_detail'])->name('news_detail');
Route::get('/donate', [HomeController::class, 'donate'])->name('donate');
Route::get('/policies', [HomeController::class, 'policies'])->name('policies');
Route::get('/codes_of_conduct', [HomeController::class, 'code_of_conduct'])->name('code_of_conduct');
Route::get('/manifesto2019', [HomeController::class, 'manifesto2019'])->name('manifesto2019');
Route::get('/manifesto2025', [HomeController::class, 'manifesto2025'])->name('manifesto2025');
Route::get('/volunteer', [HomeController::class, 'volunteer'])->name('volunteer');



// partials

Route::get('/partials/footer', function () {
    return view('partials.footer');
});

Route::get('/partials/history', function () {
    return view('partials.history');
});

// ThemeController

Route::post('/toggle-theme', [ThemeController::class, 'toggle'])->name('toggle.theme');
