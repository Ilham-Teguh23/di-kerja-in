<?php

namespace App\Http\Controllers\Monitoring\Authorization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view("monitoring.pages.authorization.v_login");
    }
}
