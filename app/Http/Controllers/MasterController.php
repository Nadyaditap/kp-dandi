<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;


class MasterController extends Controller
{
    public function index(){
        $pendaftaran = Pendaftaran::count();
        return view ('app.index', compact('pendaftaran'));
    }
}
