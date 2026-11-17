<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clubs.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required|max:255']);

        DB::table('Clubs')->insert([
            'name'=> $request->name,
            'created_at'=> now(),
            // 'upload_at'=> now(),
        ]);
        return back()->with('success', 'Club berhasil ditambahkan');
    }

    
}
