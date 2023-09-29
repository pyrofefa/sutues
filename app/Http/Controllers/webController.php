<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

class webController extends Controller
{
    public function home(){
        return Inertia::render('Web/Home');
    }
    public function history(){
        return Inertia::render('Web/About/History');
    }
    public function statutes(){
        return Inertia::render('Web/About/Statutes');
    }
    public function objectives(){
        return Inertia::render('Web/About/Objectives');
    }
    public function secretaries(){
        return Inertia::render('Web/About/Secretaries');
    }
    public function organization(){
        return Inertia::render('Web/About/Organization');
    }
    public function staff(){
        return Inertia::render('Web/About/Staff');
    }

}
