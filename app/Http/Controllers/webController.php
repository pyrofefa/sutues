<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

use App\Mail\ApplicationProcedure;
use App\Mail\ContactForm;

use App\Models\Person;
use App\Models\Secretary;
use App\Models\Staff;
use App\Models\News;
use App\Models\TransparencyObligation;
use App\Models\TransparencyObligationFile;
use App\Models\Supplier;
use App\Models\Attached;

use App\Models\QuarterlyReport;
use App\Models\QuarterlyReportFile;

class webController extends Controller
{
    public function home(){
        $news = News::with('type')->where('type_id',1)->where('end', '>=', date('Y-m-d'))->orderBy('end')->take(3)->get();
        $data = News::with('type')->where('end', '>=', date('Y-m-d'))->orderBy('end')->get();

        return Inertia::render('Web/Home',[
            'news' => $news,
            'data' => $data
        ]);
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
        $staff = Staff::with('person')->with('position')->join('office', 'office.id', '=', 'staff.office_id')->where('office.id',5)->get();
        return Inertia::render('Web/Transparency/TransparencyCommission',[
            'staff' => $staff
        ]);
    }
    public function transparencyObligations(){
        $years = TransparencyObligation::select('year')->orderBy('article','desc')->groupBy('year')->get();
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
    public function downloadFileTransparency($id, $year) {
        $file = TransparencyObligationFile::find($id);
        return response()->download(storage_path('app/public/trasparency/'.$file->quarter));
    }

    public function quarterlyReports($year) {
        $articles = QuarterlyReport::with('articles')->where('year',$year)->get();
        return Inertia::render('Web/Transparency/QuarterlyReport',[
            'year' => $year,
            'articles' => $articles
        ]);
    }
    public function meetingSessions(Request $request) {
        return Inertia::render('Web/Transparency/MeetingSessions',[
            'meetings' => News::with('type')->where('type_id',4)->when($request->term, function($query, $term){
                $query->where('title', 'LIKE', '%'.$term.'%');
            })->paginate(21)
        ]);
    }

    public function meetingsDetails ($slug){
        $news = News::where('slug','=', $slug)->firstOrFail();
        $recents = News::with('type')->where('type_id',4)->take(3)->get();
        $attacheds = Attached::where('news_id',$news->id)->get();
        return Inertia::render('Web/Transparency/MeetingsDetail',[
            'news' => $news,
            'attacheds' => $attacheds,
            'recents' => $recents
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
    public function documentsDetails($slug){
        $news = News::where('slug','=', $slug)->firstOrFail();
        $recents = News::with('type')->where('type_id',3)->where('end', '>=', date('Y-m-d'))->orderBy('end')->take(3)->get();
        $attacheds = Attached::where('news_id',$news->id)->get();
        return Inertia::render('Web/DocumentsDetail',[
            'news' => $news,
            'attacheds' => $attacheds,
            'recents' => $recents
        ]);
    }

    public function convocations(Request $request){
        $data = News::with('type')->where('type_id',2)
            ->where('end', '>=', date('Y-m-d'))
            ->orderBy('end')->get();

        return Inertia::render('Web/Convocations',[
            'data' => $data,
            'convocations' => News::with('type')->where('type_id',2)->when($request->term, function($query, $term){
                $query->where('title', 'LIKE', '%'.$term.'%');
            })->orderBy('end','desc')->paginate(21)
        ]);
    }
    public function convocationsDetails($slug){
        $recents = News::with('type')->where('type_id',2)->where('end', '>=', date('Y-m-d'))->orderBy('end')->take(3)->get();
        $news = News::where('slug','=', $slug)->firstOrFail();
        $attacheds = Attached::where('news_id',$news->id)->get();
        return Inertia::render('Web/ConvocationsDetail',[
            'news' => $news,
            'attacheds' => $attacheds,
            'recents' => $recents
        ]);
    }
    public function news(Request $request){
        $data = News::with('type')->where('type_id',1)
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
        $recents = News::with('type')->where('type_id',1)->where('end', '>=', date('Y-m-d'))->orderBy('end')->take(3)->get();
        $news = News::where('slug','=', $slug)->firstOrFail();
        $attacheds = Attached::where('news_id',$news->id)->get();
        return Inertia::render('Web/NewsDetail',[
            'news' => $news,
            'attacheds' => $attacheds,
            'recents' => $recents
        ]);
    }

    public function suppliers(){
        $suppliers = Supplier::all();
        return Inertia::render('Web/Suppliers',[
            'suppliers' => $suppliers
        ]);
    }
    public function contactUs(){
        return Inertia::render('Web/ContactUs');
    }
    public function sendContactUs(Request $request){
        Mail::to('paginasutues@gmail.com’')->send(new ContactForm($request));
        return redirect()->route('contactUs')->with('success', 'Mensaje enviado con éxito');
    }
    public function sendTransparency(Request $request){
        $file = $request->file('file');
        Mail::to('paginasutues@gmail.com’')->send(new ApplicationProcedure($file));

        return redirect()->route('applicationProcedure')->with('success', 'Solicitud enviada con éxito');
    }

    public function downloadFile($id, $type) {
        $attached = Attached::find($id);

        if($type == 1){
            return response()->download(storage_path('app/public/news/attacheds/'.$attached->news_id.'/'.$attached->file));

        }else if($type == 2){
            return response()->download(storage_path('app/public/convocations/attacheds/'.$attached->news_id.'/'.$attached->file));
        }
        else{
            return response()->download(storage_path('app/public/documents/attacheds/'.$attached->news_id.'/'.$attached->file));
        }
    }

}
