<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $faker = \Faker\Factory::create();
        // $data = [
        //     'title' => 'HOME | Welcome To My Website'
        // ];
        // return view('pages/index', $data);

        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }
    public function user()
    {
        return view('user/index');
    }
    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'lengkap' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Airlangga 2',
                    'Kota' => 'Bogor'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Majapahit',
                    'Kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
