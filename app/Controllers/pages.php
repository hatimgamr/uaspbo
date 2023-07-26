<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {

        return view('pages\home');
    }
    public function about()
    {

        return view('pages\about');
    }

    public function contact()
    {
        $data =
            [
                'title' => 'hello world'
            ];

        return view('pages\contact', $data);
    }
}
