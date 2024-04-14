<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $skills = Skill::all();
        return view("Skill.index", compact("skills"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("Skill.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Skill $skill)
    {
        //
        $skill->create($request->all());
        return redirect()->route("skills.index")->with("success","kasfkladsfh");
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
        $skills = Skill::find($skill->id);
        return view("Skill.show", compact("skills"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
        $skills = Skill::find($skill->id);
        return view("Skill.edit", compact("skills"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $skill->update($request->all());
        return redirect()->route("skills.index")->with("success","");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
        $skill->delete();
        return redirect()->route('skills.index');
    }
}
