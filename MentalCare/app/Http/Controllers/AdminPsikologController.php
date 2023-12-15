<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Psikolog;
use App\Models\Jadwal;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminPsikologController extends Controller
{
    public function index(): View
    {
        //menghitung total user
        $totalUser = User::count();

        //menghitung total psikolog
        $totalPsikolog = Psikolog::count();

        //menghitung total jadwal
        $totalJadwal = Jadwal::count();

        //menampilkan data psikolog
        $psikologs = Psikolog::all();

        return view('admin.psikolog.psikolog', [
            'totalUser' => $totalUser,
            'totalPsikolog' => $totalPsikolog,
            'totalJadwal' => $totalJadwal,
            'psikologs' => $psikologs,
        ]);
    }

    public function create(): View
    {
        return view('admin.psikolog.form-psi');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'name' => 'required',
            'category' => 'required',
        ]);

        $image = $request->file('image');
        $image->storeAs('public/psikologs', $image->hashName());

        Psikolog::create([
            'image' => $image->hashName(),
            'name' => $request->name,
            'category' => $request->category,
        ]);

        return redirect()->route('psikolog.index')->with('success', 'Psikolog berhasil ditambahkan');
    }

    public function show(string $id): View
    {
        $psikolog = Psikolog::findOrFail($id);

        return view('admin.psikolog.detail-psi', compact('psikolog'));
    }

    public function edit(string $id): View
    {
        $psikolog = Psikolog::findOrFail($id);

        return view('admin.psikolog.edit-psi', compact('psikolog'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg',
            'name' => 'required',
            'category' => 'required',
        ]);

        $psikolog = Psikolog::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/psikologs', $image->hashName());

            Storage::delete('public/psikologs/' . $psikolog->image);

            $psikolog->update([
                'image' => $image->hashName(),
                'name' => $request->name,
                'category' => $request->category,
            ]);
        } else {
            $psikolog->update([
                'name' => $request->name,
                'category' => $request->category,
            ]);
        }

        return redirect()->route('psikolog.index')->with('success', 'Psikolog berhasil diupdate');
    }

    public function destroy(string $id): RedirectResponse
    {
        $psikolog = Psikolog::findOrFail($id);

        Storage::delete('public/psikologs/' . $psikolog->image);
        $psikolog->delete();

        return redirect()->route('psikolog.index')->with('success', 'Psikolog berhasil dihapus');
    }
}
