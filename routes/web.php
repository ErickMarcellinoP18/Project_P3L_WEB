<?php

use App\Http\Controllers\PenitipController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BahanBakuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\HampersController;
use App\Http\Controllers\PembelianBahanBakuController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PengeluaranLainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;


Route::get('/', function () {
    return view('/homePage');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionLogin', [LoginController::class, 'actionLogin'])->name('actionLogin');

Route::get('logout', [LoginController::class, 'actionLogout'])->name('actionLogout')->middleware('auth');
Route::get('home ', [HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionRegister'])->name('actionRegister');
Route::get('register/verify/{verify_key}', [RegisterController::class, 'verify'])->name('verify');

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');


Route::get('/admin', function () {
    return view('admin/dashboardPage');
});

Route::get('/mo', function () {
    return view('mo/dashboardPage');
});

Route::get('/owner', function () {
    return view('owner/dashboardPage');
});

Route::get('/loginAdmin', function () {
    return view('admin/loginAdminPage');
});

// Route::get('/customer_admin', function () {
//     return view('admin/dataCustomer/index');
// });

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);
 
    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));
 
            $user->save();
 
            event(new PasswordReset($user));
        }
    );
 
    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');


Route::get("/customer_admin", 'App\Http\Controllers\UserController@adminindex')->name('customer_admin.index');
Route::get('/produk/createTitipan', 'App\Http\Controllers\ProdukController@createTitipan')->name('produk.createTitipan');
Route::resource('/produk', ProdukController::class);
Route::resource('/hampers', HampersController::class);
Route::resource('/beliBahan', PembelianBahanBakuController::class);
Route::resource('/bahan_baku', BahanBakuController::class);
Route::resource('/penitip', PenitipController::class);
Route::resource('/pengeluaran_lain', PengeluaranLainController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/resep', ResepController::class);
