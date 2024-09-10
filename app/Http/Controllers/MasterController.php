<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Schedule;

class MasterController extends Controller
{
    public function index(){
        $pendaftaran = Pendaftaran::count();
        $jadwal = Schedule::count();
        return view ('app.index', compact('pendaftaran', 'jadwal'));
    }
}
