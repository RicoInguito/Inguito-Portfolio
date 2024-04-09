<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Education;
use Illuminate\View\View;

class EducationController extends Controller
{

    public function index(): View
    {
        $educations = Education::all();
        return view ('educations.index')->with('education', $educations);
    }

 
    public function create(): View
    {
        return view('educations.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Education::create($input);
        return redirect('educations')->with('flash_message', 'Education Addedd!');
    }

    public function show(string $id): View
    {
        $education = Education::find($id);
        return view('education.show')->with('educations', $education);
    }

    public function edit(string $id): View
    {
        $education = Education::find($id);
        return view('education.edit')->with('educations', $education);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $education = Education::find($id);
        $input = $request->all();
        $education->update($input);
        return redirect('education')->with('flash_message', 'education Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Education::destroy($id);
        return redirect('education')->with('flash_message', 'Education deleted!'); 
    }
}