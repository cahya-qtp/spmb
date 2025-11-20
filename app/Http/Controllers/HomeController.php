<?php
namespace App\Http\Controllers;

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
        $data['nama']   = 'Cahya Qomadi';
        $data['alamat'] = 'Jl. Merdeka No. 123';
        return view('akun-guru', $data);
    }
}
