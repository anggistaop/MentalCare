<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Psikolog;
use App\Models\Jadwal;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(): View
    {
        //menghitung total user
        $totalUser = User::count();

        //menghitung total psikolog
        $totalPsikolog = Psikolog::count();

        //menghitung total jadwal
        $totalJadwal = Jadwal::count();

        //menampilkan data user
        $users = User::all();

        return view('admin.user.user', [
            'totalUser' => $totalUser,
            'totalPsikolog' => $totalPsikolog,
            'totalJadwal' => $totalJadwal,
            'users' => $users,
        ]);
    }

    public function create(): View
    {
        return view('admin.user.form-user');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'username' => 'required|unique:users',
            'email' => 'required',
            'password' => 'required',
            'namaLengkap' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'nomorHP' => 'required',
            'rekamMedis' => 'required',
            'hasil' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'namaLengkap' => $request->namaLengkap,
            'tanggalLahir' => $request->tanggalLahir,
            'alamat' => $request->alamat,
            'nomorHP' => $request->nomorHP,
            'rekamMedis' => $request->rekamMedis,
            'hasil' => $request->hasil,
        ]);

        return redirect()->route('user.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show(string $id): View{
        $user = User::findOrFail($id);

        return view('admin.user.detail-user', compact('user'));
    }    

    public function edit(string $id): View
    {
        $user = User::findOrFail($id);

        return view('admin.user.form-edit-user', compact('user'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'namaLengkap' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'nomorHP' => 'required',
            'rekamMedis' => 'required',
            'hasil' => 'required',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'namaLengkap' => $request->namaLengkap,
            'tanggalLahir' => $request->tanggalLahir,
            'alamat' => $request->alamat,
            'nomorHP' => $request->nomorHP,
            'rekamMedis' => $request->rekamMedis,
            'hasil' => $request->hasil,
        ]);

        return redirect()->route('user.index')->with('success', 'Data berhasil diubah');
    }

    public function destroy(string $id): RedirectResponse
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
    }
}
