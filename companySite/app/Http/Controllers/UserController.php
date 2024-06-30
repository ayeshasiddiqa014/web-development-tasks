<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showSearchForm()
    {
        return view('search');
    }

    public function searchByEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $email = $request->input('email');
        $users = User::where('email', $email)->get();

        return view('search-results', compact('users'));
    }
}
