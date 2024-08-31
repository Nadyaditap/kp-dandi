<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $employes = Schedule::with('pendaftaran')->get();
        return view('Schedule.index', compact('employes'));
    }
    public function create(){
        $employes = Pendaftaran::get();
        return view('Schedule.create', compact('employes'));
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'outlet' => 'required|string',
            'pendaftaran_id' => 'required|integer',
            'tanggal' => 'required|string',
            'shift' => 'required|string',
            'hari' => 'required|string',
            'jam_masuk' => 'required|string',
        ]);
        Schedule::create($attributes);
        return redirect(route('schedule.index'));
        // return dd($request->all());
    }
}
