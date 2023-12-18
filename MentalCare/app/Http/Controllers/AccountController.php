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

    public function update(Request $request, $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $dataToUpdate = [
            'namaLengkap' => $request->namaLengkap,
            'email' => $request->email,
            'nomorHP' => $request->nomorHP,
            'tanggalLahir' => $request->tanggalLahir,
        ];
    
        // Periksa apakah input password tidak kosong
        if (!empty($request->password)) {
            $dataToUpdate['password'] = $request->password;
        }
    
        $user->update($dataToUpdate);

        return redirect()->route('akun.index')->with('success', 'Akun berhasil diupdate');

    }
            
}