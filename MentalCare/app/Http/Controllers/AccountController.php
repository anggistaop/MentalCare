<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(): View
    {
        //menampilkan data user
        $users = User::all();

        return view('account', [
            'users' => $users,
        ]);
    }

    // public function update(Request $request, $id): RedirectResponse
    // {
    //     $this->validate($request, [

    //     ]);

    // }
            
}