<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreUserRequest;
use App\Models\Transaction;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.loginregister.page');
    }

    public function profile()
    {
        $user = Auth::user();
        $transactions = Transaction::where('user_id', $user->id)
            ->join('travel', 'transactions.travel_id', '=', 'travel.id')
            ->select('transactions.*', 'travel.*')
            ->get();

        return view('user.profile.page', [
            'user' => $user,
            'transactions' => $transactions
        ]);
    }

    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'phone_number' => 'required|unique:users,phone_number',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    
        $validated = $request->only(['name', 'email', 'phone_number', 'password']);
        $validated['password'] = Hash::make($validated['password']);
    
        $user = User::create($validated);
    
        Auth::login($user);
    
        return redirect()->route('login');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('product');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required|digits_between:10,15'
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->phone_number = $request->phone_number;
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully');
    }
}