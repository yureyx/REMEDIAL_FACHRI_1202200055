<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UsersController extends BaseController
{
    public function index()
    {
        $nama = 'users';
    }
use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

