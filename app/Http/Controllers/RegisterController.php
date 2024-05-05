<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\User;
use App\Mail\MailSend;
use Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('loginPage');
    }

    public function actionRegister(Request $request)
    {
        $str = Str::random(100);
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'saldo' => 0,
            'verify_key' => $str,
        ]);

        $details = [
            'username' => $request->name,
            'website' => 'Atma Kitchen',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . 'register/verify/' . $str,
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('Pesan', 'Silakan cek email Anda untuk verifikasi akun .');
        return view('loginPage');
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
        ->where('verify_key', $verify_key)
        ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
            ->update([
                'active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);

            
            return "Akun Anda telah diverifikasi. Silakan login.";
        } else {
            
            return "Verifikasi gagal. Silakan coba lagi.";
        }
    }
}
