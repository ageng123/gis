<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class auth_api extends Controller
{
    public function auth(Request $request)
    {
        $user = $_POST['username'];
        $password = $_POST['password'];
        echo json_encode([
            'status' => 200,
            'data' => [
                'username' => $user,
                'password' => $password
            ]
        ]);
    }
}
