<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Simple hardcoded admin credentials for now
        if ($credentials['email'] === 'admin@helpfulsoftware.com' && 
            $credentials['password'] === 'admin123') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    public function dashboard()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $messages = Message::orderBy('created_at', 'desc')->get();
        $unreadCount = Message::where('read', false)->count();

        return view('admin.dashboard', compact('messages', 'unreadCount'));
    }

    public function markAsRead($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $message = Message::findOrFail($id);
        $message->update(['read' => true]);

        return back();
    }

    public function deleteMessage($id)
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }

        $message = Message::findOrFail($id);
        $message->delete();

        return back();
    }
}