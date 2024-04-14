<?php

namespace App\Http\Controllers;

use App\Models\educations;
use Illuminate\Http\Request;

class EducationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $educations = Educations::all();
        return view("Educations.index", compact("educations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Educations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Educations::create($input);
        return redirect('education')->with('flash_message', 'Educations Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(educations $educations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(educations $educations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, educations $educations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(educations $educations)
    {
        //
    }
}
