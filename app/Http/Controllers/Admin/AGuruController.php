<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AGuruController extends Controller
{
    public function index()
    {
        $data['users'] = User::where('role', 'guru')->get();
        return view('admin/akun-guru', $data);
    }

    public function store(Request $request)
    {
        $users = new User();

        $users->nama     = $request->nama;
        $users->jk       = $request->jk;
        $users->no_hp    = $request->no_hp;
        $users->foto     = $request->foto;
        $users->email    = $request->email;
        $users->password = Hash::make('guru12345');
        $users->role     = 'guru';

        $users->save();

        return redirect('/admin/akun-guru')->with('success', 'Akun Guru Berhasil Ditambahkan!');
    }
}
