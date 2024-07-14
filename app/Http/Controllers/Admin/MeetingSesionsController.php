<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Storage;

use App\Models\News;
use App\Models\Type;
use App\Models\Attached;

class MeetingSesionsController extends Controller
{
    public function index(){
        $news = News::with('type')->where('type_id',4)->paginate(10);
        return Inertia::render('Admin/Meetings/index',[
            'news' => $news
        ]);
    }
    public function create(){
        return Inertia::render('Admin/Meetings/create');
    }
    public function store(Request $request){
        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 4;
        $news->slug = Str::slug($request->title);
        $news->save();
        /**Guardando adjuntos */
        if($request->file){
            foreach ($request->file as  $image) {
                Storage::disk('public')->put('/meetings/attacheds/'.$news->id.'/'.$image->getClientOriginalName(), file_get_contents($image));
                $files = new Attached();
                $files->news_id = $news->id;
                $files->type_id = 1;
                $files->file = $image->getClientOriginalName();
                $files->save();
            }
        }
        sleep(1);
        return redirect()->route('meetings.index')->with('success', 'Creado con éxito');
    }
    public function edit($id){
        $news = News::find($id);
        $attached = Attached::where('news_id',$id)->get();
         return Inertia::render('Admin/Meetings/edit',[
            'news' => $news,
            'attacheds' => $attached
        ]);
    }
    public function update(Request $request, $id){
        $news = News::find($id);
        $news->title = $request->title;
        $news->description = $request->description;
        $news->type_id = 4;
        $news->slug = Str::slug($request->title);
        $news->save();
        /**Guardando adjuntos */
        if($request->file){
            foreach ($request->file as  $image) {
                Storage::disk('public')->put('/meetings/attacheds/'.$news->id.'/'.$image->getClientOriginalName(), file_get_contents($image));
                $files = new Attached();
                $files->news_id = $news->id;
                $files->type_id = 1;
                $files->file = $image->getClientOriginalName();
                $files->save();
            }
        }
        sleep(1);
        return redirect()->route('meetings.index')->with('warning', 'Editado con éxito');
    }
    public function deleteFile($id){
        $attached = Attached::find($id);
        Storage::disk('public')->delete('/meetings/attacheds/'.$attached->news_id.'/'.$attached->file);
        $attached = Attached::find($id)->delete();
    }
    public function destroy($id){
        $file = News::find($id);
        $files = Attached::where('news_id',$id)->get();
        foreach ($files as $f) {
            Storage::disk('public')->delete('/meetings/attacheds/'.$file->id.'/'.$f->file);
        }
        $attached = Attached::where('news_id',$id)->delete();
        $news = News::find($id)->delete();
        sleep(1);
        return redirect()->route('meetings.index')->with('danger', 'Eliminado con éxito');
    }
}
