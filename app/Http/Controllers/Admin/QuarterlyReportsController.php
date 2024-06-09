<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str as Str;
use Illuminate\Support\Facades\Storage;

use App\Models\QuarterlyReport;
use App\Models\QuarterlyReportFile;

class QuarterlyReportsController extends Controller
{
    public function index(){
        $reports = QuarterlyReport::orderBy('year','desc')->paginate(10);
        return Inertia::render('Admin/QuarterlyReport/index',[
            'transparency' => $reports,
        ]);
    }
    public function create(){
        return Inertia::render('Admin/QuarterlyReport/create');
    }
    public function store(Request $request){
        $transparency = new QuarterlyReport();
        $transparency->year = $request->year;
        $transparency->quarter = $request->quarter;
        $transparency->save();
       
        foreach ($request->file as  $image) {
            $path = Str::slug($request->year).'/'.Str::slug($request->quarter);
            Storage::disk('public')->put('/quarterly-reports/'.$path.'/'.$image->getClientOriginalName(), file_get_contents($image));
            $files = new QuarterlyReportFile();
            $files->quaretely_report_id = $transparency->id;
            $files->file = $image->getClientOriginalName();
            $files->path = $path.'/'.$image->getClientOriginalName();;
            $files->save();
        }

        sleep(1);
        return redirect()->route('quarterly-reports.index')->with('success', 'Creado con éxito');
    }

    public function edit($id){
        $transparency = QuarterlyReport::find($id);
        $files = QuarterlyReportFile::where('quaretely_report_id',$transparency->id)->get();
        return Inertia::render('Admin/QuarterlyReport/edit',[
            'transparency' => $transparency,
            'files' => $files
        ]);
    }

    public function update(Request $request, $id){
        $transparency = QuarterlyReport::find($id);
        $transparency->year = $request->year;
        $transparency->quarter = $request->quarter;
        $transparency->save();
        
        if($request->file){
            foreach ($request->file as  $image) {
                $path = Str::slug($request->year).'/'.Str::slug($request->quarter);
                Storage::disk('public')->put('/quarterly-reports/'.$path.'/'.$image->getClientOriginalName(), file_get_contents($image));
                $files = new QuarterlyReportFile();
                $files->quaretely_report_id = $transparency->id;
                $files->path = $path.'/'.$image->getClientOriginalName();;
                $files->file = $image->getClientOriginalName();
                $files->save();
            }
        }
       
        sleep(1);
        return redirect()->route('quarterly-reports.index')->with('warning', 'Editado con éxito');
    }

    public function destroy($id){
        $transparency = QuarterlyReport::find($id);
        $files = QuarterlyReportFile::where('quaretely_report_id',$id)->get();
        foreach ($files as  $image) {
            Storage::disk('public')->delete('/quarterly-reports/'.$image->path);
        }
        $transparency->delete();
        $delete =QuarterlyReportFile::where('quaretely_report_id',$id)->delete();
        sleep(1);

        return redirect()->route('quarterly-reports.index')->with('danger', 'Eliminado con éxito');
    }
    public function deleteFile($id){
        $file = QuarterlyReportFile::find($id);
        Storage::disk('public')->delete('/quarterly-reports/'.$file->path);
        $file = QuarterlyReportFile::find($id)->delete();
    }

}
