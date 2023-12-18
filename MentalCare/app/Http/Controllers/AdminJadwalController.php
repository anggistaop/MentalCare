<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Psikolog;
use App\Models\Jadwal;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AdminJadwalController extends Controller
{
    public function index(): View
    {
        //menghitung total user
        $totalUser = User::count();

        //menghitung total psikolog
        $totalPsikolog = Psikolog::count();

        //menghitung total jadwal
        $totalJadwal = Jadwal::count();

        //menampilkan data jadwal
        $jadwals = Jadwal::all();

        return view('admin.jadwal.jadwal', [
            'totalUser' => $totalUser,
            'totalPsikolog' => $totalPsikolog,
            'totalJadwal' => $totalJadwal,
            'jadwals' => $jadwals,
        ]);
    }

    public function create(): View
    {
        return view('admin.jadwal.form-jadwal');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'psikolog' => 'required',
            'kategori' => 'required',
        ]);

        Jadwal::create([
            'tanggal' => $request->tanggal,
            'psikolog' => $request->psikolog,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function show(string $id): View
    {
        $jadwal = Jadwal::findOrFail($id);

        return view('admin.jadwal.detail-jadwal', compact('jadwal'));
    }

    public function edit(string $id): View
    {
        $jadwal = Jadwal::findOrFail($id);

        return view('admin.jadwal.edit-jadwal', compact('jadwal'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'tanggal' => 'required',
            'psikolog' => 'required',
            'kategori' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);

        $jadwal->update([
            'tanggal' => $request->tanggal,
            'psikolog' => $request->psikolog,
            'kategori' => $request->kategori,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diubah');
    }

    public function destroy(string $id): RedirectResponse
    {
        $jadwal = Jadwal::findOrFail($id);

        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus');
    }
}
