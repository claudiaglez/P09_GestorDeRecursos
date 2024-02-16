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


class RecursoController extends Controller
{
    public function index()
    {
        $resources = Recurso::all();
        return view();
    }
}
