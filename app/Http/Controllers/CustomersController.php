<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = [
            'Bruce Wayne',
            'Arthur Curry',
            'Diana Prince',
            'Victor Stone',
            'Barry Allen'
        ];

        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }
}
