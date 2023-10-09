<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

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
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 1;
        $news->content = $request->content;
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
}
