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
    public function conocenos()
    {
        return Inertia::render('Web/Conocenos');
    }
}
