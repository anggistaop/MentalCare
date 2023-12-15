<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Psikolog;
use App\Models\Jadwal;

use Illuminate\View\View;
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

        return view('admin.user.user', [
            'totalUser' => $totalUser,
            'totalPsikolog' => $totalPsikolog,
            'totalJadwal' => $totalJadwal
        ]);
        
    }
}
