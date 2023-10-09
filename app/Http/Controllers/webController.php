<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Secretary;
use App\Models\Staff;
use App\Models\News;

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
        $secretaries = Secretary::with('person')->orderBy('period','desc')->get();
        return Inertia::render('Web/About/Secretaries',[
            'secretaries' => $secretaries
        ]);
    }
    public function organization(){
        return Inertia::render('Web/About/Organization');
    }
    public function staff(){
        $staff = Staff::with('person')->get();
        return Inertia::render('Web/About/Staff',[
            'staff' => $staff
        ]);
    }

    //
    public function documents(){
        return Inertia::render('Web/Documents');
    }
    public function convocations(){
        return Inertia::render('Web/Convocations');
    }
    public function news(){
        $news = News::with('type')->where('type_id',1)->get();
        return Inertia::render('Web/News',[
            'news' => $news
        ]);
    }
    public function newsDetails($id){
        $news = News::find($id);
        return Inertia::render('Web/NewsDetail',[
            'news' => $news
        ]);
    }   
    public function contactUs(){
        return Inertia::render('Web/ContactUs');
    }   
    
}
