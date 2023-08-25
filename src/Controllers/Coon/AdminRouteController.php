<?php

namespace Atul4065\Coon\Controllers\Coon;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminRouteController extends Controller
{

    public function index()
    {
        return view('admin.coon.dashboard');
    }

    public function profile()
    {
        return view('admin.coon.profile');
    }

    public function settings()
    {
        return view('admin.coon.settings');
    }

    public function manage($id)
    {
        $user = User::find($id);
        return view('admin.coon.manage-admin', compact('user'));
    }
}
