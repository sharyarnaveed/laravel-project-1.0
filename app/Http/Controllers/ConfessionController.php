<?php

namespace App\Http\Controllers;

use App\Models\confession;
use Illuminate\Http\Request;

class ConfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $confession=confession::get();
        return view('welcome',['confession'=>$confession]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('confession');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
$request->validate([
    'thecon' => 'required',
    'confession' => 'required',
]);

confession::create($request->all());

return back()->with('success', 'Confession submitted successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(confession $confession)
    {
        // echo $confession;
return view('show',['confession'=>$confession]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(confession $confession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, confession $confession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(confession $confession)
    {
        //
    }
}
