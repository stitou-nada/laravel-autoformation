<?php

namespace App\Http\Controllers;
use App\Models\Users;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        return 'This is an invokable controller';
    }
}