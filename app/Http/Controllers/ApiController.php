<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $users = User::limit(1)->get();

        return response()->json([
            'data' => [
                'name' => $users->name
            ],
            'links' => '127.0.0:8000/emails'
        ]);
    }
}
