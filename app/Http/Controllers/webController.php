<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class webController extends Controller
{
    public function index()
    {
        return Inertia::render('Web/Inicio');
    }
    public function history()
    {
        return Inertia::render('Web/History');
    }
    public function conocenos()
    {
        return Inertia::render('Web/Conocenos');
    }
    public function secretarios()
    {
        return Inertia::render('Web/Secretarios');
    }
}
