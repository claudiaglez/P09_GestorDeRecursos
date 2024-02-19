<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Extra;
use App\Models\Recurso;
use App\Models\Tipo;
use App\Models\Stack;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class RecursoController extends Controller
{
    public function index()
    {
        $resources = Recurso::all();
        return view('index', compact('resources'));
    }

    public function create()
    {
        $tipos = Tipo::all();
        $stacks = Stack::all();

        return view('recurso.create', compact('tipos', 'stacks'));

    }

    public function store(Request $request)
    {  
        Recurso::create($request->all());
        return redirect()->route('index');
        
    }

    public function edit($resource){
        $tipos = Tipo::all();
        $stacks = Stack::all();
        $resource = Recurso::find($resource);
        return view('recurso.edit', compact('resource','tipos', 'stacks'));
    }

    public function update(Request $request, Recurso $resource):RedirectResponse{
        //$resource = Recurso::find($resource);
        $resource->update($request->all()); 
        return redirect()->route('index');
    }

    public function destroy(Recurso $resource){
        $resource->delete();
        return redirect()->route('index');

    }

}