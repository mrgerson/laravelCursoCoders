<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\UsersExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class QueriesAll extends Controller
{
    public function index()
    {
        $users = User::with('profile')->get();

        return Excel::download(new UsersExport($users), 'usuarios.xlsx');
    }
}


