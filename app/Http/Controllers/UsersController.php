<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Livewire Data Table',
            'headerTitle' => 'Users',
            'menuItems' => ['Home', 'About', 'Contributing'],
        ];

        return view('pages.index', $data);
    }
}
