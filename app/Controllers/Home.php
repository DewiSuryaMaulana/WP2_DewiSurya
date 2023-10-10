<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'nama' => 'Dewi Surya Maulana',
            'email' => 'dewisuryamaulana11@gmail.com',
            'telp' => '083898217107',
            'ttl' => 'Jakarta, 06 April 2000',
            'nim' => '19220850',
            'kelas' => '19.3C.05',
            'umur' => '23 Tahun',
            'alamat' => 'Telaga Mas'
        ];
        return view('welcome_message', $data);
    }
}
