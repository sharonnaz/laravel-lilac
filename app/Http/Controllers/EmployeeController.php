<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function getEmployees()
    {
        $users = User::with('department', 'designation')->get();
        return view('employees', compact('users'));
    }
}
