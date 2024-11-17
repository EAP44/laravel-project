<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(User $user)
    {
        $Profils = User::paginate(5);
        return view('Pages.ListProfile',compact('Profils'));
    }
}
