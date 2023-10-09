<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str as Str;

use App\Models\News;
use App\Models\Type;

class NewsController extends Controller
{
    public function index(){
        $news = News::with('type')->where('type_id',1)->get();
        return Inertia::render('Admin/News/index',[
            'news' => $news
        ]);
    }
    public function create(){
        return Inertia::render('Admin/News/create');
    }
    public function store(Request $request){
        dd($request->all());
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 1;
        $news->content = $request->content;
        $news->start = $request->start;
        $news->end = $request->end;
        $news->slug = Str::slug($request->title);
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
        $news = News::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 1;
        $news->content = $request->content;
        $news->slug = Str::slug($request->title);
        $news->save();
        sleep(1);

        return redirect()->route('news.index')->with('message', 'Blog Updated Successfully');
    }
    public function destroy($id){
        $news = News::find($id)->delete();
        sleep(1);

        return redirect()->route('news.index')->with('message', 'Blog Delete Successfully');
    }
}
