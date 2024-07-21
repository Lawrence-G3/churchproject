<?php

// app/Http/Controllers/Admin/MembersController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member; 

class MembersController extends Controller
{
    public function index()
    {
        // Logic to fetch members data
        $members = \App\Models\Member::all(); // Example query to fetch members

        // Return view with data
        return view('admin.members.index', compact('members'));
    }
}
