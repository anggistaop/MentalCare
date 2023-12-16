<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        //menampilkan data user
        $users = User::all();

        return view('account', [
            'users' => $users,
        ]);
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'namaLengkap' => 'required',
            'email' => 'required',
            'nomorHP' => 'required',
            'tanggalLahir' => 'required',
            'password' => 'required',
        ]);

        $user = User::find($id);

        $user->update([
            'namaLengkap' => $request->namaLengkap,
            'email' => $request->email,
            'nomorHP' => $request->nomorHP,
            'tanggalLahir' => $request->tanggalLahir,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('index')->with('success', 'Akun berhasil diupdate');
    }
}
