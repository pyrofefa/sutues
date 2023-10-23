<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Person;
use App\Models\Secretary;
use App\Models\Staff;
use App\Models\News;
use App\Models\TransparencyObligation;

class webController extends Controller
{
    public function home(){
        return Inertia::render('Web/Home');
    }
    /**Start About */
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
        $staff = Staff::with('person')->with('position')->join('office', 'office.id', '=', 'staff.office_id')->where('office.id',1)->get();
        $vigilance = Staff::with('person')->with('position')->join('office', 'office.id', '=', 'staff.office_id')->where('office.id',2)->get();
        $honor = Staff::with('person')->with('position')->join('office', 'office.id', '=', 'staff.office_id')->where('office.id',3)->get();
        $delegation = Staff::with('person')->with('position')->join('office', 'office.id', '=', 'staff.office_id')->where('office.id',4)->get();


        return Inertia::render('Web/About/Staff',[
            'staff' => $staff,
            'vigilance' => $vigilance,
            'honor' => $honor,
            'delegation' => $delegation
        ]);
    }
    /**End About */

    /**Start Trasparency */
    public function applicationProcedure(){
        return Inertia::render('Web/Transparency/ApplicationProcedure');
    }
    public function cordinationOffice(){
        return Inertia::render('Web/Transparency/CordinationOffice');
    }
    public function transparencyCommission(){
        $staff = Staff::with('person')->with('position')->join('office', 'office.id', '=', 'staff.office_id')->where('office.id',2)->get();
        return Inertia::render('Web/Transparency/TransparencyCommission',[
            'staff' => $staff
        ]);
    }
    public function transparencyObligations(){
        $years = TransparencyObligation::select('year')->orderBy('year','desc')->get();
        return Inertia::render('Web/Transparency/TransparencyObligations',[
            'years' => $years
        ]);
    }
    public function transparencyObligationsYear($year){
        $articles = TransparencyObligation::with('articles')->where('year',$year)->get();
        return Inertia::render('Web/Transparency/TransparencyObligations/Year',[
            'year' => $year,
            'articles' => $articles
        ]);
    }
    /**End Trasparency */

    //
    public function documents(Request $request){
        return Inertia::render('Web/Documents',[
            'documents' => News::with('type')->where('type_id',3)->when($request->term, function($query, $term){
                $query->where('title', 'LIKE', '%'.$term.'%');
            })->orderBy('end','desc')->paginate(21)
        ]);
    }
    public function convocations(){
        return Inertia::render('Web/Convocations');
    }
    public function news(Request $request){
        $data = News::with('type')->where('type_id',1)
            ->where('start','>=',date('Y-m-d'))
            ->where('end', '>=', date('Y-m-d'))
            ->orderBy('end')->get();

        return Inertia::render('Web/News',[
            'data' => $data,
            'news' => News::with('type')->where('type_id',1)->when($request->term, function($query, $term){
                $query->where('title', 'LIKE', '%'.$term.'%');
            })->orderBy('end','desc')->paginate(21)
        ]);
    }
    public function newsDetails($slug){
        $news = News::where('slug','=', $slug)->firstOrFail();
        return Inertia::render('Web/NewsDetail',[
            'news' => $news
        ]);
    }

    public function suppliers(){
        return Inertia::render('Web/Suppliers');
    }
    public function contactUs(){
        return Inertia::render('Web/ContactUs');
    }

}
