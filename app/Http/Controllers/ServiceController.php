<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Service;
use Illuminate\View\View;

class ServiceController extends Controller
{

    public function index(): View
    {
        $service = Service::all();
        return view('Services.index', compact('service'));
    }

 
    public function create(): View
    {
        return view('Services.create');
    }

  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Service::create($input);
        return redirect('service')->with('flash_message', 'Service Addedd!');
    }

    public function show(string $id): View
    {
        $service = Service::find($id);
        return view('Services.show')->with('service', $service);
        
    }

    public function edit(string $id): View
    {
        $service = Service::find($id);
        return view('Services.edit')->with('service', $service);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $service = Service::find($id);
        $input = $request->all();
        $service->update($input);
        return redirect('service')->with('flash_message', 'Service  Updated!');  
    }

    
    public function destroy(string $id): RedirectResponse
    {
        Service::destroy($id);
        return redirect('service')->with('flash_message', 'Service deleted!'); 
    }
}