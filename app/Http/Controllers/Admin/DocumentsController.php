<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Storage;

use App\Models\News;
use App\Models\Type;

class DocumentsController extends Controller
{
    public function index(){
        $documents = News::with('type')->where('type_id',3)->paginate(10);
        return Inertia::render('Admin/Documents/index',[
            'documents' => $documents
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Documents/create');
    }
    public function store(Request $request){         
        $dt_start = new \DateTime();
        $dt_end = new \DateTime();

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->end = $dt_end->format('Y-m-d');
        $news->content = "";
        $news->type_id = 3;
        $news->slug = Str::slug($request->title);

        if($request->file('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $news->picture = $filename;
            $file = $request->file('file');
            Storage::disk('public')->put('/documents/'.$filename, \File::get($file));
        }
        
        $news->save();
        sleep(1);

        return redirect()->route('documents.index')->with('message', 'Blog Created Successfully');
    }
    public function destroy($id){
        $file = News::find($id);
        Storage::disk('public')->delete('/documents/'.$file->picture);
        $news = News::find($id)->delete();
        sleep(1);
        
        return redirect()->route('documents.index')->with('message', 'Blog Delete Successfully');
    }
}
