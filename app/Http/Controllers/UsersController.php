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
            'sectionTitle' => 'About Livewire Data Tables',
            'sectionContent' => 'This is the about us section of my page.'
        ];

        return view('pages.index', $data);
    }
}
