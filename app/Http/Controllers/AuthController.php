<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function requestCode(Request $request)
    {
        $code = mt_rand(100000, 999999); // Генеруємо випадковий шестизначний код
        $email = $request->input('email');

        // Відправляємо лист з кодом
        Mail::raw("Ваш код для входу: $code", function ($message) use ($email) {
            $message->to($email)->subject('Код для входу');
        });

        // Зберігаємо дані у базі даних з встановленим значенням для поля 'code'
        $user = new User();
        $user->email = $email;
        $user->code = $code;
        $user->save();

        // Повертаємо вид для введення коду
        return view('login');
    }

    public function login(Request $request)
    {
        $code = $request->input('code'); // Отримуємо введений користувачем код

        // Перевіряємо, чи існує користувач з введеним кодом та електронною поштою
        $user = User::where('code', $code)->first();

        // Якщо користувач існує, перенаправляємо його на сторінку з новинами
        if ($user) {
            // Встановлюємо сесію з електронною адресою користувача
            session(['email' => $user->email]);

            $email = session('email'); // Отримуємо електронну адресу користувача з сесії
            $news = News::all();

            return view('/start', compact('email', 'news'));
        } else {
            // Якщо користувача не знайдено, повертаємо його на сторінку логіну з повідомленням про помилку
            return redirect('/login')->with('error', 'Incorrect code');
        }
    }

    public function logout()
    {
        session()->forget('email'); // Видалення сесії

        return view('/login'); // Перенаправлення на сторінку входу
    }
}
