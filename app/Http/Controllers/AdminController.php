<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin/login');
    }
    public function login(Request $request)
    {
        $request->get('username');
        $request->get('password');

    }
}
