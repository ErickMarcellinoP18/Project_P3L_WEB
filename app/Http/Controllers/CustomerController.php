<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Models\Customer;
use App\Mail\MailSend;
use Session;

class CustomerController extends Controller
{
    public function register()
    {
        return view('register');
    } 

    public function actionRegister(Request $request)
    {
        $str = Str::random(100);
        $customer = Customer::create([
            'nama_customer' => $request->nama_customer,
            'email'=> $request->email,
            'ulang_tahun'=> $request->ulang_tahun,
            'saldo' => 0,
            'jumlah_poin' => 0,
            'password'=> Hash::make($request->password),
            'verify_key'=> $str,
        ]);
        
        $details = [
            'nama_customer' => $request->nama_customer,
            'website' => 'Atma Kitchen',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost() . '/register/verify/' . $str
        ];
        Mail::to($request->email)->send(new MailSend($details));
        Session::flash('message', 'Link verifikasi telah dikirim ke email anda. Silakan cek email untuk mengaktifkan akun anda.');
        return redirect('register');
    }

    public function verify($verify_key)
    {
        $keyCheck = Customer::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exist();

        if($keyCheck) {
            $nama_customer = Customer::where('verify_key', $verify_key)
            ->update([
                'active' => 1,
                'email_verified_at' => date('Y-m-d H:i:s'),
            ]);
    
            return "Yeay! Verifikasi berhasil!";
        }else{
            return "Keys tidak valid.";
        }
    }
}
