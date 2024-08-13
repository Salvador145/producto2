<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Producto;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class FerrasController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','string','email','max:255','unique:users'],
            'password' => ['required','string'],
            'rol' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'rol_id' => $request->rol,
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');

    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->with('message', 'Credenciales incorrectas');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function vproducts(){
        $producto = Producto::get();

        return view('productos', compact('producto'));
    }

    public function iproducts(){
        $inventario = Producto::select([
            'id as ID',
            'producto as Producto',
            'cantidad as Cantidad',
            'precio as Precio'
            // Agrega más columnas según sea necesario
        ])->get();

        return view('inventario', compact('inventario'));
    }

}
