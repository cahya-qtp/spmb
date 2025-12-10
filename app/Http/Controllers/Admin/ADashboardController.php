<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class ADashboardController extends Controller
{
    public function index()
    {
        $data['guru_count']  = User::where('role', 'guru')->count();
        $data['siswa_count'] = User::where('role', 'siswa')->count();
        $data['casis_count'] = User::where('role', 'casis')->count();
        return view('admin.dashboard', $data);
    }
}
