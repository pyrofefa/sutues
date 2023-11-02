<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

use App\Models\Staff;
use App\Models\Person;
use App\Models\Office;
use App\Models\Position;

class StaffController extends Controller
{
    public function index(){
        $staff = Staff::with('person')->with('position')->paginate(10);
        return Inertia::render('Admin/Staff/index',[
            'staff' => $staff
        ]);
    }
    public function create(){
        $office = Office::all();
        $position = Position::all();
        return Inertia::render('Admin/Staff/create',[
            'office' => $office,
            'position' => $position
        ]);
    }
    public function store(Request $request){
        $person = new Person();
        $person->first_name = $request->name;
        $person->last_name = $request->lastName;
        $person->photo = $request->file('file')->getClientOriginalName();
        $person->save();

        $staff = new Staff();
        $staff->person_id = $person->id;
        $staff->office_id = $request->office;
        $staff->position_id = $request->position;
        $staff->save();

        if($request->file('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $file = $request->file('file');
            Storage::disk('public')->put('/staff/'.$filename, \File::get($file));
        }
        sleep(1);

        return redirect()->route('staff.index')->with('success', 'Creado con éxito');
    }
    public function edit($id){
        $staff = Staff::where('person_id',$id)->with('person')->with('position')->join('office', 'office.id', '=', 'staff.office_id')->first();
        $office = Office::all();
        $position = Position::all();
        return Inertia::render('Admin/Staff/edit',[
            'staff' => $staff,
            'office' => $office,
            'position' => $position
        ]);
    }
    public function update(Request $request, $id){
        if($request->file('file')){
            $filename = $request->file('file')->getClientOriginalName();
        }
        else{
            $filename = null;
        }
        $person = Person::find($id);
        $person->first_name = $request->name;
        $person->last_name = $request->lastName;
        $person->photo = $filename;
        $person->save();

        $staff = Staff::where('person_id',$id)->first();
        $staff->position_id = $request->position;
        $staff->office_id = $request->office;
        $staff->position_id = $request->position;
        $staff->save();

        if($request->file('file')){
            $filename = $request->file('file')->getClientOriginalName();
            $file = $request->file('file');
            Storage::disk('public')->put('/staff/'.$filename, \File::get($file));
        }
        sleep(1);
        return redirect()->route('staff.index')->with('warning', 'Editado con éxito');
    }
    public function destroy($id){
        $person = Person::find($id)->delete();
        $staff = Staff::where('person_id',$id)->delete();
        sleep(1);

        return redirect()->route('staff.index')->with('danger', 'Eliminado con éxito');
    }
}
