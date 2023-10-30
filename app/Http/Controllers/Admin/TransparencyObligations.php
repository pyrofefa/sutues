<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Storage;

use App\Models\TransparencyObligation;
use App\Models\TransparencyObligationFile;

class TransparencyObligations extends Controller
{
    public function index(){
        $transparency = TransparencyObligation::orderBy('year','desc')->paginate(10);
        return Inertia::render('Admin/TransparencyObligations/index',[
            'transparency' => $transparency,
        ]);
    }
    public function create(){
        return Inertia::render('Admin/TransparencyObligations/create');
    }
    public function store(Request $request){
        $transparency = new TransparencyObligation();
        $transparency->year = $request->year;
        $transparency->article = $request->article;
        $transparency->save();
 
        foreach ($request->file as  $image) {
            Storage::disk('public')->put('/trasparency/'.$request->year.'/'.$image->getClientOriginalName(), file_get_contents($image));
            $files = new TransparencyObligationFile();
            $files->transparency_obligations_id = $transparency->id;
            $files->file = $image->getClientOriginalName();
            $files->save();
        }

        sleep(1);
        return redirect()->route('transparency-obligations.index')->with('message', 'Blog Created Successfully');
    }
    public function destroy($id){
        $transparency = TransparencyObligation::find($id);
        $files = TransparencyObligationFile::where('transparency_obligations_id',$id)->get();
        foreach ($files as  $image) {
            Storage::disk('public')->delete('/trasparency/'.$transparency->year.'/'.$image->file);
        }
        $transparency->delete();
        $delete =TransparencyObligationFile::where('transparency_obligations_id',$id)->delete();
        sleep(1);
        
        return redirect()->route('transparency-obligations.index')->with('message', 'Blog Delete Successfully');
    }
}
