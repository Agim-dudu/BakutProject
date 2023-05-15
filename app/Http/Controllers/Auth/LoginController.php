<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            // Tangani kesalahan yang terjadi saat mengambil data pengguna dari Google
            return redirect('/login')->with('error', 'Terjadi kesalahan saat autentikasi dengan Google.');
        }

        // Cari pengguna berdasarkan email
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Autentikasi pengguna yang sudah ada
            Auth::login($existingUser, true);
        } else {
            // Buat pengguna baru jika belum ada
            $newUser = new User;
            $newUser->name = $user->name;
            $newUser->email = $user->email;
            $newUser->password = bcrypt('your-random-password');
            $newUser->save();
            Auth::login($newUser, true);
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
