<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\ActivationEmail;
use Illuminate\Support\Facades\Password;
use App\Models\logActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if (!$user->is_active) {
                Auth::logout();
                return redirect()->back()->withErrors(['Your account is not activated.']);
            }
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors(['Invalid credentials.']);
    }
    public function logActivity($userId, $action) {
        logActivity::create([
            'user_id' => $userId,
            'action' => $action,
        ]);
        $this->logActivity(Auth::id(), 'User logged in');
    }


    public function register(Request $request) {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:100',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'is_active' => false,
        ]);

        // Send Activation Email
        Mail::to($user->email)->send(new ActivationEmail($user));

        return response()->json(['message' => 'Registration successful, please check your email for activation link.']);
    }
    public function assignRole(Request $request) {
        $user = User::find($request->user_id);
        $role = Role::find($request->role_id);

        if ($user && $role) {
            $user->roles()->attach($role);
            return response()->json(['message' => 'Role assigned successfully']);
        }

        return response()->json(['message' => 'User or Role not found'], 404);
    }
    public function sendResetLinkEmail(Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
    }
    public function handle($request, Closure $next, $role)
    {
        if (!Auth::check() || !$request->user()->hasRole($role)) {
            return redirect('home');
            }
        return $next($request);
    }

}

