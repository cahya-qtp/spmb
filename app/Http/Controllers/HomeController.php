<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['nama']   = 'Cahya Qomadi';
        $data['alamat'] = 'Jl. Merdeka No. 123';

        return view('home', $data);
    }

    public function akun_guru()
    {
        $data['users'] = User::where('role', 'guru')->get();
        return view('akun-guru', $data);
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
