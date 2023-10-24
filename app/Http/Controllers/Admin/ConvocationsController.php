<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Storage;

use App\Models\News;
use App\Models\Type;

class ConvocationsController extends Controller
{
    public function index(){
        $convocations = News::with('type')->where('type_id',2)->paginate(10);
        return Inertia::render('Admin/Convocations/index',[
            'convocations' => $convocations
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Convocations/create');
    }
    public function store(Request $request){
        $dt_start = new \DateTime($request->start);
        $dt_end = new \DateTime($request->end);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 2;
        $news->content = $request->content;
        $news->start = $dt_start->format('Y-m-d');
        $news->end = $dt_end->format('Y-m-d');
        $news->slug = Str::slug($request->title);

        if($request->file('picture')){
            $filename = $request->file('picture')->getClientOriginalName();
            $news->picture = $filename;
            $file = $request->file('picture');
            Storage::disk('public')->put('/convocations/'.$filename, \File::get($file));
        }

        $news->save();
        sleep(1);

        return redirect()->route('convocations.index')->with('message', 'Blog Created Successfully');
    }
}
