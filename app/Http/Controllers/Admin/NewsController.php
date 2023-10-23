<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Storage;

use App\Models\News;
use App\Models\Type;

class NewsController extends Controller
{
    public function index(){
        $news = News::with('type')->where('type_id',1)->paginate(10);
        return Inertia::render('Admin/News/index',[
            'news' => $news
        ]);
    }
    public function create(){
        return Inertia::render('Admin/News/create');
    }
    public function store(Request $request){         
        $dt_start = new \DateTime($request->start);
        $dt_end = new \DateTime($request->end);

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 1;
        $news->content = $request->content;
        $news->start = $dt_start->format('Y-m-d');
        $news->end = $dt_end->format('Y-m-d');
        $news->slug = Str::slug($request->title);

        if($request->file('picture')){
            $filename = $request->file('picture')->getClientOriginalName();
            $news->picture = $filename;
            $file = $request->file('picture');
            Storage::disk('public')->put($filename, \File::get($file));
        }
        
        $news->save();
        sleep(1);

        return redirect()->route('news.index')->with('message', 'Blog Created Successfully');
    }
    public function edit($id){
        $news = News::find($id);
        return Inertia::render('Admin/News/edit',[
            'news' => $news
        ]);
    }
    public function update(Request $request, $id){
        $dt_start = new \DateTime($request->start);
        $dt_end = new \DateTime($request->end);

        $news = News::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 1;
        $news->content = $request->content;
        $news->start = $dt_start->format('Y-m-d');
        $news->end = $dt_end->format('Y-m-d');
        $news->slug = Str::slug($request->title);
        
        if($request->file('picture')){
            $filename = $request->file('picture')->getClientOriginalName();
            $news->picture = $filename;
            $file = $request->file('picture');
            Storage::disk('public')->put('/news/'.$filename, \File::get($file));
        }
        
        $news->save();
        sleep(1);

        return redirect()->route('news.index')->with('message', 'Blog Updated Successfully');
    }
    public function destroy($id){
        $file = News::find($id);
        Storage::disk('public')->delete('/news/'.$file->picture);
        $news = News::find($id)->delete();
        sleep(1);

        return redirect()->route('news.index')->with('message', 'Blog Delete Successfully');
    }
}
