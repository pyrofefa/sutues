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
        $transparency->quarter = $request->quarter;
        $transparency->article = $request->article;
        $transparency->save();
       
        foreach ($request->file as  $image) {
            $path = Str::slug($request->year).'/'.Str::slug($request->article).'/'.Str::slug($request->quarter);
            Storage::disk('public')->put('/trasparency/'.$path.'/'.$image->getClientOriginalName(), file_get_contents($image));
            $files = new TransparencyObligationFile();
            $files->transparency_obligations_id = $transparency->id;
            $files->article = $request->article;
            $files->quarter = $path.'/'.$image->getClientOriginalName();;
            $files->file = $image->getClientOriginalName();
            $files->save();
        }

        sleep(1);
        return redirect()->route('transparency-obligations.index')->with('success', 'Creado con éxito');
    }
    public function edit($id){
        $transparency = TransparencyObligation::find($id);
        $files = TransparencyObligationFile::where('transparency_obligations_id',$transparency->id)->get();
        return Inertia::render('Admin/TransparencyObligations/edit',[
            'transparency' => $transparency,
            'files' => $files
        ]);
    }
    public function update(Request $request, $id){
        $transparency = TransparencyObligation::find($id);
        $transparency->year = $request->year;
        $transparency->quarter = $request->quarter;
        $transparency->article = $request->article;
        $transparency->save();
        
        if($request->file){
            foreach ($request->file as  $image) {
                Storage::disk('public')->put('/trasparency/'.$request->year.'/'.$request->quarter.'/'.$image->getClientOriginalName(), file_get_contents($image));
                $files = new TransparencyObligationFile();
                $files->transparency_obligations_id = $transparency->id;
                $files->article = $request->article;
                $files->quarter = $request->quarter;
                $files->file = $image->getClientOriginalName();
                $files->save();
            }
        }
       
        sleep(1);
        return redirect()->route('transparency-obligations.index')->with('warning', 'Editado con éxito');
    }
    public function destroy($id){
        $transparency = TransparencyObligation::find($id);
        $files = TransparencyObligationFile::where('transparency_obligations_id',$id)->get();
        foreach ($files as  $image) {
            Storage::disk('public')->delete('/trasparency/'.$image->quarter);
        }
        $transparency->delete();
        $delete =TransparencyObligationFile::where('transparency_obligations_id',$id)->delete();
        sleep(1);

        return redirect()->route('transparency-obligations.index')->with('danger', 'Eliminado con éxito');
    }
    public function deleteFile($id){
        $file = TransparencyObligationFile::find($id);
        Storage::disk('public')->delete('/trasparency/'.$file->quarter);
        $file = TransparencyObligationFile::find($id)->delete();
    }
}
