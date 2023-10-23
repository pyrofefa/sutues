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
        return Inertia::render('Admin/TransparencyObligations/index');
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
            Storage::disk('public')->put('/trasparency/'. $image->getClientOriginalName(), file_get_contents($image));
            $files = new TransparencyObligationFile();
            $files->transparency_obligations_id = $transparency->id;
            $files->file = $image->getClientOriginalName();
            $files->save();
        }

        sleep(1);
        return redirect()->route('documents.index')->with('message', 'Blog Created Successfully');
    }
}
