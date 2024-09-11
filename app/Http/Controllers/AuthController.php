<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    // Função de registro
    public function registerPost(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Criação do usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login automático após o registro
        Auth::login($user);

        return response()->json([
            'message' => 'Usuário registrado com sucesso!',
            'user' => $user,
        ], 201);
    }

    // Função de login
    public function loginPost(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Verifica se as credenciais estão corretas
        if (!Auth::attempt($request->only('email', 'password'))) {
            throw ValidationException::withMessages([
                'email' => ['As credenciais fornecidas estão incorretas.'],
            ]);
        }

        // Retorna o usuário autenticado
        return response()->json([
            'message' => 'Login realizado com sucesso!',
            'user' => Auth::user(),
        ]);
    }

    // Função de logout
    public function logout(Request $request)
    {
        Auth::logout();

        return response()->json([
            'message' => 'Logout realizado com sucesso!',
        ]);
    }
}
