<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(){
        $employes = Schedule::query()->with('pendaftaran')->latest()->paginate(5);
        return view('Schedule.index', compact('employes'));
    }
    public function search(Request $request){
        $search = $request->input("search");
        $employes = Schedule::query()->with("pendaftaran")->whereHas('pendaftaran', function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->paginate(5);
        return view('pendaftaran.index', compact('employes'));
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
