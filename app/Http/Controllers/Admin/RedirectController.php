<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class RedirectController extends Controller
{
    public function redirectToFrontoffice(Request $request)
    {
        $user = $request->user();
        $email = $user->email;
        $name = $user->name;
        $id = $user->id;
        $url = 'http://localhost:5174?email=' . urlencode($email) . '&name=' . urlencode($name) . '&id=' . urlencode($id);
        return redirect($url);
    }
}
