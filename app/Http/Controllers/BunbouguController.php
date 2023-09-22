<?php

namespace App\Http\Controllers;

use App\Models\Bunbougu;
use Illuminate\Http\Request;
use App\Models\Bunrui;

class BunbouguController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bunbougus = Bunbougu::latest()->paginate(5);
        return view('index',compact('bunbougus'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $bunruis = Bunrui::all();
        return view('create')
            ->with('bunruis',$bunruis);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'kakaku' => 'required|integer',
            'bunrui' => 'required|integer',
            'shosai' => 'required|max:140',
        ]);

        $input = $request->all();
        Bunbougu::create($input);
        return redirect()->route('bunbougus.index')
            ->with('success','文房具を登録しました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bunbougu $bunbougu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bunbougu $bunbougu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bunbougu $bunbougu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bunbougu $bunbougu)
    {
        //
    }
}
