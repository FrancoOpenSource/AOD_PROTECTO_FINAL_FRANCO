<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }


    public function exportToXlsx() {
        return Excel::download(new UsersExport, 'usuarios.xlsx');
    }

    public function import() {
        return view('users.import');
    }

    public function importData(Request $request) {
        Excel::import(new UsersImport, request()->file('excel'));
        return redirect()->to(url('/users'));
    }

}
