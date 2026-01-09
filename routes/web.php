<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\ACWController;
use App\Http\Controllers\CWController;
use App\Http\Controllers\IRCController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MlController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\BgtController;
use Illuminate\Support\Facades\Route;

Route::fallback(function () {
    return redirect('/home'); 
});

Route::get('/', [LandingPageController::class, 'showInfo'])->name('landingpage');
Route::get('/home', [LandingPageController::class, 'showInfo2'])->name('dashboard');

Route::get('/mobilelegendinfo', [MlController::class, 'showInfo'])->name('mobilelegendinfo');
Route::get('/binusgottalentinfo', [BgtController::class, 'showInfo'])->name('binusgottalentinfo');
Route::get('/artcraftworkshopinfo', [ACWController::class, 'showInfo'])->name('artcraftworkshop');
Route::get('/instagramreels', [IRCController::class, 'showInfo'])->name('instagramreels');
Route::get('/coswalkinfo', [CWController::class, 'showInfo'])->name('coswalkinfo');

Route::get('/news', [NewsController::class, 'paginate'])->name('news.paginate');
Route::get('/addnews', [NewsController::class, 'showForm'])->name('news.addnews');
Route::post('/newsregistration', [NewsController::class, 'submitForm'])->name('newsregistration');
Route::get('/news/{id}', [NewsController::class, 'showDetail'])->name('news.showDetail');
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.delete');
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');

Route::middleware('auth')->group(function () {
    Route::get('/mobilelegendterms', [MlController::class, 'showTerms'])->name('mobilelegendterms');
    Route::get('/mobilelegend', [MlController::class, 'showForm'])->name('mobilelegend');
    Route::post('/mobilelegendterms', [MlController::class, 'termCheck'])->name('mobilelegendtermscheck');
    Route::post('/mobilelegendregistration', [MlController::class, 'submitForm'])->name('mobilelegendregistration')->middleware('throttle:10,1');
    Route::get('/download-receipt/{id}', [MlController::class, 'downloadReceipt'])->middleware('throttle:5,1');
    Route::get('/whatsapp-group', [MlController::class, 'showWhatsAppGroup'])->name('whatsapp.group');
    
    Route::get('/binusgottalentterms', [BgtController::class, 'showTerms'])->name('binusgottalentterms');
    Route::post('/binusgottalent', [BgtController::class, 'showForm'])->name('binusgottalent');
    Route::post('/binusgottalentterms', [BgtController::class, 'termCheck'])->name('binusgottalenttermscheck');
    Route::post('/binusgottalentregistration', [BgtController::class, 'submitForm'])->name('binusgottalentregistration')->middleware('throttle:10,1');;
    Route::get('/download-receipt/{id}', [BgtController::class, 'downloadReceipt'])->middleware('throttle:5,1');
    
    Route::get('/coswalkterms', [CWController::class, 'showTerms'])->name('coswalkterms');
    Route::post('/coswalk', [CWController::class, 'showForm'])->name('coswalk');
    Route::post('/coswalkterms', [CWController::class, 'termCheck'])->name('coswalktermscheck');
    Route::post('/coswalkregistration', [CWController::class, 'submitForm'])->name('coswalkregistration')->middleware('throttle:10,1');
    Route::get('/download-receipt/{id}', [CWController::class, 'downloadReceipt'])->middleware('throttle:5,1');
});

Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle'])->name('redirect.google');
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/order',[App\Http\Controllers\OrderController::class,'index'])->name('order');
    Route::post('/create-invoice',[App\Http\Controllers\OrderController::class,'createInvoice'])->name('createInvoice');
});

Route::post('/notification',[App\Http\Controllers\OrderController::class,'notificationCallback'])->name('notification');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/ml', function () {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        return app(App\Http\Controllers\AdminController::class)->index();
    })->name('admin.ml.index');

    Route::get('/admin/ml/download/{id}', function ($id) {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        return app(App\Http\Controllers\AdminController::class)->download($id);
    })->name('admin.ml.download');

    Route::delete('/admin/ml/delete/{id}', function ($id) {
        if (auth()->user()->role !== 'admin') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        return app(App\Http\Controllers\AdminController::class)->destroy($id);
    })->name('admin.ml.delete');
});

require __DIR__.'/auth.php';    
