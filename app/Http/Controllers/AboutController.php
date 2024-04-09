<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\About;
use Illuminate\View\View;

class AboutController extends Controller
{

    public function index(): View
    {
        $about = About::all();
        return view('Abouts.index', compact('about'));
    }

 
    public function create(): View
    {
        return view('Abouts.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        About::create($input);
        return redirect('about')->with('flash_message', 'About Addedd!');
    }

    public function show(string $id): View
    {
        $about = About::find($id);
        return view('Abouts.show')->with('about', $about);
        
    }

    public function edit(string $id): View
    {
        $about = About::find($id);
        return view('Abouts.edit')->with('about', $about);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $about = About::find($id);
        $input = $request->all();
        $about->update($input);
        return redirect('about')->with('flash_message', 'About  Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        About::destroy($id);
        return redirect('about')->with('flash_message', 'About deleted!'); 
    }
}